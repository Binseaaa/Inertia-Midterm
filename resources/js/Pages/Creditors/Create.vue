<script setup>
import HeaderBar from '@/Components/HeaderBar.vue';
import {Head} from '@inertiajs/vue3'
</script>

<template>
    <Head title="Create Creditor"></Head>
    <HeaderBar/>

    <div class="w-[1020px] mx-auto py-8">
        <h2 class="text-4xl">Create Creditors</h2>
        <form action="">
            <div class="mb-3">
                <label for="last_name">Last Name</label>
                <input type="text" class="block w-full">
            </div>
        </form>
    </div>
</template>
