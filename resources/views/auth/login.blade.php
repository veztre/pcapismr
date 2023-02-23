<title>Pollution Control Association of the Philippines Inc. - SMR</title>
<x-guest-layout>
<x-jet-authentication-card>



        <div class=" col-sm-12 ">
            <h1  class="mt-10 text-center text-cyan-800 text-4xl"><a href="#"><img src="/images/logo.gif" class="inline "></a> POLLUTION CONTROL ASSOCIATION OF THE PHILIPPINES INC.  (PCAPI) - SMR</h1>
        </div>


        <!-- Login component -->
        <div class=" mt-8 md-auto  flex shadow drop-shadow-2xl hover:shadow-lg opacity-100 border-t-8 border-b-8 border-cyan-800 rounded-l-md rounded-r-md ">
            <!-- Login banner -->

            <div  class="md:m-auto hidden lg:inline rounded-l-md" style="width: 45rem; height: 35rem;">
                <img class=" min-h-full min-w-full   bg-center bg-no-repeat bg-cover " src="/images/Banner_National-Clean-Up-Month2022-web.jpg">
            </div>
            <!-- Login form -->
            <div class="md:m-auto md:max-2xl:flex flex flex-wrap content-center justify-center rounded-r-md bg-white " style="width: 24rem; height: 35rem;">

                <!-- Heading -->
                <x-jet-validation-errors class="mt-6 mb-4" />
                <h3 class="logscrn mt-6 text-xl font-extrabold text-green-600  " >LOGIN SCREEN | <a class="text-blue-500 bg-blue" target="_blank" href="https://client.emb.gov.ph/smr/uploads/STEPS ON HOW TO USE SELF MONITORING REPORT SYTEM CLIENT SIDE.pdf">USER MANUAL</a></h3>



                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- Form -->
                <form class="mt-4" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <x-jet-label class="mb-3 block text-xs font-semibold" for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500"
                                     type="email" placeholder="Enter your email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="mb-3 relative">
                        <x-jet-label class="mb-3 block text-xs font-semibold" for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500"
                                     type="password" placeholder="Enter your password" name="password" required autocomplete="current-password" />



                        </div>



                    <x-jet-button class=" mt-3 w-full justify-center transition ease-in-out delay-150 bg-green-800 hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300 ">
                        {{ __('Log in') }}
                    </x-jet-button>


                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" class="mr-2 checked:bg-blue-600" name="remember" />
                            <span class="mr-auto text-xs font-semibold">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="mt-4 mb-3 flex flex-wrap content-center">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-sky-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        | @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-2 text-sm text-sky-600 dark:text-gray-500 underline">Register</a>
                        @endif

                    </div>
                </form>



            </div>


        </div>


    <!-- Credit -->
    <div class="mt-8 max-h-full mb-auto col-sm-12">
        <p class="text-center">Environmental Management&nbsp;Online Services</p>
    </div>
</x-jet-authentication-card>
</x-guest-layout>
