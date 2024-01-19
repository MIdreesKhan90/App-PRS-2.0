<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from "@/Components/DropdownLink.vue";
import Badge from "@/Components/Badge.vue";
import MainButton from "@/Components/Buttons/MainButton.vue";
import RecentClients from '@/Components/Clients/RecentClients.vue';

import {ref, watch} from "vue";
import {Head, router, Link} from '@inertiajs/vue3';

import {
    CheckIcon,
    ChevronRightIcon,
    ChevronDownIcon,
    EllipsisVerticalIcon,
    PlusIcon,
    MagnifyingGlassIcon,
    Squares2X2Icon,
    CheckCircleIcon,
    ArrowUpTrayIcon,
    TrashIcon,
    XMarkIcon,
    CubeIcon,
    EnvelopeIcon
} from "@heroicons/vue/24/outline";

import {Disclosure, DisclosureButton, DisclosurePanel} from '@headlessui/vue';

const selectedClients = ref([]);
const isFloatingActionsBar = ref(false);

const spaceBetween = 10;

const {recentClients, clients, categories, owners} = defineProps({
    recentClients: {
        type: Array,
    },
    clients: {
        type: Array,
    },
    categories: {
        type: Array,
    },
    owners: {
        type: Array,
    },
});

const tableKey = ref(Date.now());
const dataTableOptions = ref({
    lengthMenu: [25, 50, 100],
    order: [[1, 'asc']],
    autoWidth: false,
    columnDefs: [
        {
            targets: 0,
            orderable: false,
            searchable: false,
            width: "35px"
        },
        {
            targets: 1,
            width: "150px"
        },
        {
            targets: 2,
            width: "150px"
        },
        {
            targets: 3,
            width: "120px"
        },
        {
            targets: 4,
            width: "150px"
        },
        {
            targets: 5,
            width: "100px"
        },
        {
            targets: 6,
            width: "150px"
        },
        {
            targets: 7,
            width: "80px"
        },
        {
            targets: 8,
            orderable: false,
            searchable: false,
            width: "35px"
        }
    ],
    dom: 'rt<"dt-bottom-wrapper"lip>',
    language: {
        lengthMenu: 'Show: _MENU_ per page',
        paginate: {
            next: '<i class="icon-chevron-right"></i>',
            previous: '<i class="icon-chevron-left"></i>',
        },
    },
});

const charFilterList = ref([
    {value: "a-c", label: "A-C"},
    {value: "d-g", label: "D-G"},
    {value: "h-m", label: "H-M"},
    {value: "n-r", label: "N-R"},
    {value: "s-z", label: "S-Z"},
    {value: "other", label: "Other"}
]);

const charSearch = ref('');
const searchText = ref('');
const ownerValue = ref(null);
const categoryValue = ref(null);
const statusValue = ref('');

let data = {};

function toggleActionsBar() {
    isFloatingActionsBar.value = selectedClients.value.length > 0;
}

function changeCharFilter(value) {
    charSearch.value = value;
}

function doSearch() {
    router.visit('/clients', {
        method: 'get',
        data: data,
        preserveState: true,
        preserveScroll: true,
        only: ['clients'],
        onSuccess: page => {
            tableKey.value = Date.now();
        },
    })
}

function inputSearch() {
    data = {};
    if (searchText.value && searchText.value !== '') {
        data['search'] = searchText.value;
    }
    if (categoryValue && categoryValue.value !== '') {
        data['category'] = categoryValue.value;
    }
    if (statusValue && statusValue.value !== '') {
        data['status'] = statusValue.value;
    }
    if (charSearch && charSearch.value !== '') {
        data['charSearch'] = charSearch.value;
    }
    if (ownerValue && ownerValue.value !== '') {
        data['owner'] = ownerValue.value;
    }
    doSearch();
}

watch(
    [categoryValue, statusValue, charSearch, ownerValue],
    ([newCategory, newStatus, newCharSearch, newOwner]) => {
        data = {};
        if (searchText.value && searchText.value !== '') {
            data['search'] = searchText.value;
        }
        if (newCategory && newCategory > 0) {
            data['category'] = newCategory;
        }
        if (newStatus && newStatus.length > 0) {
            data['status'] = newStatus;
        }
        if (newCharSearch && newCharSearch.length > 0) {
            data['charSearch'] = newCharSearch;
        }
        if (newOwner && newOwner.length > 0) {
            data['owner'] = newOwner;
        }

        doSearch();
    }
);

