<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
                <button
                    class="bg-red-500 text-white font-bold py-2 px-4 rounded"
                >
                    SOS
                </button>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
