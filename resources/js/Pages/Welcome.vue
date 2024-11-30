<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 bg-white text-black/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-black"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header
                    class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-2"
                >
                    <div class="flex lg:justify-start lg:col-start-1">
                        <h1>DonarHub</h1>
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] text-black hover:text-black/80 focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] text-black hover:text-black/80 focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] text-black hover:text-black/80 focus-visible:ring-white"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-12">
                    <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">
                        <div class="relative bg-white border border-gray-800">
                            <img
                                src="/images/bg2.avif"
                                alt="Hero Image"
                                class="w-full h-auto object-cover"
                                onError="handleImageError"
                            />
                        </div>

                        <div class="p-6 lg:p-8 bg-#b91626 text-center center">
                            <h2>Save Lives, Donate Blood</h2>
                            <p>
                                Join our network to make blood donation quick
                                and efficient.
                            </p>
                            <button onclick="scrollToRegister()">
                                Register as Donor
                            </button>
                        </div>
                        <div
                            class="p-6 lg:p-8 bg-white border border-gray-800 center"
                        >
                            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                                About Us
                            </h1>

                            <p class="mt-6 text-gray-500 leading-relaxed">
                                We connect blood donors with recipients and
                                hospitals for timely help in emergencies.
                            </p>
                        </div>
                    </div>
                </main>

                <footer
                    class="py-16 text-center text-sm text-black text-black/70"
                ></footer>
            </div>
        </div>
    </div>
</template>
