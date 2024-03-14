<script setup>
import { ref } from 'vue';
import {useForm} from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3';
import {Head} from '@inertiajs/vue3'
import HeaderBar from '@/Components/HeaderBar.vue';

const props = defineProps({
    creditor: Object
});

const showEdit = ref(false);

const form = useForm({
    last_name: props.creditor.last_name,
    first_name: props.creditor.first_name,
    gender: props.creditor.gender,
    address: props.creditor.address,
    phone: props.creditor.phone,
    birth_date: props.creditor.birth_date,
    credit_limit: props.creditor.credit_limit
});
</script>

<template>
    <Head title="Show" />
    <HeaderBar/>
    <div class="p-8 text-left">

<h1 class="text-4xl">View Creditors:</h1>
<div class="border border-green-400 p-4 rounded m-4 shadow">
    <table v-if="!showEdit" class="table-bordered table-striped">
            <tr><th>Last Name:</th> <td>{{ creditor.last_name}}</td></tr>
            <tr><th>First Name:</th> <td>{{ creditor.first_name}}</td></tr> 
            <tr><th>Gender: </th><td>{{ creditor.gender }}</td></tr>
            <tr><th>Address: </th><td>{{ creditor.address }}</td></tr>
            <tr><th>Phone:</th><td>{{ creditor.phone }}</td></tr>
            <tr><th>Birth Date: </th><td>{{ creditor.birth_date }}</td></tr>
            <tr><th>Credit Limit: </th><td>₱ {{ creditor.credit_limit }}</td></tr>
    </table>
    <span>Hello</span>
    <div v-if="showEdit">
        <form action="" @submit.prevent="submit">
            <div class="mb-3">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" class="w-full" v-model="form.first_name">
        </div>
        <div class="mb-3">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" class="w-full" v-model="form.last_name">
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <input type="text" id="gender" class="w-full" v-model="form.gender">
        </div>
        <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" id="address" class="w-full" v-model="form.address">
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="text" id="phone" class="w-full" v-model="form.phone">
        </div>
        <div class="mb-3">
            <label for="birth_date">Birth Date</label>
            <input type="text" id="birth_date" class="w-full" v-model="form.birth_date">
        </div>
        <div class="mb-3">
            <label for="credit_limit">Credit Limit</label>
            <input type="text" id="credit_limit" class="w-full" v-model="form.credit_limit">
        </div>
    </form>
    </div>
    <br>
    <Link href="/creditors" class="px-4 py-2 mt-4 bg-green-700 text-white rounded">Back</Link>
</div>
</div>
</template>