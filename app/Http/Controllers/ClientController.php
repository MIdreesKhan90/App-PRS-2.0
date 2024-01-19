<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\Order;
use App\Models\SubCustomer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $conditionMain = [];
        $searchWord = '';

//        $recentClients = Client::selectRaw(
//            'client_id, phone, email, CONCAT(`last_name`,", ",`first_name`) as fullname, DATE_FORMAT(createdDate,"%m/%d/%Y") as createdDate')
//            ->where('cust_id', $user->cust_id)
//            ->orderByDesc('last_viewed_at')
//            ->limit(10)
//            ->get()->map(function ($query) {
//                $query->client_id_encrpt = Crypt::encrypt($query->client_id);
//                return $query;
//            });

        $recentOrderSubquery = Order::select('client_id')
            ->selectRaw('MAX(orderDate) as latestOrderDate')
            ->groupBy('client_id');

        $recentClients = Client::select([
            'kree_clients.client_id',
            'kree_clients.phone',
            'kree_clients.email',
            'kree_clients.last_viewed_at',
            DB::raw('CONCAT(kree_clients.last_name, ", ", kree_clients.first_name) as fullname'),
            DB::raw('DATE_FORMAT(kree_clients.createdDate, "%m/%d/%Y") as createdDate'),
            'ko.grandTotal',
            'kree_events.event_title',
            DB::raw('DATE_FORMAT(kree_events.eventStart, "%m/%d/%Y") as eventStartDate'),
        ])
            ->joinSub($recentOrderSubquery, 'ro', function ($join) {
                $join->on('kree_clients.client_id', '=', 'ro.client_id');
            })
            ->join('kree_orders as ko', function ($join) {
                $join->on('ko.client_id', '=', 'ro.client_id')
                    ->on('ko.orderDate', '=', 'ro.latestOrderDate');
            })
            ->leftJoin('kree_events', 'ko.order_id', '=', 'kree_events.order_id')
            ->where('kree_clients.cust_id', $user->cust_id)
            ->orderByDesc('kree_clients.last_viewed_at')
            ->limit(10)
            ->get()
            ->map(function ($client) {
                $client->client_id_encrpt = Crypt::encrypt($client->client_id);
                return $client;
            });

//        dd($recentClients)

        $categories = ClientCategory::where('cust_id', $user->cust_id)->get();
        $owners = SubCustomer::select('id', 'first_name', 'last_name', 'cust_type')->where('cust_id', $user->cust_id)->whereIn('cust_type', ['salesrep', 'affiliate'])->where('is_deleted', '!=', 1)->get();


        if (isset($request->search) && $request->search != '') {
            $searchWord = $request->search;
        }
        if (isset($request->status) && $request->status != '') {
            $conditionMain[] = ['isActive', "=", $request->status];
        }
        if (isset($request->category) && $request->category > 0) {
            $conditionMain[] = ['client_cat_id', "=", $request->category];
        }
        if (isset($request->owner) && $request->owner > 0) {
            $srchbysubuser = $request->owner;
        }

        $searchByChar = false;
        $betweenFirstChar = 'a';
        $betweenLastChar = 'z';
        $paginationfilter = '';

        if (isset($request->charSearch) && $request->searchTextbox == '' && $request->charSearch != '') {
            $paginationLimit = 0;
            $totalClients = Client::where('cust_id', $user['cust_id'])->count();
            if ($paginationLimit <= $totalClients) {
                $searchByChar = true;
                $paginationfilter = $request->charSearch;
                if ($paginationfilter) {
                    if ($paginationfilter == "other") {
                        $betweenFirstChar = 'a';
                        $betweenLastChar = 'z';
                    } else {
                        $searchChar = explode("-", $paginationfilter);
                        $betweenFirstChar = $searchChar[0];
                        $betweenLastChar = $searchChar[1];
                    }
                } else {
                    $betweenFirstChar = 'a';
                    $betweenLastChar = 'z';
                }
            }
        }

//        $perPage = 30;
        $clientsQry = Client::with('categoryData', 'ownerData')->where($conditionMain)->where(function ($query) use ($searchWord, $searchByChar, $betweenFirstChar, $betweenLastChar, $paginationfilter) {
            if ($searchWord != '') {
                $query->where('first_name', 'LIKE', '%' . $searchWord . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $searchWord . '%')
                    ->orWhere('company_name', 'LIKE', '%' . $searchWord . '%')
                    ->orWhere('email', 'LIKE', '%' . $searchWord . '%')
                    ->orWhere('full_address', 'LIKE', '%' . $searchWord . '%')
                    ->orWhere('address', 'LIKE', '%' . $searchWord . '%')
                    ->orWhere('phone', 'LIKE', '%' . $searchWord . '%');
            } else {
                if ($searchByChar) {
                    if ($paginationfilter == "other") {
                        $query->whereRaw('ASCII(UPPER(TRIM(last_name))) NOT BETWEEN ASCII(UPPER(?)) AND ASCII(UPPER(?))', [$betweenFirstChar, $betweenLastChar]);
                    } else {
                        $query->whereRaw('ASCII(UPPER(last_name)) BETWEEN ASCII(UPPER(?)) AND ASCII(UPPER(?))', [$betweenFirstChar, $betweenLastChar]);
                    }
                }
            }
        })
            ->where('cust_id', $user->cust_id)
            ->orderBy('last_name')->get();
//            ->paginate($perPage);

//        dd($clientsQry);
//        if ($clientsQry) {
//            if (!empty($clientsQry->items())) {
//                foreach ($clientsQry->items() as $client) {
//                    $client['client_id_encrpt'] = Crypt::encrypt($client['client_id']);
//                    $client['mail_to'] = 'mailto:' . $client['email'];
//                }
//            }
//        }
        return Inertia::render('Clients/Index', [
            'recentClients' => $recentClients,
            'clients' => $clientsQry,
            'categories' => $categories,
            'owners' => $owners,
        ]);
    }

    public function show($id){

        return Inertia::render('Clients/Show');
    }
}
