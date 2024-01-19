<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import Toggle from "@/Components/Switches/Toggle.vue"
import MainButton from "@/Components/Buttons/MainButton.vue";

import { ref } from 'vue';

import { Head, useForm } from '@inertiajs/vue3';

import { ChevronLeftIcon, PlusIcon, XMarkIcon, TrashIcon, ChevronDownIcon } from "@heroicons/vue/24/solid";
import Badge from "@/Components/Badge.vue";

const enabled = ref(false);
const enabled2 = ref(false);

const form = useForm({
    email: '',
    password: '',
    firstName: '',
    lastName: '',
    companyName: '',
    primaryPhone: '',
    alternatePhone: '',
    address: ''
});

const category = ref(false);
const showCategoryModal = () => {
    category.value = true;
};
const hideCategoryModal = () => {
    category.value = false;
};

</script>

<template>
    <Head title="Clients" />
    <AuthenticatedLayout>
        <div class="bg-white py-5 w-full">
            <div class="container mx-auto px-4 sm:px-0 flex items-center justify-between">
                <div class="flex items-center">
                    <button type="button" class="p-3 rounded-d border border-green-50 bg-white">
                        <ChevronLeftIcon class="w-4 h-4" />
                    </button>
                    <h4 class="ml-3 text-grey-500 text-xl font-medium">Edit Clients</h4>
                </div>
                <div class="flex items-center">
                    <button type="button" class="py-2 px-3 text-grey-500 text-base font-medium">
                        Cancel
                    </button>
                    <MainButton type="submit" variant="primary" style-type="filled" class=" flex justify-center">
                        Update
                    </MainButton>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-4 pt-6 pb-14">
                <div class="col-span-8">
                    <form action="">
                        <h5 class="text-grey-500 text-lg font-medium mb-4">Login Information</h5>
                        <div class="rounded-d bg-white p-5 grid grid-cols-2 gap-4 mb-6">
                            <div>
                                <InputLabel for="email">Email <span class='text-grey-200'>(Optional)</span></InputLabel>
                                <TextInput id="email" type="email" v-model="form.email" class="mt-2 block w-full"
                                    placeholder="test@example.com" />
                            </div>
                            <div>
                                <InputLabel for="password">Password <span class='text-grey-200'>(Optional)</span>
                                </InputLabel>
                                <TextInput id="password" type="password" v-model="form.password" class="mt-2 block w-full"
                                    placeholder="Password" />
                            </div>
                        </div>
                        <h5 class="text-grey-500 text-lg font-medium mb-4">Clients Information</h5>
                        <div class="rounded-d bg-white p-5 mb-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <InputLabel for="first_name">First Name</InputLabel>
                                    <TextInput id="first_name" type="text" v-model="form.firstName"
                                        class="mt-2 block w-full" placeholder="First name" />
                                </div>
                                <div>
                                    <InputLabel for="last_name">Last Name</InputLabel>
                                    <TextInput id="last_name" type="text" v-model="form.lastName" class="mt-2 block w-full"
                                        placeholder="Last name" />
                                </div>
                            </div>
                            <div class="mt-6">
                                <InputLabel for="company_name">Company Name <span class="text-grey-200">(Optional)</span>
                                </InputLabel>
                                <TextInput id="company_name" type="text" v-model="form.companyName"
                                    class="mt-2 block w-full" placeholder="Company name" />
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-6">
                                <div>
                                    <InputLabel for="primary_phone">Primary Phone Number</InputLabel>
                                    <TextInput id="primary_phone" type="tel" v-model="form.primaryPhone"
                                        class="mt-2 block w-full" placeholder="Phone number" />
                                </div>
                                <div>
                                    <InputLabel for="alternate_phone">Alternate Phone Number <span
                                            class="text-grey-200">(Optional)</span></InputLabel>
                                    <TextInput id="alternate_phone" type="tel" v-model="form.alternatePhone"
                                        class="mt-2 block w-full" placeholder="Phone number" />
                                </div>
                            </div>
                            <div class="mt-6">
                                <InputLabel for="category">Category <span class="text-grey-200">(Optional)</span>
                                </InputLabel>
                                <div class="flex gap-3 mt-2">
                                    <div class="relative w-full">
                                        <select id="Category"
                                            class="py-2.5 px-3 rounded-d text-grey-500 text-sm border border-grey-50 focus:border-grey-50 focus:shadow-none focus:ring-primary-500 w-full bg-transparent bg-none relative z-10 cursor-pointer">
                                            <option value="">Category</option>
                                        </select>
                                        <span class="w-10 h-10 rounded-t-r-d rounded-b-r-b bg-grey-25 absolute top-0 right-0 flex items-center justify-center">
                                            <ChevronDownIcon class="w-5 h-5 text-blue-grey-300" />
                                        </span>
                                    </div>
                                    <MainButton type="submit" variant="primary" style-type="filled-outlined" :icon="true"
                                        @click.prevent="showCategoryModal"
                                        class="w-10 h-10 flex items-center justify-center border border-primary-500">
                                        <PlusIcon class="w-5 h-5 text-primary-500" />
                                    </MainButton>
                                </div>
                            </div>
                            <div class="mt-6">
                                <InputLabel for="address">Address</InputLabel>
                                <TextInput id="address" type="text" v-model="form.address" class="mt-2 block w-full"
                                    placeholder="Address" />
                            </div>
                            <div class="flex items-center justify-between mt-11 pb-5 border-b border-grey-50">
                                <div>
                                    <h6 class="mb-1 text-grey-500 text-base font-medium">Tax Exempt</h6>
                                    <p class="text-grey-300 text-sm font-medium">There is paragraph text, There is paragraph
                                        text</p>
                                </div>
                                <div>
                                    <Toggle v-model="enabled" />
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-5">
                                <div>
                                    <h6 class="mb-1 text-grey-500 text-base font-medium">Status</h6>
                                </div>
                                <div>
                                    <Toggle v-model="enabled2" />
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="flex mt-6">
                        <p class="text-grey-300 text-sm">Clients Created: <span class="text-grey-500">2016-05-17
                                23:26:56</span></p>
                        <p class="text-grey-300 text-sm ml-9">Last Updated: <span class="text-grey-500">2016-05-17
                                23:26:56</span></p>
                    </div>
                </div>
                <div class="col-span-4">
                    <h5 class="text-grey-500 text-lg font-medium mb-4">Notes</h5>
                    <div class="bg-white p-5 rounded-d mb-6">
                        <textarea name="description" id="description" cols="30" rows="4" placeholder="Description"
                            class="w-full py-2 px-3 rounded border border-grey-50 text-sm placeholder:text-sm text-grey-200 placeholder:text-grey-200"></textarea>
                        <MainButton type="submit" variant="primary" style-type="filled-outlined"
                            class="w-full flex items-center justify-center border border-primary-500 mt-3">
                            <PlusIcon class="w-5 h-5 text-primary-500 mr-2" />
                            Add Note
                        </MainButton>
                        <div class="mt-4 px-2 py-3 border-b border-grey-50">
                            <h4 class="text-grey-500 text-sm">and here i come</h4>
                            <p class="text-grey-300 text-xs">2023-12-17 10:37:24</p>
                        </div>
                        <div class="px-2 py-3 border-b border-grey-50">
                            <h4 class="text-grey-500 text-sm">and here i come</h4>
                            <p class="text-grey-300 text-xs">2023-12-17 10:37:24</p>
                        </div>
                        <MainButton type="submit" variant="primary" style-type="outlined"
                            class="w-full flex items-center justify-center border border-primary-500 mt-3">
                            Show More
                        </MainButton>
                    </div>
                    <h5 class="text-grey-500 text-lg font-medium mb-4">Order History</h5>
                    <div class="bg-white rounded-d mb-6">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-grey-50">
                                    <td class="py-3 px-2 text-grey-500 text-xs font-semibold uppercase">ID</td>
                                    <td class="py-3 px-2 text-grey-500 text-xs font-semibold uppercase">Event</td>
                                    <td class="py-3 px-2 text-grey-500 text-xs font-semibold uppercase">Source</td>
                                    <td class="py-3 px-2 text-grey-500 text-xs font-semibold uppercase flex items-center">
                                        Status
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" class="ml-2">
                                            <path
                                                d="M4.39992 6.66667H11.6001C11.6792 6.66665 11.7565 6.64176 11.8223 6.59514C11.888 6.54852 11.9393 6.48227 11.9696 6.40476C11.9998 6.32725 12.0077 6.24197 11.9923 6.15969C11.9769 6.0774 11.9388 6.00182 11.8829 5.94249L8.28281 2.12432C8.24568 2.08491 8.20159 2.05364 8.15307 2.03231C8.10454 2.01098 8.05253 2 8 2C7.94747 2 7.89546 2.01098 7.84693 2.03231C7.79841 2.05364 7.75432 2.08491 7.71719 2.12432L4.11712 5.94249C4.06119 6.00182 4.02311 6.0774 4.00768 6.15969C3.99225 6.24197 4.00018 6.32725 4.03044 6.40476C4.06071 6.48227 4.11197 6.54852 4.17774 6.59514C4.2435 6.64176 4.32082 6.66665 4.39992 6.66667Z"
                                                fill="#131615" />
                                            <path
                                                d="M11.6001 9.33334H4.39992C4.32082 9.33335 4.2435 9.35824 4.17774 9.40486C4.11197 9.45148 4.06071 9.51773 4.03044 9.59524C4.00018 9.67275 3.99225 9.75804 4.00768 9.84032C4.02311 9.9226 4.06119 9.99819 4.11712 10.0575L7.71719 13.8757C7.75432 13.9151 7.79841 13.9464 7.84694 13.9677C7.89546 13.989 7.94747 14 8 14C8.05253 14 8.10454 13.989 8.15307 13.9677C8.20159 13.9464 8.24568 13.9151 8.28281 13.8757L11.8829 10.0575C11.9388 9.99819 11.9769 9.9226 11.9923 9.84032C12.0077 9.75804 11.9998 9.67275 11.9696 9.59524C11.9393 9.51773 11.888 9.45148 11.8223 9.40486C11.7565 9.35824 11.6792 9.33335 11.6001 9.33334Z"
                                                fill="#131615" />
                                        </svg>
                                    </td>
                                    <td class="py-3 px-2 text-grey-500 text-xs font-semibold uppercase">Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-grey-50">
                                    <td class="py-5 px-2 text-grey-500 text-sm">99055</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">2022-06-25</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">Web</td>
                                    <td class="py-5 px-2">
                                        <Badge value="Active" type="success" />
                                    </td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">$65,000</td>
                                </tr>
                                <tr class="border-b border-grey-50">
                                    <td class="py-5 px-2 text-grey-500 text-sm">99055</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">2022-06-25</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">Web</td>
                                    <td class="py-5 px-2">
                                        <Badge value="Inactive" />
                                    </td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">$65,000</td>
                                </tr>
                                <tr class="border-b border-grey-50">
                                    <td class="py-5 px-2 text-grey-500 text-sm">99055</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">2022-06-25</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">Web</td>
                                    <td class="py-5 px-2">
                                        <Badge value="Pending" type="warning" />
                                    </td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">$65,000</td>
                                </tr>
                                <tr class="border-b border-grey-50">
                                    <td class="py-5 px-2 text-grey-500 text-sm">99055</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">2022-06-25</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">Web</td>
                                    <td class="py-5 px-2">
                                        <Badge value="Deactive" type="error" />
                                    </td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">$65,000</td>
                                </tr>
                                <tr class="border-b border-grey-50">
                                    <td class="py-5 px-2 text-grey-500 text-sm">99055</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">2022-06-25</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">Web</td>
                                    <td class="py-5 px-2">
                                        <Badge value="Pending" type="warning" />
                                    </td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">$65,000</td>
                                </tr>
                                <tr class="border-b border-grey-50">
                                    <td class="py-5 px-2 text-grey-500 text-sm">99055</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">2022-06-25</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">Web</td>
                                    <td class="py-5 px-2">
                                        <Badge value="Pending" type="warning" />
                                    </td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">$65,000</td>
                                </tr>
                                <tr class="border-b border-grey-50">
                                    <td class="py-5 px-2 text-grey-500 text-sm">99055</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">2022-06-25</td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">Web</td>
                                    <td class="py-5 px-2">
                                        <Badge value="Pending" type="warning" />
                                    </td>
                                    <td class="py-5 px-2 text-grey-500 text-sm">$65,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="text-grey-500 text-lg font-medium mb-4">Card Details</h5>
                    <div class="bg-white rounded-d mb-6 p-5">
                        <div>
                            <label for="name_card" class="text-grey-500 text-sm font-medium mb-2">Name on Card *</label>
                            <input type="text" name="name" id="name" placeholder="Chris Roberts"
                                class="text-grey-500 placeholder:text-grey-500 text-sm placeholder:text-sm py-2 px-3 border border-grey-50 rounded-d block w-full">
                        </div>
                        <div class="mt-6">
                            <label for="card_number" class="text-grey-500 text-sm font-medium mb-2">Card Number *</label>
                            <input type="number" name="name" id="name" placeholder="**** **** **** 1234"
                                class="text-grey-500 placeholder:text-grey-500 text-sm placeholder:text-sm py-2 px-3 border border-grey-50 rounded-d block w-full">
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-6">
                            <div>
                                <label for="expiration" class="text-grey-500 text-sm font-medium mb-2">Expiration (MM/YY)
                                    *</label>
                                <input type="number" name="expiration" id="expiration" placeholder="**** **** **** 1234"
                                    class="text-grey-500 placeholder:text-grey-500 text-sm placeholder:text-sm py-2 px-3 border border-grey-50 rounded-d block w-full">
                            </div>
                            <div>
                                <InputLabel for="category">CVV *</InputLabel>
                                <TextInput id="number" type="cvv" class="mt-2 block w-full" placeholder="***" />
                            </div>
                        </div>
                        <MainButton type="submit" variant="primary" style-type="filled-outlined"
                            class="border border-primary-500 w-full mt-3 flex justify-center">
                            Save
                        </MainButton>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed top-0 left-0 z-30 w-screen h-screen bg-grey-500 bg-opacity-60 flex items-center justify-center"
            v-if="category">
            <div class="w-828 bg-white rounded-md">
                <div class="flex items-center justify-between p-4 border-b border-grey-50">
                    <h5 class="text-lg font-semibold text-blue-grey-500">Manage Categoy</h5>
                    <span class="cursor-pointer" @click.prevent="hideCategoryModal">
                        <XMarkIcon class="w-6 h-6 text-grey-300" />
                    </span>
                </div>
                <div class="p-4">
                    <InputLabel for="category">Category</InputLabel>
                    <TextInput id="text" type="category" class="mt-2 block w-full" placeholder="Type a new category" />
                    <div class="flex gap-4 mt-4">
                        <MainButton type="submit" variant="primary" style-type="filled"
                            class="w-full flex items-center justify-center gap-2" :icon="true">
                            <PlusIcon class="w-5 h-5 text-white" />
                            Add
                        </MainButton>
                        <MainButton type="submit" variant="primary" style-type="filled-outlined"
                            class="w-full flex items-center justify-center gap-2 border border-primary-500" :icon="true">
                            <PlusIcon class="w-5 h-5 text-primary-500" />
                            Add Then Create Another
                        </MainButton>
                    </div>
                    <h2 class="text-blue-grey-500 text-lg font-semibold mt-6 mb-5">All Categories</h2>
                    <div class="py-3 flex items-center justify-between border-b border-grey-50">
                        <h6 class="text-grey-500 text-sm font-medium">Birthday</h6>
                        <a href="">
                            <TrashIcon class="w-5 h-5 text-grey-300" />
                        </a>
                    </div>
                    <div class="py-3 flex items-center justify-between border-b border-grey-50">
                        <h6 class="text-grey-500 text-sm font-medium">Birthday</h6>
                        <a href="">
                            <TrashIcon class="w-5 h-5 text-grey-300" />
                        </a>
                    </div>
                    <div class="py-3 flex items-center justify-between border-b border-grey-50">
                        <h6 class="text-grey-500 text-sm font-medium">Birthday</h6>
                        <a href="">
                            <TrashIcon class="w-5 h-5 text-grey-300" />
                        </a>
                    </div>
                    <div class="py-3 flex items-center justify-between border-b border-grey-50">
                        <h6 class="text-grey-500 text-sm font-medium">Birthday</h6>
                        <a href="">
                            <TrashIcon class="w-5 h-5 text-grey-300" />
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>
