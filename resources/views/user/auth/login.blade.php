<x-user.layouts.app>
    <div class="pb-24">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12">
                    <div id="maintab">
                        <ul class="custom-tab-nav flex flex-wrap items-center justify-center">
                            <li class="mx-2"><a
                                    class="font-semibold py-3 px-5 leading-none uppercase transition-all hover:text-orange  text-base md:text-lg"
                                    href="#login">{{ __('Login') }}</a> <span class="inline-block ml-2">|</span></li>
                            <li class="mx-2"><a
                                    class="font-semibold py-3 px-5 leading-none uppercase transition-all hover:text-orange  text-base md:text-lg"
                                    href="#register">{{ __('Register') }}</a></li>
                        </ul>
                        <div>
                            <div id="login" class="custom-tab-content">
                                <div class="p-8 md:p-20 shadow max-w-4xl mx-auto">
                                    <form action="{{ route('process-login') }}" method="post">
                                        @csrf
                                        <x-user.form.inputs type="email" name="email" placeholder="Email"/>
                                        <x-user.form.inputs.password name="password" placeholder="Password"/>
                                        <div class="flex justify-between mx-2">
                                            <div class="mb-4">
                                                <input id="remember" type="checkbox" name="remember">
                                                <label for="remember" class="cursor-pointer">{{ __('Remember me') }}</label>
                                            </div>
                                            <a href="{{ route("forgot-password") }}" class="inline-block text-orange">{{ __('Forgot Password?') }}</a>
                                        </div>
                                        <div class="button-box">
                                            <x-user.form.buttons.primary type="submit"> {{ __('Login') }} </x-user.form.buttons.primary>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="register" class="custom-tab-content">
                                <div class="p-8 md:p-20 shadow max-w-4xl mx-auto">
                                    <form action="{{ route('process-register') }}" method="post">
                                        @csrf
                                        <x-user.form.inputs name="name" placeholder="Name" :value="old('name')"/>
                                        <x-user.form.inputs name="birthdate" placeholder="xx/xx/xxxx" type="date" :value="old('birthdate')"/>
                                        <x-user.form.inputs name="phone" placeholder="0123xxxxxxx" :value="old('phone')"/>
                                        <div class="grid grid-cols-2 mb-2">
                                            <div>
                                                <label for="gender1">{{ __('Male') }}</label>
                                                <input type="radio" name="gender" value="1" id="gender1" @selected(old('gender') == 1)/>
                                            </div>
                                            <div>
                                                <label for="gender0">{{ __('Female') }}</label>
                                                <input type="radio" name="gender" value="0" id="gender0" @selected(old('gender') == 0)/>
                                            </div>
                                        </div>
                                        <x-user.form.inputs name="email" placeholder="Email" type="email" :value="old('email')"/>
                                        <x-user.form.inputs.password name="password" placeholder="Password" />
                                        <x-user.form.inputs.password name="password_confirmation" placeholder="Password Confirmation" />
                                            <x-user.form.buttons.primary type="submit">
                                                {{ __('Register') }}
                                            </x-user.form.buttons.primary>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.layouts.app>
