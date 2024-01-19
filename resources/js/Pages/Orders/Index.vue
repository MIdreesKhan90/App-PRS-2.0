<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import OrdersHeader from '@/Layouts/OrdersHeader.vue';
import DeliverySheetIcon from '@/Icons/DeliverySheetIcon.vue';
import PreviewIcon from '@/Icons/PreviewIcon.vue';
import PrintIcon from '@/Icons/PrintIcon.vue';
import PlusIcon from '@/Icons/PlusIcon.vue';
import PlusWhiteIcon from '@/Icons/PlusWhiteIcon.vue';
import CardIcon from '@/Icons/CardIcon.vue';
import OrderLogo from '@/Icons/OrderLogo.vue';
import DiscountIcon from '@/Icons/DiscountIcon.vue';
import EditIcon from '@/Icons/EditIcon.vue';
import EditProductIcon from '@/Icons/EditProductIcon.vue';
import {Head} from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import {Disclosure, DisclosureButton, DisclosurePanel} from '@headlessui/vue'
import {ChevronRightIcon, ChevronUpIcon, ChevronLeftIcon,} from '@heroicons/vue/20/solid'
</script>

<template>
    <Head title="Orders"/>

    <AuthenticatedLayout>
        <OrdersHeader></OrdersHeader>

        <div class="bg-Grey-300">
            <div class="max-w-7xl mx-auto py-6">
                <div class="flex justify-between">
                    <div class="flex">
                        <div class="mr-3 relative">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                                class="flex items-center rounded bg-white py-2 px-3 text-sm font-medium text-dark-600">
                                            <PlusIcon/>
                                            Add
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" class="ms-3">
                                                <path
                                                    d="M13.5775 7.74414L9.99997 11.3216L6.42247 7.74414L5.24414 8.92247L9.99997 13.6783L14.7558 8.92247L13.5775 7.74414Z"
                                                    fill="#535964"/>
                                            </svg>
                                        </button>
                                    </span>
                                </template>

                                <template #content>
                                    <DropdownLink :href="route('profile.edit')"
                                                  class="flex items-center px-3 py-2 text-sm font-medium text-dark-600 border-b border-Grey-200">
                                        <AccountProfileIcon class="inline-block"/>
                                        <DeliverySheetIcon class="mr-1"/>
                                        Invoice Notes
                                    </DropdownLink>
                                    <DropdownLink :href="route('profile.edit')"
                                                  class="flex items-center px-3 py-2 text-sm font-medium text-dark-600 border-b border-Grey-200">
                                        <SystemSettingsIcon class="inline-block"/>
                                        <DeliverySheetIcon class="mr-1"/>
                                        Internal Memo
                                    </DropdownLink>
                                    <DropdownLink :href="route('logout')"
                                                  class="flex items-center px-3 py-2 text-sm font-medium text-dark-600">
                                        <LogoutIcon class="inline-block"/>
                                        Client Notes
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                        <button type="button"
                                class="py-2 px-3 bg-white rounded border border-Grey-200 text-sm font-medium text-Grey-400 flex items-center">
                            <DeliverySheetIcon class="mr-1"/>
                            Delivery Sheet
                        </button>
                        <button type="button"
                                class="py-2 px-3 bg-white rounded border border-Grey-200 text-sm font-medium text-Grey-400 ml-4 flex items-center">
                            <PreviewIcon class="mr-1"/>
                            Preview
                        </button>
                        <button type="button"
                                class="py-2 px-3 rounded bg-gray-150 border border-Success-50 text-sm font-medium text-Primary-500 ml-4 flex items-center">
                            <PrintIcon class="mr-1"/>
                            Print/Email
                        </button>
                    </div>
                    <div class="flex items-center justify-end">
                        <p>Order status :</p>
                        <div class="ms-3 relative">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                                class="flex items-center rounded bg-Grey-500 border border-Warning-50 py-2 px-3 text-sm font-medium text-Warning-100">
                                            Pending
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" fill="#EC9126"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </span>
                                </template>

                                <template #content>
                                    <DropdownLink :href="route('profile.edit')">
                                        <AccountProfileIcon class="inline-block"/>
                                        Account Profile
                                    </DropdownLink>
                                    <DropdownLink :href="route('profile.edit')">
                                        <SystemSettingsIcon class="inline-block"/>
                                        System Settings
                                    </DropdownLink>
                                    <DropdownLink :href="route('logout')" method="post" as="button">
                                        <LogoutIcon class="inline-block"/>
                                        Log Out
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                        <div class="ms-3 relative">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                                class="flex items-center rounded bg-gray-50 border border-Success-700 py-2 px-3 text-sm font-medium text-Success-600">
                                            Confirmed
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" fill="#38BE4E"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </span>
                                </template>

                                <template #content>
                                    <DropdownLink :href="route('profile.edit')">
                                        <AccountProfileIcon class="inline-block"/>
                                        Account Profile
                                    </DropdownLink>
                                    <DropdownLink :href="route('profile.edit')">
                                        <SystemSettingsIcon class="inline-block"/>
                                        System Settings
                                    </DropdownLink>
                                    <DropdownLink :href="route('logout')" method="post" as="button">
                                        <LogoutIcon class="inline-block"/>
                                        Log Out
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-5">
                    <div class="col-span-8">
                        <div class="bg-white rounded w-full">
                            <div class="flex justify-between p-5 border-b border-gray-200">
                                <div class="flex">
                                    <OrderLogo/>
                                    <div class="ms-4">
                                        <h3 class="text-dark-700 text-lg font-semibold">Brentwood Party Rentals</h3>
                                        <p class="text-gray-300 text-base">(888) 555-1212</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-gray-300 text-base text-right">
                                        2610 Empire Avenue Fountain Valley, CA 93829
                                        <br>
                                        www.brentwoodpartyrentals.com
                                    </p>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex mb-4">
                                    <p class="text-gray-700 text-sm mr-6">Invoice: <span
                                        class="text-Grey-400">#103293</span></p>
                                    <p class="text-gray-700 text-sm mr-6">Created: <span
                                        class="text-Grey-400">11/27/23</span></p>
                                    <p class="text-gray-700 text-sm mr-6 flex">Source: <span class="text-Grey-400">Repeat
                                            Customer</span> <a href="" class="inline ml-2">
                                        <EditIcon/>
                                    </a></p>
                                    <p class="text-gray-700 text-sm flex">Method: <span
                                        class="text-Grey-400">Delivery</span> <a href="" class="inline ml-2">
                                        <EditIcon/>
                                    </a></p>
                                </div>
                                <div class="rounded bg-gray-550 border border-Grey-200 p-4">
                                    <div class="grid grid-cols-2 gap-9">
                                        <div>
                                            <h4 class="text-sm font-semibold mb-3 text-dark-700">Billed to</h4>
                                            <div class="px-4 py-3 bg-white rounded border border-Grey-200">
                                                <p class="text-sm text-gray-300">
                                                    Allen Smith
                                                    <br>
                                                    87 Private St. Seattle, WA
                                                    <br>
                                                    allen@gmail.com
                                                    <br>
                                                    951-595-1338 / 951-834-2773
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-semibold mb-3 text-dark-700">Event Information</h4>
                                            <div class="px-4 py-3 bg-white rounded border border-Grey-200 flex gap-6">
                                                <p class="text-sm text-gray-300">
                                                    Birthday Party for Chris
                                                    <br>
                                                    30658 Alston Lance
                                                    <br>
                                                    Menifee, CA 92584
                                                </p>
                                                <div class="relative">
                                                    <a href="" class="bg-white rounded p-1 block absolute -top-5 -right-9">
                                                        <EditIcon/>
                                                    </a>
                                                    <p class="text-sm text-gray-600">Date Start : <span
                                                        class="text-Grey-400">11/27/23</span></p>
                                                    <p class="text-sm text-gray-600">Date End : <span
                                                        class="text-Grey-400">17/27/23</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded w-full p-5 mt-4">
                            <h3 class="pb-4 text-base font-semibold text-dark-700 border-b border-gray-450">Invoice Notes
                            </h3>
                            <textarea name="message" id="message" cols="30" rows="3" placeholder="Write your note here..."
                                      class="w-full rounded border border-Grey-200"></textarea>
                            <button type="button"
                                    class="py-2 px-3 rounded bg-gray-150 border border-Success-50 text-sm font-medium text-Primary-500 w-40 mt-2">
                                Save
                            </button>
                        </div>
                        <div class="bg-white rounded w-full p-5 mt-4">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton
                                    class="flex w-full justify-between py-3 px-2 text-base font-semibold pb-4 border-b border-gray-450 text-dark-700">
                                    Order Information
                                    <ChevronRightIcon :class="open ? 'rotate-90 transform' : ''"
                                                      class="h-5 w-5 text-gray-600"/>
                                </DisclosureButton>
                                <DisclosurePanel class="pt-4">
                                    <h6 class="text-gray-300 text-sm font-medium">Where will your event be located?:</h6>
                                    <p class="mt-2 text-gray-400 text-sm">Yes / Dog will be secured at Setup & Pickup</p>
                                    <h6 class="text-gray-300 text-sm font-medium mt-6">Where will your event be located?:
                                    </h6>
                                    <p class="mt-2 text-gray-400 text-sm">A Home</p>
                                    <h6 class="text-gray-300 text-sm font-medium mt-6">We have a 30% Cancellation Fee that
                                        requires a 10 day notice. Please agree.:</h6>
                                    <p class="mt-2 text-gray-400 text-sm">yes, i am aware and agree to terms of the
                                        cancellation fee</p>
                                </DisclosurePanel>
                            </Disclosure>
                        </div>
                        <div class="bg-white rounded w-full p-5 mt-4">
                            <h3 class="pb-4 text-base font-semibold text-dark-700 border-b border-gray-450">Reservations
                            </h3>
                            <input type="text" name="name" id="name" placeholder="Add products (Search by SKU, name...)"
                                   class="px-4 py-3 rounded border border-Grey-200 my-4 w-full">
                            <div class="rounded border border-Grey-200 p-3">
                                <table class="w-full">
                                    <thead class="rounded bg-gray-550 border border-Grey-200">
                                    <tr>
                                        <th class="text-gray-400 text-xs font-medium py-3 text-left pl-3">PRODUCTS</th>
                                        <th class="text-gray-400 text-xs font-medium py-3 text-left">SKU</th>
                                        <th class="text-gray-400 text-xs font-medium py-3 text-left">QTY</th>
                                        <th class="text-gray-400 text-xs font-medium py-3 text-left">Price</th>
                                        <th class="text-gray-400 text-xs font-medium py-3 text-left">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b border-Grey-200">
                                        <td class="pr-5 py-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <ChevronUpIcon class="w-6 h-6 mr-2"/>
                                                    <div>
                                                        <h6>Spiderman Bounce House</h6>
                                                        <div class="flex items-center">
                                                            <p class="text-xs text-gray-400">Color: Gold</p>
                                                            <span class="bg-gray-650 w-1 h-1 rounded-full mx-2"></span>
                                                            <p class="text-xs text-gray-400">Style: Flat</p>
                                                            <span class="bg-gray-650 w-1 h-1 rounded-full mx-2"></span>
                                                            <p class="text-xs text-gray-400">Size: XL</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <EditProductIcon/>
                                            </div>
                                        </td>
                                        <td class="text-gray-400 text-sm py-3">SKU-123456</td>
                                        <td class="text-gray-400 text-sm py-3">12</td>
                                        <td class="text-gray-400 text-sm py-3">$3000</td>
                                        <td class="text-gray-400 text-sm py-3">$40.00</td>
                                    </tr>
                                    <tr class="border-b border-Grey-200">
                                        <td class="pr-5 py-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <ChevronUpIcon class="w-6 h-6 mr-2"/>
                                                    <div>
                                                        <h6>Spiderman Bounce House</h6>
                                                        <div class="flex items-center">
                                                            <p class="text-xs text-gray-400">Color: Gold</p>
                                                            <span class="bg-gray-650 w-1 h-1 rounded-full mx-2"></span>
                                                            <p class="text-xs text-gray-400">Style: Flat</p>
                                                            <span class="bg-gray-650 w-1 h-1 rounded-full mx-2"></span>
                                                            <p class="text-xs text-gray-400">Size: XL</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <EditProductIcon/>
                                            </div>
                                        </td>
                                        <td class="text-gray-400 text-sm py-3">SKU-123456</td>
                                        <td class="text-gray-400 text-sm py-3">12</td>
                                        <td class="text-gray-400 text-sm py-3">$3000</td>
                                        <td class="text-gray-400 text-sm py-3">$40.00</td>
                                    </tr>
                                    <tr class="border-b border-Grey-200">
                                        <td class="pr-5 py-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <ChevronUpIcon class="w-6 h-6 mr-2"/>
                                                    <div>
                                                        <h6>Spiderman Bounce House</h6>
                                                        <div class="flex items-center">
                                                            <p class="text-xs text-gray-400">Color: Gold</p>
                                                            <span class="bg-gray-650 w-1 h-1 rounded-full mx-2"></span>
                                                            <p class="text-xs text-gray-400">Style: Flat</p>
                                                            <span class="bg-gray-650 w-1 h-1 rounded-full mx-2"></span>
                                                            <p class="text-xs text-gray-400">Size: XL</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <EditProductIcon/>
                                            </div>
                                        </td>
                                        <td class="text-gray-400 text-sm py-3">SKU-123456</td>
                                        <td class="text-gray-400 text-sm py-3">12</td>
                                        <td class="text-gray-400 text-sm py-3">$3000</td>
                                        <td class="text-gray-400 text-sm py-3">$40.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="w-1/3 ms-auto mr-3">
                                    <tr>
                                        <td class="text-right text-gray-400 text-sm py-2">Delivery Fee</td>
                                        <td class="text-right text-gray-400 text-sm py-2">$100.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-gray-400 text-sm py-2">Discount</td>
                                        <td class="text-right text-gray-400 text-sm py-2">-$10.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-gray-400 text-sm py-2">Waiver Fee 10%</td>
                                        <td class="text-right text-gray-400 text-sm py-2">$69.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-Grey-400 text-sm font-medium py-2">Sub Total</td>
                                        <td class="text-right text-Grey-400 text-sm font-medium py-2">$759.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-gray-400 text-sm py-2">Tax 6%</td>
                                        <td class="text-right text-gray-400 text-sm py-2">$45.54</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-gray-400 text-sm py-2">Fixed Fee</td>
                                        <td class="text-right text-gray-400 text-sm py-2">$50.00</td>
                                    </tr>
                                </table>
                                <div class="rounded border border-Grey-200 bg-gray-550 px-3 py-2">
                                    <div class="text-right flex justify-end gap-8">
                                        <h6 class="text-dark-700 text-sm font-medium">Grand Total</h6>
                                        <h6 class="text-dark-700 text-sm font-medium">$854.54</h6>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-6 text-black text-5xl">Walter</h1>
                            <div class="flex items-center">
                                <p class="text-gray-400 text-sm">Client Signature</p>
                                <span class="bg-gray-700 w-1 h-1 rounded-full mx-1"></span>
                                <p class="text-gray-400 text-sm">26 Aug, 2023 at 9:00 AM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="bg-white rounded">
                            <h4 class="px-5 py-4 border-b border-gray-200 text-base font-semibold text-dark-700">Internal
                                Memo</h4>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-gray-250 mb-4">PAYMENTS</p>
                                <table class="w-full">
                                    <tr>
                                        <td class="text-sm text-gray-300 pb-3">12/30/22</td>
                                        <td class="text-sm text-gray-300 pb-3">Cash</td>
                                        <td class="text-sm text-gray-300 text-right pb-3">+$100.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm text-gray-300 pb-3">12/30/22</td>
                                        <td class="text-sm text-gray-300 pb-3">Cash</td>
                                        <td class="text-sm text-gray-300 text-right pb-3">+$100.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm text-gray-300 pb-3">12/30/22</td>
                                        <td class="text-sm text-gray-300 pb-3">Cash</td>
                                        <td class="text-sm text-gray-300 text-right pb-3">+$100.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm text-gray-300 pb-3">12/30/22</td>
                                        <td class="text-sm text-gray-300 pb-3">Refund</td>
                                        <td class="text-sm text-gray-300 text-right pb-3">+$100.00</td>
                                    </tr>
                                    <tr class="border-t border-gray-450">
                                        <td class="py-3 text-sm text-gray-300">Total Paid</td>
                                        <td></td>
                                        <td class="py-3 text-sm text-gray-300 text-right">-$350.00</td>
                                    </tr>
                                    <tr class="rounded bg-gray-550 border border-Grey-200">
                                        <td class="p-2 text-sm text-dark-700">Remaining Balance</td>
                                        <td></td>
                                        <td class="text-right text-sm font-medium text-dark-700 pr-4">$650.00</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="px-5 py-4 border-t border-gray-200 ">
                                <div class="flex gap-3">
                                    <button type="button"
                                            class="w-full py-2 px-3 rounded bg-gray-150 border border-Success-50 text-sm font-medium text-Primary-500 flex items-center">
                                        <CardIcon class="mr-1"/>
                                        Update Card
                                    </button>
                                    <button type="button"
                                            class="w-full py-2 px-3 rounded bg-gray-150 border border-Success-50 text-sm font-medium text-Primary-500 flex items-center">
                                        <DiscountIcon class="mr-1"/>
                                        Apply Discount
                                    </button>
                                </div>
                                <button type="button"
                                        class="flex items-center justify-center text-white text-sm font-medium w-full bg-Primary-500 py-2 rounded my-3">
                                    <PlusWhiteIcon class="mr-1 "/>
                                    Add Balance
                                </button>
                                <a href="" class="text-center text-sm font-medium text-Error-50 block">Issue Refund</a>
                            </div>
                        </div>
                        <div class="rounded border border-gray-200 mt-4">
                            <h4 class="px-5 py-4 border-b border-gray-200 text-base font-semibold text-dark-700">Internal
                                Memo</h4>
                            <p class="text-sm text-Grey-400 py-4 px-5">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="rounded border border-gray-200 mt-4">
                            <h4 class="px-5 py-4 border-b border-gray-200 text-base font-semibold text-dark-700">Order
                                History</h4>
                            <div class="px-5 pb-5">
                                <div class="py-4 border-b border-gray-200">
                                    <p class="text-gray-250 text-sm font-medium mb-1"><span class="text-gray-300">Online
                                            Payment</span> of <span class="text-gray-300">$4.64</span> Added</p>
                                    <div class="flex items-center">
                                        <p class="text-xs font-medium text-Primary-500">Online</p> <span
                                        class="block bg-gray-350 w-1 h-1 mx-1 rounded-full"></span>
                                        <p class="text-xs text-gray-400">10 Aug, 2023 at 10:00PM</p>
                                    </div>
                                </div>
                                <div class="py-4 border-b border-gray-200">
                                    <p class="text-gray-250 text-sm font-medium mb-1"><span class="text-gray-300">Online
                                            Payment</span> of <span class="text-gray-300">$4.64</span> Added</p>
                                    <div class="flex items-center">
                                        <p class="text-xs font-medium text-Primary-500">Online</p> <span
                                        class="block bg-gray-350 w-1 h-1 mx-1 rounded-full"></span>
                                        <p class="text-xs text-gray-400">10 Aug, 2023 at 10:00PM</p>
                                    </div>
                                </div>
                                <div class="py-4 border-b border-gray-200">
                                    <p class="text-gray-250 text-sm font-medium mb-1"><span class="text-gray-300">Online
                                            Payment</span> of <span class="text-gray-300">$4.64</span> Added</p>
                                    <div class="flex items-center">
                                        <p class="text-xs font-medium text-Primary-500">Online</p> <span
                                        class="block bg-gray-350 w-1 h-1 mx-1 rounded-full"></span>
                                        <p class="text-xs text-gray-400">10 Aug, 2023 at 10:00PM</p>
                                    </div>
                                </div>
                                <div class="py-4 border-b border-gray-200">
                                    <p class="text-gray-250 text-sm font-medium mb-1"><span class="text-gray-300">Online
                                            Payment</span> of <span class="text-gray-300">$4.64</span> Added</p>
                                    <div class="flex items-center">
                                        <p class="text-xs font-medium text-Primary-500">Online</p> <span
                                        class="block bg-gray-350 w-1 h-1 mx-1 rounded-full"></span>
                                        <p class="text-xs text-gray-400">10 Aug, 2023 at 10:00PM</p>
                                    </div>
                                </div>
                                <div class="py-4 border-b border-gray-200">
                                    <p class="text-gray-250 text-sm font-medium mb-1"><span class="text-gray-300">Online
                                            Payment</span> of <span class="text-gray-300">$4.64</span> Added</p>
                                    <div class="flex items-center">
                                        <p class="text-xs font-medium text-Primary-500">Online</p> <span
                                        class="block bg-gray-350 w-1 h-1 mx-1 rounded-full"></span>
                                        <p class="text-xs text-gray-400">10 Aug, 2023 at 10:00PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>
