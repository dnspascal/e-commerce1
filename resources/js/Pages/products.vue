<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
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
                        You're logged in!
                    </div>
                    <!-- <div class="">
                        <div
                            class="bg-white p-4 border-gray-200"
                            v-for="product in Products"
                        >
                            {{ product.name }} okay
                        </div>
                    </div> -->

                    <div
                        class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div
                            class="p-6 bg-white border-b border-gray-200"
                            v-for="product in Products"
                        >
                            okay

                            {{ product.name }}
                            {{ product.price }}
                            {{ product.quantity }}
                            {{ product.image }}
                            {{ product.location }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
