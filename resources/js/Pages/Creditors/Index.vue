<script setup>
import HeaderBar from '@/Components/HeaderBar.vue';
import {Head} from '@inertiajs/vue3'

import {Link} from '@inertiajs/vue3'

const props = defineProps({
    creditor: Array
})
</script>

<template>
    <Head title="Creditors" />
    <HeaderBar/>
    <div class="py-5">
        <h2 class="text-4xl text-center">List of Creditors</h2>
    </div>
    <div class="w-screen flex flex-wrap gap-8 justify-center">
        <div v-for="c in creditor" :key="c.id" class="max-w-sm p-5 border-8 rounded-3xl shadow">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25" stroke-width="1.5" stroke="currentColor" class="w-15 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

                <h5 class="text-2xl font-bold">{{c.last_name}}, {{ c.first_name }}</h5>
            </div>
            <p class="mb-3 font-normal text-black">Address: {{ c.address }}</p>
            <p class="mb-3 font-normal text-black italic">Credit Limit: {{ c.credit_limit }}</p>
            <Link href="/Creditors/Show" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                View
            </Link>
        </div>
    </div>
</template>
