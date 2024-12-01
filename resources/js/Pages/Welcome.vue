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
        <header
            class="sticky top-0 z-50 grid grid-cols-2 items-center gap-4 p-6 bg-red-500 rounded-3xl shadow-md mx-3 my-2"
        >
            <!-- Left Side (Logo + Navigation) -->
            <div class="flex items-center space-x-4">
                <!-- Logo -->
                <h1 class="text-2xl font-bold text-white">DonarHub</h1>

                <!-- Left Side Links -->
                <div class="flex space-x-4">
                    <!-- Home Dropdown -->
                    <div class="relative group">
                        <button
                            class="flex items-center rounded-md px-4 py-2 text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                        >
                            Home
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="ml-1 h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7"
                                />
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <div
                            class="absolute hidden group-hover:block bg-white text-gray-800 rounded-lg shadow-md mt-2 min-w-[200px] z-10"
                        >
                            <Link
                                class="block px-4 py-2 text-sm transition duration-300 hover:bg-gray-100"
                            >
                                Home Page
                            </Link>
                            <Link
                                class="block px-4 py-2 text-sm transition duration-300 hover:bg-gray-100"
                            >
                                About Donor's Squad
                            </Link>
                        </div>
                    </div>

                    <Link
                        class="rounded-md px-4 py-2 text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                    >
                        Blood Bank Directory
                    </Link>
                    <Link
                        class="rounded-md px-4 py-2 text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                    >
                        About Blood Donation
                    </Link>
                    <Link
                        class="rounded-md px-4 py-2 text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                    >
                        Contact Us
                    </Link>
                </div>
            </div>

            <!-- Right Side (Login + Register) -->
            <nav v-if="canLogin" class="flex justify-end space-x-4">
                <Link
                    :href="route('login')"
                    class="rounded-md px-4 py-2 text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                >
                    Log in
                </Link>
                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="rounded-md px-4 py-2 text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                >
                    Register
                </Link>
            </nav>
        </header>

        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-black"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
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

                        <div
                            class="p-6 lg:p-8 bg-red-200 text-center text-white rounded-bl-3xl rounded-tr-3xl shadow-lg py-12"
                        >
                            <h2 class="text-6xl font-bold my-5">
                                Save Lives, Donate Blood
                            </h2>
                            <p class="text-3xl mt-2 my-5">
                                Join our network to make blood donation quick
                                and efficient.
                            </p>
                            <Link v-if="canRegister" :href="route('register')">
                                <button
                                    onclick="scrollToRegister()"
                                    class="bg-red-700 text-white px-6 py-2 rounded-md transition duration-300 hover:bg-red-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-white mt-4 text-2xl my-5"
                                >
                                    Register as Donor
                                </button>
                            </Link>
                        </div>
                        <div
                            class="p-6 lg:p-8 bg-gray-100 text-center text-white rounded-lg shadow-lg"
                        >
                            <h1
                                class="text-center text-5xl font-semibold text-gray-900 mb-6"
                            >
                                About Us
                            </h1>

                            <p
                                class="mt-4 text-center text-2xl text-gray-700 leading-relaxed"
                            >
                                DonarHub connects blood donors with hospitals in
                                real-time for quick, life-saving donations.
                                Register with your blood group and location, and
                                get matched instantly during emergencies.
                            </p>

                            <p
                                class="mt-4 text-center text-2xl text-gray-700 leading-relaxed"
                            >
                                With features like live blood availability, SOS
                                alerts, and rewards, DonarHub makes blood
                                donation easier, faster, and more rewarding.
                                Join us and help save lives!
                            </p>
                        </div>
                        <div
                            class="p-6 lg:p-8 bg-gray-100 text-center text-white rounded-lg shadow-lg"
                        >
                            <h1
                                class="text-center text-5xl font-semibold text-gray-900 mb-6"
                            >
                                Features
                            </h1>

                            <div class="space-y-6">
                                <div
                                    class="bg-red-200 p-4 rounded-lg shadow-md"
                                >
                                    <h2
                                        class="text-3xl font-bold text-gray-900 mb-2"
                                    >
                                        Real-Time Blood Availability Tracker
                                    </h2>
                                    <p class="text-xl text-gray-700">
                                        Instantly check the availability of
                                        blood at nearby hospitals and blood
                                        banks, ensuring quick access in
                                        emergencies.
                                    </p>
                                </div>

                                <div
                                    class="bg-red-200 p-4 rounded-lg shadow-md"
                                >
                                    <h2
                                        class="text-3xl font-bold text-gray-900 mb-2"
                                    >
                                        Emergency SOS Alerts
                                    </h2>
                                    <p class="text-xl text-gray-700">
                                        Donors receive immediate notifications
                                        based on location and blood group,
                                        allowing them to respond quickly during
                                        urgent situations.
                                    </p>
                                </div>

                                <div
                                    class="bg-red-200 p-4 rounded-lg shadow-md"
                                >
                                    <h2
                                        class="text-3xl font-bold text-gray-900 mb-2"
                                    >
                                        Location-Based Donor Matching
                                    </h2>
                                    <p class="text-xl text-gray-700">
                                        Effortlessly connect donors and
                                        recipients based on their proximity and
                                        compatible blood types for faster
                                        assistance.
                                    </p>
                                </div>

                                <div
                                    class="bg-red-200 p-4 rounded-lg shadow-md"
                                >
                                    <h2
                                        class="text-3xl font-bold text-gray-900 mb-2"
                                    >
                                        Reward System for Donors
                                    </h2>
                                    <p class="text-xl text-gray-700">
                                        Earn points and rewards for each
                                        donation, with gamified features like
                                        leaderboards to encourage regular blood
                                        donations.
                                    </p>
                                </div>

                                <div
                                    class="bg-red-200 p-4 rounded-lg shadow-md"
                                >
                                    <h2
                                        class="text-3xl font-bold text-gray-900 mb-2"
                                    >
                                        Seamless Integration with Hospitals and
                                        NGOs
                                    </h2>
                                    <p class="text-xl text-gray-700">
                                        A network that connects donors with
                                        hospitals and NGOs to streamline blood
                                        donation processes and improve access to
                                        life-saving blood.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <section
                            class="bg-gray-100 py-16 shadow-lg rounded-lg p-6 lg:p-8"
                        >
                            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                                <div class="text-center mb-12">
                                    <h2
                                        class="text-3xl font-bold text-gray-800 sm:text-4xl"
                                    >
                                        Contact Us
                                    </h2>
                                    <p class="mt-4 text-lg text-gray-600">
                                        Have questions or need assistance? We’d
                                        love to hear from you.
                                    </p>
                                </div>

                                <div
                                    class="grid grid-cols-1 lg:grid-cols-2 gap-8"
                                >
                                    <!-- Contact Form -->
                                    <form
                                        class="bg-white rounded-lg shadow-md p-8 space-y-6"
                                    >
                                        <div>
                                            <label
                                                for="name"
                                                class="block text-sm font-medium text-gray-700"
                                                >Your Name</label
                                            >
                                            <input
                                                type="text"
                                                id="name"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm"
                                                placeholder="Enter your name"
                                                required
                                            />
                                        </div>

                                        <div>
                                            <label
                                                for="email"
                                                class="block text-sm font-medium text-gray-700"
                                                >Your Email</label
                                            >
                                            <input
                                                type="email"
                                                id="email"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm"
                                                placeholder="Enter your email"
                                                required
                                            />
                                        </div>

                                        <div>
                                            <label
                                                for="message"
                                                class="block text-sm font-medium text-gray-700"
                                                >Your Message</label
                                            >
                                            <textarea
                                                id="message"
                                                rows="4"
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm"
                                                placeholder="Write your message here..."
                                                required
                                            ></textarea>
                                        </div>

                                        <div>
                                            <button
                                                type="submit"
                                                class="w-full px-6 py-3 text-white bg-red-500 rounded-md shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition duration-300"
                                            >
                                                Send Message
                                            </button>
                                        </div>
                                    </form>

                                    <!-- Contact Info -->
                                    <div
                                        class="flex flex-col justify-center space-y-6 text-gray-700"
                                    >
                                        <div>
                                            <h3 class="text-lg font-semibold">
                                                Our Office
                                            </h3>
                                            <p class="mt-2 text-gray-600">
                                                123 Main Street, Cityville,
                                                State, 12345
                                            </p>
                                        </div>

                                        <div>
                                            <h3 class="text-lg font-semibold">
                                                Call Us
                                            </h3>
                                            <p class="mt-2 text-gray-600">
                                                +1 (123) 456-7890
                                            </p>
                                        </div>

                                        <div>
                                            <h3 class="text-lg font-semibold">
                                                Email Us
                                            </h3>
                                            <p class="mt-2 text-gray-600">
                                                support@yourdomain.com
                                            </p>
                                        </div>

                                        <div class="flex space-x-4">
                                            <a
                                                href="#"
                                                class="text-gray-600 hover:text-red-500 transition duration-300"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor"
                                                    class="h-6 w-6"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        d="M22.675 0H1.325C.595 0 0 .595 0 1.325v21.351C0 23.404.596 24 1.325 24H12v-9.293H9.293v-3.707H12V8.414c0-2.578 1.414-4.1 4.1-4.1 1.197 0 2.415.176 2.415.176v2.793H16.99c-1.413 0-1.71.902-1.71 1.792v2.117h3.414l-.451 3.707h-2.963V24h5.293c.73 0 1.326-.596 1.326-1.325V1.325C24 .595 23.404 0 22.675 0z"
                                                    />
                                                </svg>
                                            </a>
                                            <a
                                                href="#"
                                                class="text-gray-600 hover:text-red-500 transition duration-300"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor"
                                                    class="h-6 w-6"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        d="M24 4.559c-.885.392-1.833.656-2.828.775 1.017-.611 1.798-1.575 2.165-2.724-.951.565-2.005.974-3.127 1.194-.896-.953-2.173-1.547-3.594-1.547-2.717 0-4.924 2.207-4.924 4.925 0 .385.044.76.128 1.122C7.728 8.087 4.1 6.13 1.67 3.149c-.423.726-.666 1.57-.666 2.475 0 1.707.869 3.214 2.188 4.097-.807-.026-1.566-.247-2.228-.616v.062c0 2.386 1.696 4.375 3.946 4.827-.413.113-.849.173-1.296.173-.317 0-.626-.031-.928-.088.626 1.956 2.445 3.379 4.6 3.418-1.685 1.32-3.809 2.107-6.115 2.107-.398 0-.788-.023-1.175-.069 2.179 1.397 4.768 2.211 7.548 2.211 9.058 0 14.01-7.505 14.01-14.01 0-.214-.004-.428-.014-.641.961-.695 1.795-1.562 2.453-2.549z"
                                                    />
                                                </svg>
                                            </a>
                                            <a
                                                href="#"
                                                class="text-gray-600 hover:text-red-500 transition duration-300"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor"
                                                    class="h-6 w-6"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        d="M12 0C5.373 0 0 5.372 0 12s5.373 12 12 12 12-5.372 12-12S18.627 0 12 0zm0 1.8c5.626 0 10.2 4.574 10.2 10.2 0 5.626-4.574 10.2-10.2 10.2-5.626 0-10.2-4.574-10.2-10.2 0-5.626 4.574-10.2 10.2-10.2zM12 4.938a7.066 7.066 0 100 14.124 7.066 7.066 0 000-14.124zm0 1.8a5.266 5.266 0 110 10.532A5.266 5.266 0 0112 6.738zm0 1.7a3.566 3.566 0 100 7.132 3.566 3.566 0 000-7.132z"
                                                    />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </main>
            </div>
        </div>
        <footer
            class="w-full mt-8 py-6 text-center text-sm text-white bg-black"
        >
            ©️ 2024 BloodConnect. All rights reserved.
        </footer>
    </div>
</template>