</script>

<template>
    <Head title="Clients"/>
    <AuthenticatedLayout>
        <div class="bg-dark-100 w-full pt-9">
            <div class="container mx-auto px-4 sm:px-0">
                <RecentClients :clients="recentClients"/>
                <div class="bg-white rounded" v-if="clients">
                    <div class="px-5 py-4 lg:flex items-center justify-between md:border-b md:border-b-grey-50">
                        <div class="flex items-center">
                            <h5 class="text-grey-500 text-base font-semibold">Clients</h5>
                            <div class="rounded-3xl border border-success-300 bg-success-50 ml-2 py-1 px-2">
                                <p class="text-success-500 text-sm font-medium">{{ clients.length }}</p>
                            </div>
                        </div>
                        <div class="sm:flex items-center">
                            <div @submit.prevent="inputSearch"
                                 class="md:flex items-center hidden"
                            >
                                <div class="rounded border border-grey-50 flex w-96">
                                    <input
                                        id="search"
                                        type="text"
                                        name="search"
                                        v-model="searchText"
                                        placeholder="Search contacts, email & phone"
                                        class="border-none px-3 text-grey-200 text-sm w-full"
                                        autocomplete="off"
                                    >
                                    <MainButton
                                        type="submit"
                                        variant="primary"
                                        style-type="filled-outlined"
                                        class="rounded-tl-none rounded-bl-none"
                                        :icon="true"
                                    >
                                        <MagnifyingGlassIcon class="w-5 h-5"/>
                                    </MainButton>
                                </div>
                            </div>
                            <button type="button"
                                    class="btn btn-primary md:ml-4 text-base font-medium w-full md:w-auto mt-4 md:mt-0 flex justify-center">
                                <PlusIcon class="w-5 h-5 text-white mr-2"/>
                                Add New Client
                            </button>
                        </div>
                    </div>
                    <div class="md:hidden border-t border-grey-50 mx-5">
                        <Disclosure v-slot="{ open }">
                            <DisclosureButton class="flex w-full justify-between py-3">
                                <div class="text-sm font-medium text-grey-500">
                                    Sort by alphabet
                                </div>
                                <ChevronRightIcon :class="open ? 'rotate-90 transform' : ''" class="h-5 w-5"/>
                            </DisclosureButton>
                            <DisclosurePanel
                                class="relative after:absolute after:top-1 after:left-3 after:border-l after:border-white after:h-[196px]">
                                <div v-for="(filter, i) in charFilterList" :key="i" :data-val="filter.value">
                                    <button type="button"
                                            class="flex items-start justify-center py-2 px-5 rounded border border-grey-50 text-grey-500 text-sm font-medium hover:border-primary-500 hover:bg-primary-50 hover:text-primary-500 transition-all duration-300 w-full mt-2"
                                            :class="{ 'border-primary-500 bg-primary-50 text-primary-500': charSearch === filter.value }"
                                            @click.prevent="changeCharFilter(filter.value)">
                                        {{ filter.label }}
                                        <CheckIcon v-if="charSearch === filter.value" class="ml-1 w-4 h-4"/>
                                    </button>
                                </div>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                    <div class="md:hidden border-y border-grey-50 mx-5">
                        <Disclosure v-slot="{ open }">
                            <DisclosureButton class="flex w-full justify-between py-3">
                                <div class="text-sm font-medium text-grey-500">
                                    Filters
                                </div>
                                <ChevronRightIcon class="h-5 w-5" :class="open ? 'rotate-90 transform' : ''"/>
                            </DisclosureButton>
                            <DisclosurePanel
                                class="relative after:absolute after:top-1 after:left-3 after:border-l after:border-white after:h-[196px]">
                                <div class="relative">
                                    <select v-model="statusValue" class="rounded border border-grey-50 py-2 pl-5 pr-6 text-grey-500 text-sm font-medium w-full">
                                        <option selected value="">Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="relative mt-2">
                                    <select v-model="categoryValue" class="rounded border border-grey-50 py-2 pl-5 pr-6 text-grey-500 text-sm font-medium w-full">
                                        <option selected value="null">Category</option>
                                        <option value="">View All</option>
                                        <option
                                            v-for="(item, i) in categories"
                                            :value="item.id"
                                            :key="i">{{ item.cat_name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="relative mt-2">
                                    <select v-model="ownerValue" class="rounded border border-grey-50 py-2 pl-5 pr-6 text-grey-500 text-sm font-medium w-full">
                                        <option selected value="null">Owner</option>
                                        <option value="">View All</option>
                                        <option
                                            v-for="(item, i) in owners"
                                            :value="item.id"
                                            :key="i">{{ item.first_name }} {{ item.last_name }}
                                        </option>
                                    </select>
                                </div>
                            </DisclosurePanel>
                        </Disclosure>
                    </div>
                    <div class="hidden md:flex items-center justify-between py-4 px-5">
                        <div class="flex items-center flex-wrap gap-3 sm-gap-0 mb-4 lg:mb-0">
                            <div
                                v-for="(filter, i) in charFilterList"
                                :key="i"
                                :data-val="filter.value"
                            >
                                <button
                                    type="button"
                                    class="flex items-start py-2 px-5 rounded border border-grey-50 text-grey-500 text-sm font-medium hover:border-primary-500 hover:bg-primary-50 hover:text-primary-500 transition-all duration-300"
                                    :class="{ 'border-primary-500 bg-primary-50 text-primary-500': charSearch === filter.value }"
                                    @click="changeCharFilter(filter.value)"
                                >
                                    {{ filter.label }}
                                    <CheckIcon v-if="charSearch === filter.value" class="ml-1 w-4 h-4"/>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center flex-wrap gap-4">
                            <div>
                                <select v-model="statusValue" class="rounded border border-grey-50 py-2 pl-5 pr-6 text-grey-500 text-sm font-medium">
                                    <option selected value="">Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <div>
                                <select v-model="categoryValue" class="rounded border border-grey-50 py-2 pl-5 pr-6 text-grey-500 text-sm font-medium">
                                    <option selected value="null">Category</option>
                                    <option value="">View All</option>
                                    <option
                                        v-for="(item, i) in categories"
                                        :value="item.id"
                                        :key="i">{{ item.cat_name }}
                                    </option>
                                </select>
                            </div>
                            <div>
                                <select v-model="ownerValue" class="rounded border border-grey-50 py-2 pl-5 pr-6 text-grey-500 text-sm font-medium">
                                    <option selected value="null">Owner</option>
                                    <option value="">View All</option>
                                    <option
                                        v-for="(item, i) in owners"
                                        :value="item.id"
                                        :key="i">{{ item.first_name }} {{ item.last_name }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <form action=""
                          @submit.prevent="inputSearch"
                          class="flex md:hidden items-center my-4 mx-5"
                          autocomplete="off"
                    >
                        <div class="rounded border border-grey-50 flex w-96">
                            <input
                                id="search"
                                type="text"
                                name="search"
                                v-model="searchText"
                                placeholder="Search contacts, email & phone"
                                class="border-none px-3 text-grey-200 text-sm w-full"
                                autocomplete="off"
                            >
                            <MainButton type="submit">
                                <MagnifyingGlassIcon class="w-5 h-5"/>
                                afdasd
                            </MainButton>
                            <!--                            <button-->
                            <!--                                class="btn-primary text-white w-10 h-10 flex items-center justify-center rounded-tr rounded-br transition-all duration-300"-->
                            <!--                                type="submit">-->
                            <!--                                <MagnifyingGlassIcon class="w-5 h-5"/>-->
                            <!--                            </button>-->
                        </div>
                    </form>

                    <div class="relative overflow-x-auto">
                        <DataTable class="w-full" :key="tableKey" :options="dataTableOptions">
                            <thead>
                            <tr>
                                <th class="py-3 pl-4">
                                    <label class="custom-checkbox white">
                                        <input type="checkbox" value="">
                                        <span><CheckIcon class="w-4 h-4"/></span>
                                    </label>
                                </th>
                                <th class="py-3 text-grey-400 text-xs font-semibold">NAME</th>
                                <th class="py-3 text-grey-400 text-xs font-semibold">EMAIL</th>
                                <th class="py-3 text-grey-400 text-xs font-semibold">PHONE NUMBER</th>
                                <th class="py-3 text-grey-400 text-xs font-semibold">COMPANY</th>
                                <th class="py-3 text-grey-400 text-xs font-semibold">CATEGORY</th>
                                <th class="py-3 text-grey-400 text-xs font-semibold">OWNER</th>
                                <th class="py-3 text-grey-400 text-xs font-semibold">STATUS</th>
                                <th class="py-3 pr-4"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(item, key) in clients"
                                :key="key" class="border-b border-Grey-200">
                                <td class="py-5 pl-4">
                                    <label class="custom-checkbox">
                                        <input
                                            type="checkbox"
                                            :value="key"
                                            name="selectedClients[]"
                                            @change="toggleActionsBar" v-model="selectedClients">
                                        <span><CheckIcon class="w-4 h-4"/></span>
                                    </label>
                                </td>
                                <td class="text-grey-500 py-4 text-sm">
                                    <Link href="/client/123">{{ item.last_name + ' ' + item.first_name }}</Link>
                                </td>
                                <td class="text-grey-500 py-4 text-sm">
                                    <div class="w-48 overflow-hidden overflow-ellipsis">
                                        {{ item.email }}
                                    </div>
                                </td>
                                <td class="text-grey-500 py-4 text-sm">
                                    {{ item.phone }}
                                </td>
                                <td class="text-grey-500 py-4 text-sm">
                                    {{ item.company_name }}
                                </td>
                                <td class="text-grey-500 py-4 text-sm">
                                    {{
                                        item.category_data
                                            ? item.category_data
                                                .cat_name
                                            : "N/A"
                                    }}
                                </td>
                                <td class="text-grey-500 py-4 text-sm">
                                    {{
                                        item.owner_data
                                            ? item.owner_data
                                                .last_name +
                                            " " +
                                            item.owner_data
                                                .first_name
                                            : " "
                                    }}
                                </td>
                                <td class="py-4">
                                    <Badge :value="item.isActive" :type="item.isActive === 'Active' ? 'success' : 'error'"/>
                                </td>
                                <td class="text-grey-500 py-4 text-sm">
                                    <div class="relative flex justify-center">
                                        <Dropdown align="right" width="48">
                                            <template #trigger>
                                                <button type="button" class="inline-flex items-center text-grey-200">
                                                    <EllipsisVerticalIcon class="w-5 h-5"/>
                                                </button>
                                            </template>
                                            <template #content>
                                                <DropdownLink href="/">
                                                    <CubeIcon class="w-4 h-4 inline-block mr-2"/>
                                                    Create Order
                                                </DropdownLink>
                                                <DropdownLink href="/">
                                                    <EnvelopeIcon class="w-4 h-4 inline-block mr-2"/>
                                                    Email Client
                                                </DropdownLink>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </DataTable>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="isFloatingActionsBar" class="fixed text-center bottom-10 left-0 right-0">
            <div class="inline-flex gap-3 items-center px-4 py-3 rounded shadow-d bg-white/90 backdrop-blur-d">
                <a class="btn btn-secondary-outline px-3 font-medium leading-tight" href="/">
                    <Squares2X2Icon class="w-4 h-4 mr-2"/>
                    Change Categories</a>
                <a class="btn btn-secondary-outline px-3 font-medium leading-tight" href="/">
                    <CheckCircleIcon class="w-4 h-4 mr-2"/>
                    Change Status</a>
                <a class="btn btn-secondary-outline px-3 font-medium leading-tight" href="/">
                    <ArrowUpTrayIcon class="w-4 h-4 mr-2"/>
                    Export</a>
                <a class="btn btn-error-outline px-3 font-medium leading-tight" href="/">
                    <TrashIcon class="w-4 h-4 mr-2"/>
                    Delete</a>
                <a class="leading-tight" href="/" @click.prevent="isFloatingActionsBar = false">
                    <XMarkIcon class="w-5 h-5"/>
                </a>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
