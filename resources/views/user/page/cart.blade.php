<x-user.layouts.app>
    {{ Breadcrumbs::render('cart') }}
    <div class="py-24">

        <div class="container">
            <div class="grid grid-cols-1 gap-x-5">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-max">
                        <thead>
                        <tr>
                            <th class="bg-gray-200 p-3 border border-solid border-gray-300 text-center font-medium text-sm capitalize">{{ __('Image') }}</th>
                            <th class="bg-gray-200 p-3 border border-solid border-gray-300 text-center font-medium text-sm capitalize">{{ __('Product') }}</th>
                            <th class="bg-gray-200 p-3 border border-solid border-gray-300 text-center font-medium text-sm capitalize">{{ __('Price') }}</th>
                            <th class="bg-gray-200 p-3 border border-solid border-gray-300 text-center font-medium text-sm capitalize">{{ __('Quantity') }}</th>
                            <th class="bg-gray-200 p-3 border border-solid border-gray-300 text-center font-medium text-sm capitalize">{{ __('Total') }}</th>
                            <th class="bg-gray-200 p-3 border border-solid border-gray-300 text-center font-medium text-sm capitalize">{{ __('Remove') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($cartItems as $item)
                            <tr>
                                <td class="w-32 p-3 border border-solid border-gray-300 text-center">
                                    <a href="#">
                                        @if($item->attributes->typeImage == '0')
                                            <img src="{{ Storage::url($item->attributes->image) }}" alt="product image">
                                        @else
                                            <img src="{{ $item->attributes->image }}" alt="product image">
                                        @endif
                                    </a>
                                </td>
                                <td class="p-3 border border-solid border-gray-300 text-center">
                                    <a href="#" class="transition-all hover:text-orange">{{ $item->name }}</a><span>/</span> <span> {{ $item->attributes->unit }}</span>
                                </td>
                                <td class="p-3 border border-solid border-gray-300 text-center">
                                    <span><span>{{ $item->price }} VNĐ</span></span></td>
                                <td class="p-3 border border-solid border-gray-300 text-center">

                                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                        <input type="number" min="1" max="100" step="1" value="{{ $item->quantity }}"
                                               class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                    </div>
                                </td>
                                <td class="p-3 border border-solid border-gray-300 text-center"><span>{{ $item->price * $item->quantity }} VNĐ</span></td>
                                <td class="p-3 border border-solid border-gray-300 text-center">
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-pencil"></i></a>
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-close"></i></a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <!-- shipping  start -->
    <section class="pb-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
                <div>
                    <div>
                        <h3 class="text-md font-semibold capitalize mb-8">{{ __('calculate shipping') }}</h3>
                        <form action="#">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5">
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="text-lg">{{ __('Province') }}</label>
                                    <input type="hidden" id="url_province" value="{{ route('ajax.ghn.get-provinces') }}">
                                    <input type="hidden" name="province" id="province">
                                    <x-user.form.inputs.select name="province_id" class="select-2-province" id="province_id">
                                        <option value="{{ addresses()->province_id ?? '' }}">{{ addresses()->province ?? '' }}</option>
                                    </x-user.form.inputs.select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="text-lg">{{ __('District') }}</label>
                                    <input type="hidden" id="url_district" value="{{ route('ajax.ghn.get-district') }}">
                                    <input type="hidden" name="district" id="district">
                                    <x-user.form.inputs.select name="district_id" class="select-2-district" id="district_id">
                                        <option value="{{ addresses()->district_id ?? '' }}">{{ addresses()->district ?? '' }}</option>
                                    </x-user.form.inputs.select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="text-lg">{{ __('Ward') }}</label>
                                    <input type="hidden" id="url_ward" value="{{ route('ajax.ghn.get-ward') }}">
                                    <input type="hidden" name="ward" id="ward">
                                    <x-user.form.inputs.select name="ward_id" class="select-2-ward">
                                        <option value="{{ addresses()->ward_id ?? '' }}">{{ addresses()->ward ?? '' }}</option>
                                    </x-user.form.inputs.select>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label class="text-lg">{{ __('Address 1') }}</label>
                                    <input
                                        class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base placeholder-opacity-50"
                                        placeholder="Address_1" type="text">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <a href="#"
                                       class="inline-block bg-primary leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white mb-5 sm:mb-0">estimate</a>
                                </div>

                                <div class="col-span-2">
                                    <h3 class="text-md font-semibold capitalize mb-8">{{ __('Discount coupon Code') }}</h3>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <input
                                        class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                        placeholder="coupon Code" type="text">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <a href="#"
                                       class="inline-block bg-primary leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white mb-8 sm:mb-0">
                                        {{ __('apply code') }}
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-4 lg:mt-0">
                    <div class="bg-gray-100 p-10">
                        <ul class="flex flex-wrap items-center justify-between">
                            <li class="text-base font-semibold">{{ __('Product') }}</li>
                            <li class="text-base font-semibold">{{ __('Total') }}</li>
                        </ul>

                        <ul class="flex flex-wrap items-center justify-between">
                            <li class="text-base font-semibold">{{ __('Shipping') }}</li>
                            <li class="text-base font-semibold">{{ number_shorten(30000) }} VNĐ</li>
                        </ul>
                        <div class="border-t border-b border-gray-300 py-5 mt-5">
                            <ul class="flex flex-wrap items-center justify-between">
                                <li class="text-base font-semibold">{{ __('Total') }}</li>
                                <li class="text-base font-semibold text-orange">{{ \Cart::getTotal() }} VNĐ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#"
                           class="inline-block bg-primary leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white">Update
                            Cart</a>
                        <a href="#"
                           class="inline-block bg-primary leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white ml-4">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shipping  end -->
    @include('user.homepage.newsLetter')
    @push('js')
        <script src="{{ asset('js/user/cart.js') }}"></script>
    @endpush
</x-user.layouts.app>
