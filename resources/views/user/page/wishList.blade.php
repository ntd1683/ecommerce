<x-user.layouts.app>
    {{ Breadcrumbs::render('wishList') }}
    
    <div class="py-24">

        <div class="container">
            <div class="grid grid-cols-1 gap-x-5">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-max">
                        <thead>
                            <tr>
                                <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">Image</th>
                                <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">Product</th>
                                <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">Price</th>
                                <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">Quantity</th>
                                <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">Total</th>
                                <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">Remove</th>
                                <th class="bg-gray-300 p-3 border border-solid border-gray-600 text-center font-medium text-sm capitalize">check out</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                    <a href="#">
                                        <img src="assets/images/single-product/sm/product1.webp" alt="product image"></a>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center"><span><span>$80.00</span></span></td>
                                <td class="p-3 border border-solid border-gray-600 text-center">

                                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                        <input type="number" min="1" max="100" step="1" value="1" class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                    </div>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center"><span>$80.00</span></td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-pencil"></i></a>
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-close"></i></a>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="inline-block bg-dark leading-none py-4 px-5 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white">add to cart</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                    <a href="#">
                                        <img src="assets/images/single-product/sm/product2.webp" alt="product image"></a>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center"><span><span>$80.00</span></span></td>
                                <td class="p-3 border border-solid border-gray-600 text-center">

                                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                        <input type="number" min="1" max="100" step="1" value="1" class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                    </div>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center"><span>$80.00</span></td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-pencil"></i></a>
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-close"></i></a>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="inline-block bg-dark leading-none py-4 px-5 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white">add to cart</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                    <a href="#">
                                        <img src="assets/images/single-product/sm/product3.webp" alt="product image"></a>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center"><span><span>$80.00</span></span></td>
                                <td class="p-3 border border-solid border-gray-600 text-center">

                                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                        <input type="number" min="1" max="100" step="1" value="1" class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                    </div>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center"><span>$80.00</span></td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-pencil"></i></a>
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-close"></i></a>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="inline-block bg-dark leading-none py-4 px-5 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white">add to cart</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-32 p-3 border border-solid border-gray-600 text-center">
                                    <a href="#">
                                        <img src="assets/images/single-product/sm/product4.webp" alt="product image"></a>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center"><span><span>$80.00</span></span></td>
                                <td class="p-3 border border-solid border-gray-600 text-center">

                                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                        <input type="number" min="1" max="100" step="1" value="1" class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                    </div>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center"><span>$80.00</span></td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-pencil"></i></a>
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-close"></i></a>
                                </td>
                                <td class="p-3 border border-solid border-gray-600 text-center">
                                    <a href="#" class="inline-block bg-dark leading-none py-4 px-5 text-sm text-white transition-all hover:bg-orange uppercase font-semibold hover:text-white">add to cart</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- team carousel end -->
    @include('user.homepage.newsLetter')
</x-user.layouts.app>