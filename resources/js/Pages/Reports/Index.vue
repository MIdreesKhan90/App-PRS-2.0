<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Reports"/>

    <AuthenticatedLayout>
        <div class="bg-gray-50 w-full h-screen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="p-6 text-3xl text-center">Reports Page</div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
