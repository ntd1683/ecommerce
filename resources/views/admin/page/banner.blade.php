<x-admin.layouts.app>
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
            >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            {{ __('Banner') }}
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-5">
                    <form action="{{ route('admin.product-category.store') }}" method="post">
                        <h6
                            class="text-blueGray-400 text-sm my-6 font-bold uppercase">
                            {{ __('Add Banner') }}
                        </h6>
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label for="title">
                                        {{ __('Title') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs id="title" name="title" value="{{ old('title') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label for="content">
                                        {{ __('Content') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs id="content" name="content" value="{{ old('content') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label for="banner">
                                        {{ __('Banner') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs id="banner" name="banner" value="{{ old('banner') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label for="link">
                                        {{ __('Link') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs id="link" name="link" value="{{ old('link') }}"/>
                                </div>
                                <div class="relative w-full mb-5">
                                    <x-admin.form.inputs.label for="pin">
                                        {{ __('Pin') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs id="pin" name="pin" value="{{ old('pin') }}"/>
                                </div>
                                <x-user.form.buttons.primary type="submit">
                                    {{ __('Submit') }}
                                </x-user.form.buttons.primary>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layouts.app>
