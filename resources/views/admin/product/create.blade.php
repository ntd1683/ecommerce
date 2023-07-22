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
                    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                        <h6
                            class="text-blueGray-400 text-sm mb-6 font-bold uppercase"
                        >
                            {{ __('Add Product') }}
                        </h6>
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Name') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="name" value="{{ old('name') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('SKU') }}
                                    </x-admin.form.inputs.label>
                                    <div class="mt-2 flex rounded-md shadow-sm">
                                        <x-admin.form.inputs.render name="sku" :value="old('sku')" />
                                    </div>
                                </div>
                                <div class="relative w-full mb-3">
                                    <div class="flex justify-between">
                                        <x-admin.form.inputs.label>
                                            {{ __('Product Category') }}
                                        </x-admin.form.inputs.label>
                                        <a href="{{ route('admin.product-category.create') }}" class="block uppercase text-primary text-xs font-bold mb-2 hover:text-secondary">
                                            {{ __('Add Product Category') }}
                                        </a>
                                    </div>
                                    <x-admin.form.inputs.select name="product_category_id" id="select-2-product-category" data-ajax="{{ route('ajax.product.category.index') }}">
                                        <option value="-1">{{ __('Select Product Category') }}</option>
                                    </x-admin.form.inputs.select>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Price') }}
                                    </x-admin.form.inputs.label>
                                        <div class="relative mt-2 rounded-md shadow-sm">
                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                <span class="text-gray-500 sm:text-sm">Đ</span>
                                            </div>
                                            <x-admin.form.inputs name="price" value="{{ old('price') }}" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 sm:text-sm sm:leading-6" placeholder="xxxxx" />
                                        </div>
                                </div>
                                <div class="relative w-full mb-3">
                                    <div class="flex justify-between">
                                        <x-admin.form.inputs.label>
                                            {{ __('Product Discount') }}
                                        </x-admin.form.inputs.label>
                                        <a href="{{ route('admin.discount.create') }}" class="block uppercase text-primary text-xs font-bold mb-2 hover:text-secondary">
                                            {{ __('Add Product Discount') }}
                                        </a>
                                    </div>
                                    <x-user.form.inputs.select name="product_discount_id" id="select-2-discount" data-ajax="{{ route('ajax.discount.index') }}">
                                        <option value="-1">{{ __('Select Product Discount') }}</option>
                                    </x-user.form.inputs.select>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Product Unit') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="unit" value="{{ old('unit') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Product Quantity') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="quantity" value="{{ old('quantity') }}"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Product Image') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs.multipleImage name="image[]"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.html class="description" name="description" value="{{ old('description') }}"/>
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
