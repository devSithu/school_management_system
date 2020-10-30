<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div>
                <div class="form-group mt-2">
                    <x-jet-label for="gender" value="Gender" />
                    <select class="form-control" id="gender" class="block mt-1 w-full"  name="gender" :value="old('gender')" required autofocus autocomplete="gender" >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <div>
                <div class="form-group mt-2">
                    <x-jet-label for="role" value="Role" />
                    <select class="form-control" id="role" class="block mt-1 w-full" name="role" :value="old('role')" required autofocus autocomplete="role" >
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    </select>
                </div>
            </div>

            <div>
                <x-jet-label for="date_of_birth" value="Date Of Birth" />
                <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required autofocus autocomplete="date_of_birth" />
            </div>

            <div>
                <x-jet-label for="phone_number_one" value="Primary Phone Number" />
                <x-jet-input id="phone_number_one" class="block mt-1 w-full" type="number" name="phone_number_one" :value="old('phone_number_one')" required autofocus autocomplete="phone_number_one" />
            </div>

            <div>
                <x-jet-label for="phone_number_two" value="Secondary Phone Number" />
                <x-jet-input id="phone_number_two" class="block mt-1 w-full" type="number" name="phone_number_two" :value="old('phone_number_two')" required autofocus autocomplete="phone_number_two" />
            </div>

            <div>
                <x-jet-label for="region" value="Region" />
                <x-jet-input id="region" class="block mt-1 w-full" type="text" name="region" :value="old('region')" required autofocus autocomplete="region" />
            </div>

            <div>
                <x-jet-label for="town" value="Town" />
                <x-jet-input id="town" class="block mt-1 w-full" type="text" name="town" :value="old('town')" required autofocus autocomplete="town" />
            </div>

            <div>
                <x-jet-label for="address" value="Address" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
