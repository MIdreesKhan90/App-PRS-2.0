<script setup>
import {computed, ref} from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link, usePage} from '@inertiajs/vue3';
import DashboardIcon from "@/Icons/DashboardIcon.vue";
import OrdersIcon from "@/Icons/OrdersIcon.vue";
import ClientsIcon from "@/Icons/ClientsIcon.vue";
import ProductsIcon from "@/Icons/ProductsIcon.vue";
import WebsiteIcon from "@/Icons/WebsiteIcon.vue";
import ReportsIcon from "@/Icons/ReportsIcon.vue";
import AccountProfileIcon from "@/Icons/AccountProfileIcon.vue";
import LogoutIcon from "@/Icons/LogoutIcon.vue";
import SystemSettingsIcon from "@/Icons/SystemSettingsIcon.vue";
import BellIcon from "@/Icons/BellIcon.vue";
import {Disclosure, DisclosureButton, DisclosurePanel} from '@headlessui/vue'
import {ChevronRightIcon} from '@heroicons/vue/20/solid'

const showingNavigationDropdown = ref(false);

const user = usePage().props.auth.user;

const userInitials = computed(() => {
    const name = user.first_name + ' ' + user.last_name
    return name.split(' ')
        .map((n) => n[0])
        .join('')
        .toUpperCase();
});


</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-dark-800 border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="container mx-auto px-4 sm:px-0">
                    <div class="flex justify-between h-16 items-center">
                        <div class="flex items-center">
                            <!-- Hamburger -->
                            <div class="me-2 flex items-center lg:hidden">
                                <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-custom-400 hover:text-custom-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-custom-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6h16M4 12h16M4 18h16"/>
                                        <path :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="flex">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <Link :href="route('dashboard')">
                                        <ApplicationLogo class="block h-9 w-auto fill-current text-custom-800"/>
                                    </Link>
                                </div>

                                <!-- Navigation Links -->
                                <div class="hidden space-x-4 lg:-my-px lg:ms-10 lg:flex lg:items-center">
                                    <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                        <DashboardIcon class="mr-2"/>
                                        Dashboard
                                    </NavLink>
                                    <NavLink :href="route('orders')" :active="route().current('orders')">
                                        <OrdersIcon class="mr-2"/>
                                        Orders
                                    </NavLink>
                                    <NavLink :href="route('clients')" :active="route().current('clients')">
                                        <ClientsIcon class="mr-2"/>
                                        Clients
                                    </NavLink>
                                    <NavLink :href="route('products')" :active="route().current('products')">
                                        <ProductsIcon class="mr-2"/>
                                        Products
                                    </NavLink>
                                    <NavLink :href="route('websites')" :active="route().current('websites')">
                                        <WebsiteIcon class="mr-2"/>
                                        Website
                                    </NavLink>
                                    <NavLink :href="route('reports')" :active="route().current('reports')">
                                        <ReportsIcon class="mr-2"/>
                                        Reports
                                    </NavLink>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center lg:ms-6">
                            <a href=""
                               class="relative after:absolute after:top-1 after:right-1 after:w-2 after:h-2 after:bg-gray-100 after:rounded-full">
                                <BellIcon/>
                            </a>
                            <!-- Settings Dropdown -->
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-custom-500 bg-white/5 hover:text-white focus:outline-none transition ease-in-out duration-150">
                                                {{ userInitials }}
                                                <svg
                                                    class="ms-2 -me-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
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
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                     class="lg:hidden bg-dark-600 fixed top-0 left-0 w-64 h-full border-gray-100 px-2 py-4 z-10">
                    <div class="flex items-center justify-between pb-3">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <Link :href="route('dashboard')">
                                <ApplicationLogo class="block h-9 w-auto fill-current text-custom-800"/>
                            </Link>
                        </div>
                        <div class="me-2 flex items-center lg:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-custom-400 hover:text-custom-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-custom-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="pt-2 pb-3 space-y-1">
                        <div>
                            <div>
                                <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')"
                                                   class="bg-dark-500 border-none rounded-md px-2 py-3 flex items-center text-white text-sm font-medium mb-2">
                                    <DashboardIcon class="mr-2"/>
                                    Dashboard
                                </ResponsiveNavLink>
                                <Disclosure v-slot="{ open }">
                                    <DisclosureButton class="flex w-full justify-between py-3 px-2">
                                        <div class="flex items-center text-white text-sm font-medium">
                                            <OrdersIcon class="mr-2"/>
                                            Orders
                                        </div>
                                        <ChevronRightIcon :class="open ? 'rotate-90 transform' : ''"
                                                          class="h-5 w-5 text-white"/>
                                    </DisclosureButton>
                                    <DisclosurePanel
                                        class="relative after:absolute after:top-1 after:left-3 after:border-l after:border-white after:h-[196px]">
                                        <ResponsiveNavLink :href="route('orders')"
                                                           :active="route().current('orders')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Pending
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Quotes
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Completed
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            All
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Event Calendar
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Route Planner
                                        </ResponsiveNavLink>
                                    </DisclosurePanel>
                                </Disclosure>
                                <ResponsiveNavLink :href="route('clients')" :active="route().current('clients')"
                                                   class="bg-dark-500 border-none rounded-md px-2 py-3 flex items-center text-white text-sm font-medium mb-2">
                                    <ClientsIcon class="mr-2 inline-block"/>
                                    Clients
                                </ResponsiveNavLink>
                                <Disclosure v-slot="{ open }">
                                    <DisclosureButton class="flex w-full justify-between py-3 px-2">
                                        <div class="flex items-center text-white text-sm font-medium">
                                            <ProductsIcon class="mr-2"/>
                                            Products
                                        </div>
                                        <ChevronRightIcon :class="open ? 'rotate-90 transform' : ''"
                                                          class="h-5 w-5 text-white"/>
                                    </DisclosureButton>
                                    <DisclosurePanel
                                        class="relative after:absolute after:top-1 after:left-3 after:border-l after:border-white after:h-[124px]">
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Products
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Categories
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Packages
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Product Options
                                        </ResponsiveNavLink>
                                    </DisclosurePanel>
                                </Disclosure>
                                <Disclosure v-slot="{ open }">
                                    <DisclosureButton class="flex w-full justify-between py-3 px-2">
                                        <div class="flex items-center text-white text-sm font-medium">
                                            <WebsiteIcon class="mr-2"/>
                                            Website
                                        </div>
                                        <ChevronRightIcon :class="open ? 'rotate-90 transform' : ''"
                                                          class="h-5 w-5 text-white"/>
                                    </DisclosureButton>
                                    <DisclosurePanel
                                        class="relative after:absolute after:top-1 after:left-3 after:border-l after:border-white after:h-[196px]">
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Pages
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Articles
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Testimonials
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            FAQ
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Assets
                                        </ResponsiveNavLink>
                                        <ResponsiveNavLink :href="route('dashboard')"
                                                           :active="route().current('dashboard')"
                                                           class="ml-9 text-white text-sm font-medium mb-0 relative after:absolute after:top-5 after:-left-6 after:w-4 after:border-t after:border-white">
                                            Photo Gallery
                                        </ResponsiveNavLink>
                                    </DisclosurePanel>
                                </Disclosure>
                                <ResponsiveNavLink :href="route('reports')" :active="route().current('reports')"
                                                   class="bg-dark-500 border-none rounded-md px-2 py-3 flex items-center text-white text-sm font-medium mb-2">
                                    <ReportsIcon class="mr-2"/>
                                    Reports
                                </ResponsiveNavLink>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"/>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot/>
            </main>
        </div>
    </div>
</template>
