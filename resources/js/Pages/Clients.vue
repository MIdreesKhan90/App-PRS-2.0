<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import SearchIcon from '@/Icons/SearchIcon.vue';
import CheckIcon from '@/Icons/CheckIcon.vue';
import ShortZAIcon from '@/Icons/ShortZAIcon.vue';
import ShortAltIcon from '@/Icons/ShortAltIcon.vue';
import DotDropdownIcon from '@/Icons/DotDropdownIcon.vue';
import ArrowLeftIcon from '@/Icons/ArrowLeftIcon.vue';
import ArrowRightIcon from '@/Icons/ArrowRightIcon.vue';
import EnvelopeIcon from '@/Icons/EnvelopeIcon.vue';
import PhoneCallIcon from '@/Icons/PhoneCallIcon.vue';
import Dropdown from '@/Components/Dropdown.vue';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="bg-gray-50 w-full h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="pt-9 pb-11">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xl font-semibold text-dark-600">Recently Viewed</h3>
                        <div class="flex items-center">
                            <a href="" class="bg-white w-9 h-9 flex items-center justify-center rounded mr-4">
                                <ArrowLeftIcon />
                            </a>
                            <a href="" class="bg-white w-9 h-9 flex items-center justify-center rounded">
                                <ArrowRightIcon />
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-5 gap-3">
                        <div class="bg-white rounded">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-4">
                                <h6 class="text-sm font-semibold text-dark-600">Savannah Nguyen</h6>
                                <div class="relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center">
                                                    <DotDropdownIcon />
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 text-xs">Active</a>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-dark-700">Birthday Party Celebration...</p>
                            <div class="flex items-center">
                                <p class="text-xs font-medium text-dark-700">$239.00</p>
                                <span class="mx-1 w-1 h-1 bg-gray-150 rounded-full"></span>
                                <p class="text-gray-300 text-xs font-medium">5/21/23</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-3 px-4 border-t border-gray-200 bg-gray-550">
                            <button type="button" class="text-dark-700 text-xs font-medium px-3 py-2 border border-gray-250 bg-white rounded-3xl">Create New Order</button>
                            <div class="flex items-center">
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <EnvelopeIcon />
                                </a>
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <PhoneCallIcon />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-4">
                                <h6 class="text-sm font-semibold text-dark-600">Savannah Nguyen</h6>
                                <div class="relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center">
                                                    <DotDropdownIcon />
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 text-xs">Active</a>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-dark-700">Birthday Party Celebration...</p>
                            <div class="flex items-center">
                                <p class="text-xs font-medium text-dark-700">$239.00</p>
                                <span class="mx-1 w-1 h-1 bg-gray-150 rounded-full"></span>
                                <p class="text-gray-300 text-xs font-medium">5/21/23</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-3 px-4 border-t border-gray-200 bg-gray-550">
                            <button type="button" class="text-dark-700 text-xs font-medium px-3 py-2 border border-gray-250 bg-white rounded-3xl">Create New Order</button>
                            <div class="flex items-center">
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <EnvelopeIcon />
                                </a>
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <PhoneCallIcon />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-4">
                                <h6 class="text-sm font-semibold text-dark-600">Savannah Nguyen</h6>
                                <div class="relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center">
                                                    <DotDropdownIcon />
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 text-xs">Active</a>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-dark-700">Birthday Party Celebration...</p>
                            <div class="flex items-center">
                                <p class="text-xs font-medium text-dark-700">$239.00</p>
                                <span class="mx-1 w-1 h-1 bg-gray-150 rounded-full"></span>
                                <p class="text-gray-300 text-xs font-medium">5/21/23</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-3 px-4 border-t border-gray-200 bg-gray-550">
                            <button type="button" class="text-dark-700 text-xs font-medium px-3 py-2 border border-gray-250 bg-white rounded-3xl">Create New Order</button>
                            <div class="flex items-center">
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <EnvelopeIcon />
                                </a>
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <PhoneCallIcon />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-4">
                                <h6 class="text-sm font-semibold text-dark-600">Savannah Nguyen</h6>
                                <div class="relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center">
                                                    <DotDropdownIcon />
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 text-xs">Active</a>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-dark-700">Birthday Party Celebration...</p>
                            <div class="flex items-center">
                                <p class="text-xs font-medium text-dark-700">$239.00</p>
                                <span class="mx-1 w-1 h-1 bg-gray-150 rounded-full"></span>
                                <p class="text-gray-300 text-xs font-medium">5/21/23</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-3 px-4 border-t border-gray-200 bg-gray-550">
                            <button type="button" class="text-dark-700 text-xs font-medium px-3 py-2 border border-gray-250 bg-white rounded-3xl">Create New Order</button>
                            <div class="flex items-center">
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <EnvelopeIcon />
                                </a>
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <PhoneCallIcon />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-4">
                                <h6 class="text-sm font-semibold text-dark-600">Savannah Nguyen</h6>
                                <div class="relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center">
                                                    <DotDropdownIcon />
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 text-xs">Active</a>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-dark-700">Birthday Party Celebration...</p>
                            <div class="flex items-center">
                                <p class="text-xs font-medium text-dark-700">$239.00</p>
                                <span class="mx-1 w-1 h-1 bg-gray-150 rounded-full"></span>
                                <p class="text-gray-300 text-xs font-medium">5/21/23</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between py-3 px-4 border-t border-gray-200 bg-gray-550">
                            <button type="button" class="text-dark-700 text-xs font-medium px-3 py-2 border border-gray-250 bg-white rounded-3xl">Create New Order</button>
                            <div class="flex items-center">
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <EnvelopeIcon />
                                </a>
                                <a href="" class="w-7 h-7 rounded-full flex items-center justify-center bg-white border border-gray-200 mr-2">
                                    <PhoneCallIcon />
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="bg-white rounded">
                    <div class="px-5 py-4 flex items-center justify-between border-b border-b-gray-200">
                        <div class="flex items-center">
                            <h5 class="text-dark-600 text-base font-semibold">Clients</h5>
                            <div class="border border-green-50 rounded-3xl ml-3 px-3 py-2">
                                <p class="text-green-500 text-xs font-semibold">12,700</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="rounded border border-gray-150 py-2 px-2 flex w-96">
                                <SearchIcon class="mr-2" />
                                <input type="text" name="search" id="search"
                                    placeholder="Type here clients name, company, email or address"
                                    class="p-0 pl-1 border-l border-y-0 border-r-0 border-l-green-500 text-xs font-medium text-dark-650 w-full">
                            </div>
                            <button type="button"
                                class="btn rounded bg-green-500 py-2 px-3 text-white text-sm font-medium ml-4">+ Add New
                                Client</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between py-4 px-5">
                        <div class="flex items-center">
                            <a href=""
                                class="py-2 px-4 rounded-3xl border border-green-50 bg-green-100 text-sm font-medium text-green-500 flex items-center">A-C
                                <CheckIcon class="ml-1" />
                            </a>
                            <a href=""
                                class="py-2 px-4 rounded-3xl border border-gray-250 ml-3 text-sm font-medium text-gray-300">D-G</a>
                            <a href=""
                                class="py-2 px-4 rounded-3xl border border-gray-250 ml-3 text-sm font-medium text-gray-300">H-M</a>
                            <a href=""
                                class="py-2 px-4 rounded-3xl border border-gray-250 ml-3 text-sm font-medium text-gray-300">N-R</a>
                            <a href=""
                                class="py-2 px-4 rounded-3xl border border-gray-250 ml-3 text-sm font-medium text-gray-300">S-Z</a>
                            <a href=""
                                class="py-2 px-4 rounded-3xl border border-gray-250 ml-3 text-sm font-medium text-gray-300">Others</a>
                        </div>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <label for="Status" class="text-base text-gray-300 mr-3">Status:</label>
                                <div class="relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button"
                                                    class="inline-flex items-center py-2 px-3 bg-white rounded border border-gray-200 text-dark-700 text-sm font-medium">
                                                    Active
                                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 text-xs">Active</a>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <div class="flex items-center ms-4">
                                <label for="Status" class="text-base text-gray-300 mr-3">Category:</label>
                                <div class="relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button"
                                                    class="inline-flex items-center py-2 px-3 bg-white rounded border border-gray-200 text-dark-700 text-sm font-medium">
                                                    All
                                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 text-xs">Active</a>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                            <div class="flex items-center ms-4">
                                <label for="Status" class="text-base text-gray-300 mr-3">Owner:</label>
                                <div class="relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button type="button"
                                                    class="inline-flex items-center py-2 px-3 bg-white rounded border border-gray-200 text-dark-700 text-sm font-medium">
                                                    View all
                                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                            <a href="" class="block p-2 text-xs">Active</a>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="w-full">
                        <thead class="bg-gray-350">
                            <tr class="text-left">
                                <th class="py-4 pl-4">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-150 rounded">
                                </th>
                                <th class="py-4 text-gray-400 text-xs font-semibold">
                                    <div class="flex items-center">
                                        NAME
                                        <ShortZAIcon class="ml-2" />
                                    </div>
                                </th>
                                <th class="py-4 text-gray-400 text-xs font-semibold">
                                    <div class="flex items-center">
                                        STATUS
                                        <ShortAltIcon class="ml-2" />
                                    </div>
                                </th>
                                <th class="py-4 text-gray-400 text-xs font-semibold">
                                    <div class="flex items-center">
                                        CATEGORY
                                        <ShortAltIcon class="ml-2" />
                                    </div>
                                </th>
                                <th class="py-4 text-gray-400 text-xs font-semibold">EMAIL</th>
                                <th class="py-4 text-gray-400 text-xs font-semibold">PHONE NUMBER</th>
                                <th class="py-4 text-gray-400 text-xs font-semibold">COMPANY</th>
                                <th class="py-4 text-gray-400 text-xs font-semibold">OWNER</th>
                                <th class="py-4 pr-4"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-5 pl-4">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-150 rounded">
                                </td>
                                <td class="text-sm text-gray-450 py-5">Savannah Nguyen</td>
                                <td class="py-5">
                                    <div class="py-1 px-2 rounded-3xl border border-green-150 bg-green-200 w-14">
                                        <p class="text-xs font-semibold text-green-250">Active</p>
                                    </div>
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Gross Payments
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    felicia.reid@example.com
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    (505) 555-0125
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Mitsubishi
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Cameron Williamson
                                </td>
                                <td class="py-5 pr-4">
                                    <div class="relative">
                                        <Dropdown align="right" width="48">
                                            <template #trigger>
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center">
                                                        <DotDropdownIcon />
                                                    </button>
                                                </span>
                                            </template>

                                            <template #content>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 text-xs">Active</a>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-5 pl-4">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-150 rounded">
                                </td>
                                <td class="text-sm text-gray-450 py-5">Savannah Nguyen</td>
                                <td class="py-5">
                                    <div class="py-1 px-2 rounded-3xl border border-green-150 bg-green-200 w-14">
                                        <p class="text-xs font-semibold text-green-250">Active</p>
                                    </div>
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Gross Payments
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    felicia.reid@example.com
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    (505) 555-0125
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Mitsubishi
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Cameron Williamson
                                </td>
                                <td class="py-5 pr-4">
                                    <div class="relative">
                                        <Dropdown align="right" width="48">
                                            <template #trigger>
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center">
                                                        <DotDropdownIcon />
                                                    </button>
                                                </span>
                                            </template>

                                            <template #content>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 text-xs">Active</a>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-5 pl-4">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-150 rounded">
                                </td>
                                <td class="text-sm text-gray-450 py-5">Savannah Nguyen</td>
                                <td class="py-5">
                                    <div class="py-1 px-2 rounded-3xl border border-green-150 bg-green-200 w-14">
                                        <p class="text-xs font-semibold text-green-250">Active</p>
                                    </div>
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Gross Payments
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    felicia.reid@example.com
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    (505) 555-0125
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Mitsubishi
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Cameron Williamson
                                </td>
                                <td class="py-5 pr-4">
                                    <div class="relative">
                                        <Dropdown align="right" width="48">
                                            <template #trigger>
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center">
                                                        <DotDropdownIcon />
                                                    </button>
                                                </span>
                                            </template>

                                            <template #content>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 text-xs">Active</a>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-5 pl-4">
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-150 rounded">
                                </td>
                                <td class="text-sm text-gray-450 py-5">Savannah Nguyen</td>
                                <td class="py-5">
                                    <div class="py-1 px-2 rounded-3xl border border-green-150 bg-green-200 w-14">
                                        <p class="text-xs font-semibold text-green-250">Active</p>
                                    </div>
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Gross Payments
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    felicia.reid@example.com
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    (505) 555-0125
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Mitsubishi
                                </td>
                                <td class="text-sm py-5 text-gray-450">
                                    Cameron Williamson
                                </td>
                                <td class="py-5 pr-4">
                                    <div class="relative">
                                        <Dropdown align="right" width="48">
                                            <template #trigger>
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center">
                                                        <DotDropdownIcon />
                                                    </button>
                                                </span>
                                            </template>

                                            <template #content>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 border-b border-gray-50 text-xs">Active</a>
                                                <a href="" class="block p-2 text-xs">Active</a>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex items-center justify-between py-5">
                    <div>
                        <p class="text-gray-300 text-base ">Showing 1 - 13 of 12,700 results</p>
                    </div>
                    <div class="flex items-center justify-end">
                        <a href="" class="bg-white w-9 h-7 flex items-center justify-center">
                            <ArrowLeftIcon />
                        </a>
                        <a href=""
                            class="bg-green-500 w-9 h-7 flex items-center justify-center ml-2 text-white text-sm font-medium">1</a>
                        <a href=""
                            class="bg-white w-9 h-7 flex items-center justify-center ml-2 text-gray-400 text-sm font-medium">2</a>
                        <a href=""
                            class="bg-white w-9 h-7 flex items-center justify-center ml-2 text-gray-400 text-sm font-medium">3</a>
                        <a href=""
                            class="bg-white w-9 h-7 flex items-center justify-center ml-2 text-gray-400 text-sm font-medium">4</a>
                        <a href=""
                            class="bg-white w-9 h-7 flex items-center justify-center ml-2 text-gray-400 text-sm font-medium">5</a>
                        <a href="" class="bg-white w-9 h-7 flex items-center justify-center ml-2">
                            <ArrowRightIcon />
                        </a>
                    </div>
                </div>
            </div>
    </div>
</AuthenticatedLayout></template>
