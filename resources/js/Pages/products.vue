<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
    products: {},
});
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Products
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table-fixed ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Location</th>
                                    <th>Rate</th>
                                    <th>Trend</th>
                                    <th>Picture</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="product in products">
                                    <td>
                                        {{ product.name }}
                                    </td>
                                    <td>
                                        {{ product.price }}
                                    </td>
                                    <td class="text-center">
                                        {{ product.quantity }}
                                    </td>
                                    <td>
                                        {{ product.location }}
                                    </td>
                                    <td class="text-center">
                                        {{ product.rate }}
                                    </td>
                                    <td class="text-center">
                                        {{ product.isTrending }}
                                    </td>
                                    <td class="text-center">
                                        <img
                                            :src="
                                                'http://localhost:8000/storage/' +
                                                product.image
                                            "
                                            width="100"
                                        />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
