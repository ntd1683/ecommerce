<x-user.layouts.app>
    @yield('breadcrumbs')
    <div class="py-24">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="md:col-start-4 md:col-span-6 col-span-12 text-center mx-auto">
                    <h2 class="font-medium text-lg">{{ __('Ooops! Error') }} @yield('code')</h2>
                    <p class="my-4">{{ __('Sorry, this page') }} @yield('message')</p>
                    <a class="bg-black inline-block leading-none py-4 px-5 md:px-8 font-medium text-sm text-white transition-all hover:bg-orange capitalize"
                       href="{{ route('index') }}">{{ __('Back to home page') }}</a>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</x-user.layouts.app>
