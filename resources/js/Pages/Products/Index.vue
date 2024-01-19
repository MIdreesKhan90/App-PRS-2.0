<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ProductsHeader from '@/Layouts/ProductsHeader.vue';

import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Products"/>

    <AuthenticatedLayout>
        <ProductsHeader></ProductsHeader>
        <div class="bg-gray-50 w-full h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="pt-6 text-3xl text-center">Products Page</div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
