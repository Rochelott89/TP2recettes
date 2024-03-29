<x-guest-layout>

    <x-jet-authentication-card>

        <x-slot name="logo">

            <x-jet-authentication-card-logo />

        </x-slot>



        <x-jet-validation-errors class="mb-4" />



        @if (session('status'))

            <div class="mb-4 font-medium text-sm text-green-600">

                {{ session('status') }}

            </div>

        @endif



        <form method="POST" action="{{ route('login') }}">

            @csrf



            <div>

                <x-jet-label value="Email" />

                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

            </div>



            <div class="mt-4">

                <x-jet-label value="Password" />

                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

            </div>



            <div class="block mt-4">

                <label class="flex items-center">

                    <input type="checkbox" class="form-checkbox" name="remember">

                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>

                </label>

            </div>



            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">

                        {{ __('Forgot your password?') }}

                    </a>

                @endif



                <x-jet-button class="ml-4">

                    {{ __('Login') }}

                </x-jet-button>

            </div>

            <div class="flex items-center justify-end mt-4">

                <a href="{{ url('auth/google') }}"

                    style="background: #f80b0b; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with Google

                </a>

            </div>

            {{-- Login with Facebook --}}
            <div class="flex items-center justify-end mt-4">
                <a class="btn" href="{{ url('auth/facebook') }}"
                    style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with Facebook
                </a>
            </div>


            {{-- Laravel Login with Linkedin --}}
            <div class="flex items-center justify-end mt-5">
                <a class="btn" href="{{ url('auth/linkedin') }}"
                    style="background: #0E62BC; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with Linkedin
                </a>
            </div>

           {{-- Login with GitHub --}}
           <div class="flex items-center justify-end mt-4">
            <a class="btn" href="{{ url('auth/github') }}"
                style="background: #313131; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                Login with GitHub
            </a>
           </div>

           {{-- Laravel Login with Twitter Demo--}}
           <div class="flex items-center justify-end mt-4">
            <a class="btn" href="{{ url('auth/twitter') }}"
                style="background: #1E9DEA; padding: 10px; width: 100%; text-align: center; display: block; border-radius:4px; color: #ffffff;">
                Login with Twitter
            </a>
           </div>

        </div>





        </form>

    </x-jet-authentication-card>

</x-guest-layout>
