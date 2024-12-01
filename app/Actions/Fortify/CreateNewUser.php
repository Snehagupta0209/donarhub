<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            "terms" => 1,
            'dob' => $input['dob'],
            'gender' => $input['gender'],
            'phone' => $input['phone'],
            'bloodgroup' => $input['bloodgroup'],
            'weight' => $input['weight'],
            'height' => $input['height'],
            'diabetic' => $input['diabetic']== 'yes'? 1: 0,
            'illness' => $input['illness']== 'yes'? 1: 0,
            'surgeries' => $input['surgeries']== 'yes'? 1: 0,
            'medications' => $input['medications']== 'yes'? 1: 0,
            'hepatitis' => $input['hepatitis']== 'yes'? 1: 0,
            'dizziness' => $input['dizziness']== 'yes'? 1: 0,
            'state' => $input['state'],
            'city' => $input['city'],
            'area' => $input['area'],
            'pincode' => $input['pincode'],
            'medicalHistory' => $input['medicalHistory'],
            'smokeAlcohol' => $input['smokeAlcohol']== 'yes'? 1: 0,
            'allergies' => $input['allergies'],
            'substanceAbuse' => $input['substanceAbuse'],
            'healthConditions' => $input['healthConditions'],
            'consentToDonate' => $input['consentToDonate'],
            'privacyPolicy' => $input['privacyPolicy'],
            'medicalConsent' => $input['medicalConsent'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
