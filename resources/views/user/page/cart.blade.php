<x-user.layouts.app>
    {{ Breadcrumbs::render('cart') }}
    <div class="py-24">

        <div class="container">
            <div class="grid grid-cols-1 gap-x-5">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-max">
                        <thead>
                        <tr>
                            <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">{{ __('Image') }}</th>
                            <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">{{ __('Product') }}</th>
                            <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">{{ __('Price') }}</th>
                            <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">{{ __('Quantity') }}</th>
                            <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">{{ __('Total') }}</th>
                            <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">{{ __('Remove') }}</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                <a href="#">
                                    <img src="{{ asset('images/hutech.webp') }}" alt="product image"></a>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <span><span>$80.00</span></span></td>
                            <td class="p-3 border border-solid border-gray-600 text-center">

                                <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                    <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                    <input type="number" min="1" max="100" step="1" value="1"
                                           class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                    <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                </div>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center"><span>$80.00</span></td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-pencil"></i></a>
                                <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-close"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                <a href="#">
                                    <img src="{{ asset('images/hutech.webp') }}" alt="product image"></a>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <span><span>$80.00</span></span></td>
                            <td class="p-3 border border-solid border-gray-600 text-center">

                                <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                    <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                    <input type="number" min="1" max="100" step="1" value="1"
                                           class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                    <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                </div>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center"><span>$80.00</span></td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-pencil"></i></a>
                                <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-close"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                <a href="#">
                                    <img src="{{ asset('images/hutech.webp') }}" alt="product image"></a>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <span><span>$80.00</span></span></td>
                            <td class="p-3 border border-solid border-gray-600 text-center">

                                <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                    <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                    <input type="number" min="1" max="100" step="1" value="1"
                                           class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                    <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                </div>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center"><span>$80.00</span></td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-pencil"></i></a>
                                <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-close"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                <a href="#">
                                    <img src="{{ asset('images/hutech.webp') }}" alt="product image"></a>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <span><span>$80.00</span></span></td>
                            <td class="p-3 border border-solid border-gray-600 text-center">

                                <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                    <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                    <input type="number" min="1" max="100" step="1" value="1"
                                           class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                    <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                </div>
                            </td>
                            <td class="p-3 border border-solid border-gray-600 text-center"><span>$80.00</span></td>
                            <td class="p-3 border border-solid border-gray-600 text-center">
                                <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-pencil"></i></a>
                                <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i
                                            class="icon-close"></i></a>
                            </td>
                        </tr>

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
                                    <select class="border border-solid border-gray-300 bg-transparent w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                                        <option>Select country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                        <option>Viet Nam</option>
                                    </select>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <select class="border border-solid border-gray-300 bg-transparent w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base">
                                        <option>Select State</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                           placeholder="Postcode / ZIP" type="text">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <a href="#"
                                       class="inline-block bg-dark leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white mb-5 sm:mb-0">estimate</a>
                                </div>

                                <div class="col-span-2">
                                    <h3 class="text-md font-semibold capitalize mb-8">Discount coupon Code</h3>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                           placeholder="coupon Code" type="text">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <a href="#"
                                       class="inline-block bg-dark leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white mb-8 sm:mb-0">apply
                                        code</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-4 lg:mt-0">
                    <div class="bg-gray-700 p-10">
                        <ul class="flex flex-wrap items-center justify-between">
                            <li class="text-base font-semibold">Product</li>
                            <li class="text-base font-semibold">Total</li>
                        </ul>

                        <ul class="flex flex-wrap items-center justify-between">
                            <li class="text-base font-semibold">Shipping</li>
                            <li class="text-base font-semibold">Free shipping</li>
                        </ul>
                        <div class="border-t border-b border-gray-600 py-5 mt-5">
                            <ul class="flex flex-wrap items-center justify-between">
                                <li class="text-base font-semibold">Total</li>
                                <li class="text-base font-semibold text-orange">$329</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#"
                           class="inline-block bg-dark leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white">Update
                            Cart</a>
                        <a href="#"
                           class="inline-block bg-dark leading-none py-4 px-5 md:px-8 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white ml-4">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shipping  end -->
    @include('user.homepage.newsLetter')
</x-user.layouts.app>
