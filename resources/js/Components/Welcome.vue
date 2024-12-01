<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-medium text-gray-900">
                Welcome to Donar hub!
            </h1>
            <div class="grid">
                <table class="table-fixed mt-6 text-gray-500 leading-relaxed">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Blood Group</th>
                            <th>View Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                The Sliding Mr. Bones (Next Stop, Pottersville)
                            </td>
                            <td>Malcolm Lockyer</td>
                            <td>1961</td>
                            <td>
                                <a href="#" class="text-blue-500 mr-2">View</a>
                                <a href="#" class="text-red-500 ml-2"
                                    >Request to donate</a
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
