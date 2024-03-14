<script setup>
import HeaderBar from '@/Components/HeaderBar.vue';
import {Head} from '@inertiajs/vue3'
</script>

<template>
    <Head title="Creditors" />
    <HeaderBar/>
    <div class="w-[1020px] mx-auto py-8">
        <div class="flex">
            <h2 class="text-4xl">List of Creditors</h2>
            <a href="" class="p-x4 py-2 bg-blue-700- text-white rounded">Create Creditor</a>
        </div>
    </div>
</template>
