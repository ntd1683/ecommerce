<!-- Menu Action -->
<a
    href="#pablo"
    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
>{{ auth()->user()->name }}</a>
<div
    class="h-0 my-2 border border-solid border-blueGray-100"
></div>
<a
    href="{{ route('admin.profile') }}"
    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
>{{ __('Profile') }}</a>
<a
    href="{{ route('admin.option.index') }}"
    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
>{{ __('Settings') }}</a>
<div
    class="h-0 my-2 border border-solid border-blueGray-100"
></div>
<a
    href="{{ route('admin.logout') }}"
    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
>{{ __('Logout') }}</a>
