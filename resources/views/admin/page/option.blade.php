<x-admin.layouts.app>
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
            >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            {{ __('Option') }}
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-5">
                    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                        <h6
                            class="text-blueGray-400 text-sm mb-6 font-bold uppercase"
                        >
                            {{ __('Edit website') }}
                        </h6>
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label for="site_name">
                                        {{ __('Site Name') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs id="site_name"
                                                         value="{{ old('site_name', option('site_name', config('app.name'))) }}"
                                                         name="site_name" placeholder="{{ __('Site Name') }}"/>
                                </div>
                                <div class="flex flex-wrap mb-3">
                                    <div class="w-full lg:w-1/2 px-4">
                                        <div class="relative w-full mb-3">
                                            <x-admin.form.inputs.label for="site_logo">
                                                {{ __('Logo') }}
                                            </x-admin.form.inputs.label>
                                            <x-admin.form.inputs.image id="site_logo"
                                                                       value="{{ old('site_logo', option('site_logo')) }}"
                                                                       class="rounded-3"/>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-1/2 px-4">
                                        <div class="relative w-full mb-3">
                                            <x-admin.form.inputs.label for="site_favicon">
                                                {{ __('Favicon') }}
                                            </x-admin.form.inputs.label>
                                            <x-admin.form.inputs.image name="site_favicon"
                                                                       value="{{ old('site_favicon',  option('site_favicon')) }}"
                                                                       class="rounded-3"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label for="primary_color">
                                        {{ __('Primary Color') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs id="primary_color"
                                                         value="{{ old('primary_color', option('primary_color')) }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label for="secondary_color">
                                        {{ __('Secondary Color') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs id="secondary_color"
                                                         value="{{ old('secondary_color', option('secondary_color')) }}"/>
                                </div>
                                @if(auth()->user()->level == 2)
                                    <div class="relative w-full mb-3">
                                        <x-admin.form.inputs.checkbox name="pin">
                                            {{ __('Pin') }}
                                        </x-admin.form.inputs.checkbox>
                                    </div>
                                @endif
                                <x-user.form.buttons.primary type="submit">
                                    {{ __('Submit') }}
                                </x-user.form.buttons.primary>
                            </div>
                        </div>
                    </form>
                    <hr class="mt-6 border-b-1 border-blueGray-300"/>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="{{ asset('js/admin/product.js') }}"></script>
    @endpush
</x-admin.layouts.app>
