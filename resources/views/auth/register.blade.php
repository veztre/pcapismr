<x-guest-layout>

    <nav class="navbar navbar-success bg-emerald-600 mb-4 font-sans" >
        <div class="container-fluid p-0">
            <div class="navbar-header w-full p-2"  >
                <!-- <a class="navbar-brand text-center" href="#"> </a> -->
                <table class="w-full font-bold" >
                    <tbody><tr class="text-lg">
                        <td class="w-50 text-white" ><img class="inline bg-transparent w-50 h-50 mr-4" src="/images/rep-bg-logo.gif" alt="logo-denr" >User Registration</td>
                        <td class="text-right text-white mr-6" >Environmental Management Bureau</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
    </nav>

    <x-jet-authentication-card>
        <div class="w-full sm:max-w-screen-md mt-6 px-6 py-4 bg-white shadow md:shadow-3xl drop-shadow-2xl overflow-hidden sm:rounded-lg">



            <div class=" text-center">
                <h1 class="text-xl font-bold text-gray-900 mb-6">Create an Account </h1>
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}" >
                @csrf
                <div class="grid  grid-cols-2 gap-4 auto-cols-1 ">
                    <div class="mt-4" >
                        <x-jet-label for="username" value="{{ __('Username') }}" />
                        <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />

                    </div>

                    <div class="mt-4" >
                        <x-jet-label for="firstname" value="{{ __('First Name') }}" />
                        <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />

                    </div>

                    <div class="mt-4">
                        <x-jet-label for="lastname" value="{{ __('Last Name') }}" />
                        <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="position" value="{{ __('Position') }}" />
                        <x-jet-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" required autofocus autocomplete="position" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="contact" value="{{ __('Telephone/Mobile No.') }}" />
                        <x-jet-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required autofocus autocomplete="contact" />
                    </div >

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="form-group mt-4 mb-3 ">
                    <select  id="region" name="region" class="form-control valid w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                             aria-required="true" aria-invalid="false" >
                        <option selected disabled value=" ">SELECT REGION - (user location)</option>
                        @foreach ($regionn as $data)
                            <option value="{{$data->regionname}}" @if(old('region') == $data->regionname) selected @endif >
                                {{$data->regionname}}
                            </option>
                        @endforeach
                    </select>
                </div>

                      <div class="grid  grid-cols-2 gap-4 auto-cols-1">
                          <div class="mt-4">

                              <x-jet-label for="company_id" class="text-red-600 mb-4" value="{{ __('* Company ID') }}" />
                              <x-jet-input id="company_id" class="form-control"  type="file" name="company_id"  />


                          </div>


                          <div class="mt-4">
                              <x-jet-label for="government_id" class="text-red-600 mb-4 " value="{{ __('* Government ID') }}" />
                              <x-jet-input id="government_id" class="form-control" type="file" name="government_id"   />
                          </div>



                      </div>



                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" required />



                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-center mt-8">
                    <a class="underline text-sm text-indigo-400 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button   class="ml-4 transition ease-in-out delay-150 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
