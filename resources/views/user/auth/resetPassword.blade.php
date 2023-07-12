<x-user.layouts.app>
    <div class="pb-24">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12">
                    <div id="maintab">
                        <ul class="custom-tab-nav flex flex-wrap items-center justify-center">
                            <li class="mx-2">
                                <a
                                    class="font-semibold py-3 px-5 leading-none uppercase transition-all hover:text-orange  text-base md:text-lg"
                                    href="#reset_password">
                                    {{ __('Reset Password') }}
                                </a>
                            </li>
                        </ul>
                        <div>
                            <div id="#forgot_password" class="custom-tab-content">
                                <div class="p-8 md:p-20 shadow max-w-4xl mx-auto">
                                    <form action="{{ route('process-reset-password') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <x-user.form.inputs.password name="password" placeholder="Password" />
                                        <x-user.form.inputs.password name="password_confirmation" placeholder="Password Confirmation" />
                                        <div class="button-box">
                                            <x-user.form.buttons.primary type="submit"> {{ __('Reset Password') }} </x-user.form.buttons.primary>
                                        </div>
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
