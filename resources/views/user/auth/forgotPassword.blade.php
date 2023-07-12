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
                                    href="#forgot_password">
                                    {{ __('Forgot Password') }}
                                </a>
                            </li>
                        </ul>
                        <div>
                            <div id="#forgot_password" class="custom-tab-content">
                                <div class="p-8 md:p-20 shadow max-w-4xl mx-auto">
                                    <form action="{{ route('process-forgot-password') }}" method="post">
                                        @csrf
                                        <x-user.form.inputs type="email" name="email" placeholder="Email"/>
                                        <div class="flex justify-between">
                                            <div>Already have an account or don't have an account?</div>
                                            <div>
                                                <a href="#" class="inline-block text-orange">{{ __('Sign up Or Sign in') }}</a>
                                            </div>
                                        </div>
                                        <div class="button-box">
                                            <x-user.form.buttons.primary type="submit"> {{ __('Forgot Password') }} </x-user.form.buttons.primary>
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
