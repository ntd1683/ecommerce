<x-admin.layouts.app>
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
            >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            {{ __('Product') }}
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-5">
                    <form action="{{ route('admin.product.importSheet') }}" method="post">
                        <h6
                            class="text-blueGray-400 text-sm mb-6 font-bold uppercase"
                        >
                            {{ __('Import Product') }}
                        </h6>
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Url Sheet') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="sheet" value="{{ old('sheet') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Sheet Tab Name') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="sheet_tab_name" value="{{ old('sheet_tab_name') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Column Name') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="name" value="{{ old('name') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Column SKU') }}
                                    </x-admin.form.inputs.label>
                                    <div class="mt-2 flex rounded-md shadow-sm">
                                        <x-admin.form.inputs.render name="sku" :value="old('sku')" />
                                    </div>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Column Category') }}
                                    </x-admin.form.inputs.label>
                                    <div class="mt-2 flex rounded-md shadow-sm">
                                        <x-admin.form.inputs.render name="product_category_id" :value="old('product_category_id')" />
                                    </div>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Column Price') }}
                                    </x-admin.form.inputs.label>
                                    <div class="mt-2 flex rounded-md shadow-sm">
                                        <x-admin.form.inputs.render name="price" :value="old('price')" />
                                    </div>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Column Discount') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="product_discount_id" value="{{ old('product_discount_id') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Column Unit') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="unit" value="{{ old('unit') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Product Quantity') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="quantity" value="{{ old('quantity') }}"/>
                                </div>
                                @if(auth()->user()->level == 2)
                                    <div class="relative w-full mb-3">
                                        <x-admin.form.inputs.label>
                                            {{ __('Pin') }}
                                        </x-admin.form.inputs.label>
                                        <x-admin.form.inputs name="pin" value="{{ old('pin') }}"/>
                                    </div>
                                @endif
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Description') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="description" value="{{ old('description') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Image') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="image" value="{{ old('image') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Image 1') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="image1" value="{{ old('image1') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Image 2') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="image2" value="{{ old('image2') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Image 3') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="image3" value="{{ old('image3') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Image 4') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="image4" value="{{ old('image4') }}"/>
                                </div>
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
