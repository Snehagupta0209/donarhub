<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    terms: false,
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <Head title="Register" />

    <AuthenticationCard class="bg-red-500 bg-opacity-50 backdrop-blur-sm rounded-lg p-6">
        <template #logo class="w-full">
            <img src="donarhub\resources\js\Pages\Auth\logo.jpg" AuthenticationCardLogo/>
        </template>

        <form @submit.prevent="submit">
            <h2 class="text-2xl font-semibold text-gray-800 mt-4">Personal Details</h2>

            <div class="mt-4">
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="name"
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">

                <div>
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input
                        type="date"
                        id="dob"
                        name="dob"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                        required
                    />
                </div>

                <div>
                    <InputLabel for="age" value="Age" />
                    <TextInput
                        id="name"
                        v-model="form.age"
                        type="number"
                        class="mt-1 block w-full"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
            </div>

            <div class="mt-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select
                    id="gender"
                    name="gender"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    required
                >
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>


            <div class="mt-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    required
                    placeholder="Enter your phone number"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    maxlength="12"
                />
                <p class="text-sm text-gray-500 mt-2">Format: 123-456-7890</p>
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel
                    for="password_confirmation"
                    value="Confirm Password"
                />
                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
                <InputError
                    class="mt-2"
                    :message="form.errors.password_confirmation"
                />
            </div>

            
            <div class="mt-6">
                <h2 class="text-2xl font-semibold text-gray-800 mt-4">Address</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                    
                    <!-- State Dropdown -->
                    <div>
                        <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                        <select id="state" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                            <option value="">Select your state</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="West Bengal">West Bengal</option>

                            <!-- Union Territories -->
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Ladakh">Ladakh</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>

                        </select>
                    </div>
                    
                    <!-- City Input -->
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input
                            type="text"
                            id="city"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                            placeholder="Enter your city"
                        />
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">

                    <!-- Area Input -->
                    <div>
                        <label for="area" class="block text-sm font-medium text-gray-700">Area</label>
                        <input
                            type="text"
                            id="area"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                            placeholder="Enter your area"
                        />
                    </div>

                    <!-- Pin Code Input -->
                    <div>
                        <label for="pinCode" class="block text-sm font-medium text-gray-700">Pin Code</label>
                        <input
                            type="text"
                            id="pinCode"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                            placeholder="Enter your pin code"
                            pattern="\d{6}"
                            maxlength="6"
                        />
                    </div>
                </div>
            </div>

            <h2 class="text-2xl font-semibold text-gray-800 mt-4">Medical Details</h2>

            <div class="mt-4">
                <label for="bloodgroup" class="block text-sm font-medium text-gray-700">
                    Blood Group
                </label>
                <select 
                id="bloodgroup" 
                v-model="form.bloodgroup" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                required
                >
                <option value="" disabled selected>Select your blood group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
                <p v-if="form.errors.bloodgroup" class="text-sm text-red-600 mt-2">
                {{ form.errors.bloodgroup }}
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                
                <div>
                    <label for="weight" class="block text-sm font-medium text-gray-700">
                        Weight (kg)
                    </label>
                    <input
                        id="weight"
                        v-model="form.weight"
                        type="number"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                        required
                        min="1"
                        step="0.1"
                        placeholder="Enter your weight in kg"
                    />
                    <p v-if="form.errors.weight" class="text-sm text-red-600 mt-2">
                        {{ form.errors.weight }}
                    </p>
                </div>

                <div>
                    <label for="height" class="block text-sm font-medium text-gray-700">
                        Height (cm)
                    </label>
                    <input
                        id="height"
                        v-model="form.height"
                        type="number"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                        required
                        min="1"
                        step="0.1"
                        placeholder="Enter your height in cm"
                    />
                    <p v-if="form.errors.height" class="text-sm text-red-600 mt-2">
                        {{ form.errors.height }}
                    </p>
                </div>
            </div>

            <div class="mt-4">
                <label for="diabetic" class="block text-sm font-medium text-gray-700">
                    Are you diabetic?
                </label>
                <select
                    id="diabetic"
                    v-model="form.diabetic"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                    required
                >
                <option value="" disabled>Select an option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
                </select>
                <p v-if="form.errors.diabetic" class="text-sm text-red-600 mt-2">
                    {{ form.errors.diabetic }}
                </p>
            </div>

            <div class="mt-4">
            <div>
                <label for="chronic-illness" class="block text-sm font-medium text-gray-700">Do you have any chronic illnesses or conditions (e.g., diabetes, heart disease)?</label>
                <select id="chronic-illness" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="recent-surgeries" class="block text-sm font-medium text-gray-700">Have you had any recent surgeries?</label>
                <select id="recent-surgeries" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="medications" class="block text-sm font-medium text-gray-700">Are you taking any medications? If yes, please specify.</label>
                <select id="medications" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="hiv-hepatitis" class="block text-sm font-medium text-gray-700">Have you ever been diagnosed with HIV/AIDS or Hepatitis?</label>
                <select id="hiv-hepatitis" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="fainting-dizziness" class="block text-sm font-medium text-gray-700">Do you have a history of fainting or dizziness after blood donation?</label>
                <select id="fainting-dizziness" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="blood-pressure" class="block text-sm font-medium text-gray-700">Do you have a history of high or low blood pressure?</label>
                <select id="blood-pressure" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>


            <div class="mt-4">
                <label for="medicalHistory" class="block text-sm font-medium text-gray-700">
                    Medical History
                </label>
                <textarea
                    id="medicalHistory"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                    rows="3"
                    placeholder="Enter your medical history"
                ></textarea>
            </div>

            <h2 class="text-2xl font-semibold text-gray-800 mt-4">Additionl Information</h2>

                <div class="mt-4">

                    <!-- Do you smoke or consume alcohol? -->
                    <div class="mt-4">
                        <label for="smoke-alcohol" class="block text-sm font-medium text-gray-700">
                            Do you smoke or consume alcohol? (Some centers may inquire to assess general health)
                        </label>
                        <select id="smoke-alcohol" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                            <option value="">Select an option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            <option value="occasionally">Occasionally</option>
                        </select>
                    </div>

                    <!-- Do you have any allergies? -->
                    <div class="mt-4">
                        <label for="allergies" class="block text-sm font-medium text-gray-700">
                            Do you have any allergies? (Relevant to certain donation processes)
                        </label>
                        <select id="allergies" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                            <option value="">Select an option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <!-- Do you have a history of substance abuse? -->
                    <div class="mt-4">
                        <label for="substance-abuse" class="block text-sm font-medium text-gray-700">
                            Do you have a history of substance abuse?
                        </label>
                        <select id="substance-abuse" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                            <option value="">Select an option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <!-- Do you have any existing health conditions that might affect your donation? -->
                    <div class="mt-4">
                        <label for="health-conditions" class="block text-sm font-medium text-gray-700">
                            Do you have any existing health conditions that might affect your donation?
                        </label>
                        <select id="health-conditions" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                            <option value="">Select an option</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                </div>
            <div class="mt-4">

            <h2 class="text-2xl font-semibold text-gray-800 mt-4">Consent</h2>

            <!-- Consent to Donate -->
            <div class="mt-4">
                <label for="consent-to-donate" class="block text-sm font-medium text-gray-700">
                    <input type="checkbox" id="consent-to-donate" class="mr-2 leading-tight">
                    I consent to donate blood and understand the risks involved.
                </label>
                <p class="text-xs text-gray-500 mt-1">
                    By checking this box, you confirm that you are volunteering to donate blood and acknowledge that you understand the risks involved in the process.
                </p>
            </div>

            <!-- Privacy Policy Acknowledgment -->
            <div class="mt-4">
                <label for="privacy-policy" class="block text-sm font-medium text-gray-700">
                    <input type="checkbox" id="privacy-policy" class="mr-2 leading-tight">
                    I acknowledge the Privacy Policy and consent to the collection and storage of my personal information.
                </label>
                <p class="text-xs text-gray-500 mt-1">
                    By checking this box, you confirm that you have read and agreed to the privacy policy regarding the collection and storage of your personal information.
                </p>
            </div>

            <!-- Medical Consent -->
            <div class="mt-4">
                <label for="medical-consent" class="block text-sm font-medium text-gray-700">
                    <input type="checkbox" id="medical-consent" class="mr-2 leading-tight">
                    I confirm that I understand the health requirements and have provided accurate medical history.
                </label>
                <p class="text-xs text-gray-500 mt-1">
                    By checking this box, you confirm that you understand the health requirements for blood donation and that the medical history you have provided is accurate.
                </p>
            </div>

        </div>


            <div
                v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature"
                class="mt-4"
            >
                <InputLabel for="terms">
                    <div class="flex items-center">
                        <Checkbox
                            id="terms"
                            v-model:checked="form.terms"
                            name="terms"
                            required
                        />

                        <div class="ms-2">
                            I agree to the
                            <a
                                target="_blank"
                                :href="route('terms.show')"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >Terms of Service</a
                            >
                            and
                            <a
                                target="_blank"
                                :href="route('policy.show')"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >Privacy Policy</a
                            >
                        </div>
                    </div>
                    <InputError class="mt-2" :message="form.errors.terms" />
                </InputLabel>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Register
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
