<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
// import { Head } from '@inertiajs/inertia-vue3';
import BreezeButton from "@/Components/Button.vue";
import BreezeCheckbox from "@/Components/Checkbox.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeInputError from "@/Components/InputError.vue";
import BreezeLabel from "@/Components/Label.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

// defineProps({
//     canResetPassword: Boolean,
//     status: String,
// });
let image = ref();

const form = useForm({
    name: "",
    price: "",
    image: null,
    quantity: "",
    location: "",
    rate: "",
    isTrending: "",

    remember: false,
});

const submit = () => {
    form.image = image.value.files[0];

    form.post(route("product.post"), {
        onFinish: () => form.reset(),
    });
};
</script>
<template>
    <Head title="createproducts" />

    <BreezeAuthenticatedLayout>
        <template #header> </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div>
                                <BreezeLabel for="name" value="name" />
                                <BreezeInput
                                    id="name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.name"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />
                                <BreezeInputError
                                    class="mt-2"
                                    :message="form.errors.name"
                                />
                            </div>

                            <div class="mt-4">
                                <BreezeLabel for="price" value="price" />
                                <BreezeInput
                                    id="price"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.price"
                                    required
                                    autocomplete="price"
                                />
                                <BreezeInputError
                                    class="mt-2"
                                    :message="form.errors.price"
                                />
                            </div>
                            <div>
                                <BreezeLabel for="image" value="image" />
                                <Input
                                    id="image"
                                    type="file"
                                    class="mt-1 block w-full"
                                    ref="image"
                                    autofocus
                                    autocomplete="image"
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.image"
                                />
                            </div>
                            <div>
                                <BreezeLabel for="quantity" value="quantity" />
                                <BreezeInput
                                    id="quantity"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.quantity"
                                    required
                                    autofocus
                                    autocomplete="quantity"
                                />
                                <BreezeInputError
                                    class="mt-2"
                                    :message="form.errors.quantity"
                                />
                            </div>
                            <div>
                                <BreezeLabel for="location" value="location" />
                                <BreezeInput
                                    id="location"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.location"
                                    required
                                    autofocus
                                    autocomplete="location"
                                />
                                <BreezeInputError
                                    class="mt-2"
                                    :message="form.errors.location"
                                />
                            </div>
                            <div>
                                <BreezeLabel for="rate" value="rate" />
                                <BreezeInput
                                    id="rate"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.rate"
                                    required
                                    autofocus
                                    autocomplete="rate"
                                />
                                <BreezeInputError
                                    class="mt-2"
                                    :message="form.errors.rate"
                                />
                            </div>
                            <div>
                                <BreezeLabel
                                    for="isTrending"
                                    value="isTrending"
                                />
                                <BreezeInput
                                    id="isTrending"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.isTrending"
                                    required
                                    autofocus
                                    autocomplete="isTrending"
                                />
                                <BreezeInputError
                                    class="mt-2"
                                    :message="form.errors.isTrending"
                                />
                            </div>

                            <div class="block mt-4">
                                <label class="flex items-center">
                                    <BreezeCheckbox
                                        name="remember"
                                        v-model:checked="form.remember"
                                    />
                                    <span class="ml-2 text-sm text-gray-600"
                                        >Remember me</span
                                    >
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <Link
                                    v-if="canResetPassword"
                                    :href="route('password.request')"
                                    class="underline text-sm text-gray-600 hover:text-gray-900"
                                >
                                    Forgot your password?
                                </Link>

                                <BreezeButton
                                    class="ml-4"
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                >
                                    SUBMIT
                                </BreezeButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
