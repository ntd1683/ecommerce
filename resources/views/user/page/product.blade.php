<x-user.layouts.app>
    {{ Breadcrumbs::render('product') }}

    <div class="py-24">

        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div>
                    <div class="relative  overflow-hidden">
                        <span
                            class="font-bold uppercase text-sm text-white inline-block py-1 px-2 leading-none absolute top-3  z-10 right-3 bg-orange-500">Sale</span>
                        <div class="gallery mb-6">
                            <div class="swiper-container">
                                <div class="swiper-wrapper w-">
                                    @forelse($product->productImages()->get() as $image)
                                        <div class="swiper-slide">
                                            @if($image->type == '1')
                                                <img src="{{ $image->link_image }}" alt="{{ __('product image') }}">
                                            @elseif($image->type == '0')
                                                <img src="{{ Storage::url($image->link_image) }}" alt="{{ __('product image') }}">
                                            @endif
                                        </div>
                                    @empty
                                            <img src="https://app.moduncomputer.com//Assets/Templates/Admin/img/no_image.png" alt="{{ __('Image None Available') }}">
                                    @endforelse
                                </div>
                            </div>

                        </div>

{{--                        <div class="gallery-nav relative">--}}
{{--                            <div class="swiper-container">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    @forelse($product->productImages()->get() as $image)--}}

{{--                                        <div class="swiper-slide">--}}
{{--                                            @if($image->type == '1')--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <img src="{{ $image->link_image }}" alt="{{ __('product image') }}">--}}
{{--                                                </a>--}}
{{--                                            @elseif($image->type == '0')--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <img src="{{ Storage::url($image->link_image) }}" alt="{{ __('product image') }}">--}}
{{--                                                </a>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    @empty--}}
{{--                                        <img src="https://app.moduncomputer.com//Assets/Templates/Admin/img/no_image.png" alt="{{ __('Image None Available') }}">--}}
{{--                                    @endforelse--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- If we need pagination -->--}}
{{--                            <!-- <div class="swiper-pagination"></div> -->--}}
{{--                            <div class="swiper-buttons">--}}
{{--                                <div--}}
{{--                                    class="swiper-button-prev right-auto left-4  w-8 h-8 rounded-full  border border-solid border-gray-500 text-sm text-dark opacity-100 transition-all hover:text-orange-500 hover:border-orange-500">--}}
{{--                                    <i class="ion-chevron-left"></i>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="swiper-button-next left-auto right-4  w-8 h-8 rounded-full  border border-solid border-gray-500 text-sm text-dark opacity-100 transition-all hover:text-orange-500 hover:border-orange-500">--}}
{{--                                    <i class="ion-chevron-right"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>

                <div>
                    <h3 class="font-medium text-2xl capitalize">{{ $product->name }}</h3>
                    <h5 class="font-bold text-md leading-none text-orange-500 my-3">
                        @if($product->special_products)
                            <del class="font-normal text-sm mr-1 inline-block">VNĐ {{ number_shorten($product->special_products) }}</del>
                        @endif
                        VNĐ {{ number_shorten($product->price) }}
                    </h5>
                    <div class="mb-3 text-base">{{ __('Category') }}:<span> {{ $product->category }} </span></div>
                    <div class="mb-3 text-base">{{ __('Unit') }}: <span> {{ $product->unit }} </span></div>
                    <div class="mb-3 text-base "><span>{{ __('Availability') }}:</span> <span class="font-semibold text-red-600">{{ number_shorten($product->quantity) }} {{ __('left in stock') }}</span>
                    </div>
                    <div>
                        <div class="flex flex-wrap items-center mb-6 text-base">
                            <span class="mr-8">{{ __('Size') }}:</span>
                            <form class="size-swatch" action="#">
                                <ul class="flex flex-wrap">
                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="size1">
                                        <label
                                            class="py-2 px-2 leading-none text-sm flex items-center justify-center transition-all bg-gray-300 cursor-pointer capitalize"
                                            for="size1">G</label>
                                    </li>

                                    <li class="mx-1">
                                        <input class="hidden opacity-0" type="radio" name="radio-group" id="size2"
                                               checked>
                                        <label
                                            class="py-2 px-2 leading-none text-sm flex items-center justify-center transition-all bg-gray-300 cursor-pointer capitalize"
                                            for="size2">KG</label>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="mb-8">
                            <div class="flex flex-wrap items-center mt-8">
                                <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                    <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                    <input type="number" min="1" max="100" step="1" value="1"
                                           class="quantity__input text-sm flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                    <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                </div>
                                <div class="ml-2 sm:ml-8">
                                    <button
                                        class="bg-primary leading-none py-4 px-5 md:px-8 font-normal text-sm h-11 text-white transition-all hover:bg-secondary">
                                        {{ __('Add to Cart') }}
                                    </button>
                                </div>
                                <a href="#" class="text-md ml-8"><i class="icon-heart"></i></a>
                                <a href="#" class="text-md ml-8"><i class="icon-refresh"></i></a>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-start mb-8">
                            <a href="#"
                               class="text-md text-facebook hover:text-secondary mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                                    class="icon-social-facebook"></i></a>
                            <a href="#"
                               class="text-md text-twitter hover:text-secondary mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                                    class="icon-social-twitter"></i></a>
                            <a href="#"
                               class="text-md text-dribbble hover:text-secondary mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                                    class="icon-social-instagram"></i></a>
                            <a href="#" class="text-md text-youtube hover:text-secondary leading-none transition"><i
                                    class="icon-social-youtube"></i></a>
                            <div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>


    <div id="maintab" class="pb-24">
        <div class="container">
            <div class="grid grid-cols-1 gap-x-5">
                <div class="border border-solid border-gray-300 p-8">
                    <ul class="custom-tab-nav flex flex-wrap items-center mb-10 -mx-5 -my-1 ">
                        <li class="mx-5 my-1"><a
                                class="pb-3 leading-none capitalize transition-all font-semibold hover:text-secondary text-xl sm:text-lg before:absolute before:left-auto before:right-0 before:bottom-0 before:w-0 before:h-[2px] before:empty before:bg-primary relative before:transition-all ease-out"
                                href="#description">{{ __('Description') }}</a></li>
                        <li class="mx-5 my-1"><a
                                class="pb-3 leading-none capitalize transition-all font-semibold hover:text-secondary text-xl sm:text-lg before:absolute before:left-auto before:right-0 before:bottom-0 before:w-0 before:h-[2px] before:empty before:bg-primary relative before:transition-all ease-out"
                                href="#product-details">{{ __('Product Details') }}</a></li>
                        <li class="mx-5 my-1"><a
                                class="pb-3 leading-none capitalize transition-all font-semibold hover:text-secondary text-xl sm:text-lg before:absolute before:left-auto before:right-0 before:bottom-0 before:w-0 before:h-[2px] before:empty before:bg-primary relative before:transition-all ease-out"
                                href="#review">{{ __('Reviews') }}</a></li>
                    </ul>
                    <div id="description" class="custom-tab-content">
                        <div>
                            {!! $product->description !!}
                        </div>
                    </div>

                    <div id="product-details" class="custom-tab-content">
                        <div class="review-bottom">
                            <div class="single-product-desc">
                                <div class="product-anotherinfo-wrapper text-base">
                                    <ul>
                                        <li class="mb-4"><span class="font-semibold w-28 inline-block">{{ __('Shop') }}</span> {{ $product->user()->first()->name }}
                                        </li>
                                        <li class="mb-4"><span class="font-semibold w-28 inline-block">{{ __('Category') }}</span> {{ $product->category }}
                                        </li>
                                        <li class="mb-4"><span class="font-semibold w-28 inline-block">{{ __('Price') }}</span>
                                            {{ number_shorten($product->price) }} VNĐ / {{ $product->unit }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="review" class="custom-tab-content">
                        <div>

                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5 xl:gap-x-10">
                                <div>

                                    <div class="flex flex-wrap flex-col sm:flex-row items-start relative mb-12">
                                        <img class="mr-7 mb-5 sm:mb-0"
                                             src="{{ asset('images/user/testimonial/1.webp') }}" alt="">
                                        <div class="flex-1">
                                            <div class="flex flex-wrap">
                                                <h4 class="text-base text-dark font-semibold mt-2">White Lewis</h4>
                                                <div class="ml-8 text-orange-500 ">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                            </div>
                                            <div class="text-right text-base ">
                                                <a class="hover:text-secondary transition-all" href="#">Reply</a>
                                            </div>
                                            <p class="text-base">
                                                Vestibulum ante ipsum primis aucibus orci
                                                luctustrices posuere cubilia Curae Suspendisse
                                                viverra ed viverra. Mauris ullarper euismod
                                                vehicula. Phasellus quam nisi, congue id nulla.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col sm:flex-row items-start relative mb-12">
                                        <img class="mr-7 mb-5 sm:mb-0"
                                             src="{{ asset('images/user/testimonial/1.webp') }}" alt="">
                                        <div class="flex-1">
                                            <div class="flex flex-wrap">
                                                <h4 class="text-base text-dark font-semibold mt-2 ">White Lewis</h4>
                                                <div class="ml-8 text-orange-500 ">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                            </div>
                                            <div class="text-right text-base">
                                                <a class="hover:text-secondary transition-all" href="#">Reply</a>
                                            </div>
                                            <p class="text-base">
                                                Vestibulum ante ipsum primis aucibus orci
                                                luctustrices posuere cubilia Curae Suspendisse
                                                viverra ed viverra. Mauris ullarper euismod
                                                vehicula. Phasellus quam nisi, congue id nulla.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <h4 class="text-lg text-dark font-semibold">Add a Review</h4>
                                    <form action="#">
                                        <div class="flex flex-wrap mb-5">
                                            <span class="mr-4 text-base mt-2">Your rating:</span>
                                            <div class="text-orange-500">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-x-4">
                                            <div class="leave-form col-span-2 sm:col-span-1">
                                                <x-user.form.inputs
                                                    class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                    placeholder="Name" type="text"></x-user.form.inputs>
                                            </div>
                                            <div class="leave-form col-span-2 sm:col-span-1">
                                                <x-user.form.inputs
                                                    class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                    placeholder="Email" type="email"></x-user.form.inputs>
                                            </div>
                                            <div class="text-leave col-span-2">
                                                <x-user.form.inputs.textarea
                                                    class="border border-solid border-gray-300 w-full py-1 px-5 mb-8 placeholder-current text-dark h-60 focus:outline-none text-base resize-none"
                                                    name="Your Review"
                                                    placeholder="Message"></x-user.form.inputs.textarea>
                                                <button type="submit"
                                                        class="leading-none uppercase text-white text-sm bg-primary px-5 py-5 transition-all hover:bg-secondary">
                                                    Post comment
                                                </button>
                                            </div>
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


    <!-- Product section start -->
    <section class="product-section pb-24">
        <div class="container">

            <div class="grid grid-rows-1 grid-flow-col gap-4">
                <div class="text-center mb-14">
                    <h2 class="font-playfair font-bold text-primary text-2xl md:text-3xl lg:text-4xl mb-4">New
                        Arrivals</h2>
                    <p class=" text-lg lg:text-lg">Contrary to popular belief, Lorem Ipsum is not simply random
                        text.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <section class="relative -m-4">
                        <div class="product-carousel2 overflow-hidden p-4">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div
                                            class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div class="relative overflow-hidden">
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-3 right-3">{{ __('Sale') }}</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-10 right-3">{{ __('-11%') }}</span>
                                                <img class="w-full h-full"
                                                     src="{{ asset('images/user/service1.webp') }}" alt="product image"
                                                     loading="lazy" width="432" height="480"/>
                                                <!-- actions start -->

                                                <div
                                                    class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                               data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                               data-tippy-content="Add to wishlist"
                                                               aria-label="wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                               data-tippy-content="Compare" aria-label="Compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                               aria-label="add to cart"
                                                               data-tippy-content="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->


                                                <!-- variants start -->

                                                <div
                                                    class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                    <ul class="flex flex-wrap items-center justify-center mb-3">
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">SM</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">L</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">M</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">XL</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">XXL</button>
                                                        </li>
                                                    </ul>
                                                    <ul class="flex flex-wrap items-center justify-center">
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-orange-500"
                                                                    aria-label="colors"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-primary"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-indigo-600"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-dark"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- variants end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all"
                                                       href="#">Batin crofessor pampden</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3">
                                                    <del class="font-normal text-sm mr-1 inline-block">$110.00</del>
                                                    $130.00
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div
                                            class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div id="tab1" class="relative overflow-hidden">
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-3 left-3">{{ __('New') }}</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-3 right-3">{{ __('Sale') }}</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-10 right-3">{{ __('-11%') }}</span>
                                                <img class="w-full h-full"
                                                     src="{{ asset('images/user/service1.webp') }}" alt="product image"
                                                     loading="lazy" width="432" height="480"/>

                                                <!-- actions start -->

                                                <div
                                                    class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                               data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                               data-tippy-content="Add to wishlist"
                                                               aria-label="Add to wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                               data-tippy-content="Compare" aria-label="compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                               data-tippy-content="Add to cart"
                                                               aria-label="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all"
                                                       href="#">Esse quam nihil molestiae</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3">
                                                    <del class="font-normal text-sm mr-1 inline-block">$110.00</del>
                                                    $130.00
                                                </h4>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div
                                            class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <img class="w-full h-full" src="{{ asset('images/user/service1.webp') }}"
                                                 alt="product image" loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           data-tippy-content="Quick View" aria-label="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           data-tippy-content="Add to wishlist"
                                                           aria-label="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           data-tippy-content="Compare" aria-label="compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           data-tippy-content="Add to cart" aria-label="Add to cart">
                                                            <i class="icon-bag"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->


                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all"
                                                       href="#">Inisd deofessor smpden</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3">
                                                    <del class="font-normal text-sm mr-1 inline-block">$110.00</del>
                                                    $130.00
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div
                                            class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div class="relative overflow-hidden">
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-3 left-3">{{ __('New') }}</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-3 right-3">{{ __('Sale') }}</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-10 right-3">{{ __('-11%') }}</span>
                                                <img class="w-full h-full"
                                                     src="{{ asset('images/user/service1.webp') }}" alt="product image"
                                                     loading="lazy" width="432" height="480"/>
                                                <!-- actions start -->

                                                <div
                                                    class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                               data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                               data-tippy-content="Add to wishlist"
                                                               aria-label="Add to wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                               data-tippy-content="Compare" aria-label="compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                               data-tippy-content="Add to cart"
                                                               aria-label="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->


                                                <!-- variants start -->

                                                <div
                                                    class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                    <ul class="flex flex-wrap items-center justify-center mb-3">
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">SM</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">L</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">M</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">XL</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">XXL</button>
                                                        </li>
                                                    </ul>
                                                    <ul class="flex flex-wrap items-center justify-center">
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-orange-500"
                                                                    aria-label="colors"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-primary"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-indigo-600"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-dark"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- variants end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all"
                                                       href="#">Nam libero tempore,</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3">
                                                    <del class="font-normal text-sm mr-1 inline-block">$110.00</del>
                                                    $130.00
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div
                                            class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div class="relative overflow-hidden">
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500text-orange-500 inline-block py-1 px-2 leading-none absolute top-3 left-3">{{ __('New') }}</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-3 right-3">{{ __('Sale') }}</span>
                                                <span
                                                    class="font-medium uppercase text-sm text-orange-500 inline-block py-1 px-2 leading-none absolute top-10 right-3">{{ __('-11%') }}</span>
                                                <img class="w-full h-full"
                                                     src="{{ asset('images/user/service1.webp') }}" alt="product image"
                                                     loading="lazy" width="432" height="480"/>
                                                <!-- actions start -->

                                                <div
                                                    class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                               data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                               data-tippy-content="Add to wishlist"
                                                               aria-label="wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                               data-tippy-content="Compare" aria-label="Compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart"
                                                               class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                               aria-label="add to cart"
                                                               data-tippy-content="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->


                                                <!-- variants start -->

                                                <div
                                                    class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                    <ul class="flex flex-wrap items-center justify-center mb-3">
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">SM</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">L</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">M</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">XL</button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="text-sm">XXL</button>
                                                        </li>
                                                    </ul>
                                                    <ul class="flex flex-wrap items-center justify-center">
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-orange-500"
                                                                    aria-label="colors"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-primary"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-indigo-600"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                        <li class="mx-1 leading-none">
                                                            <button class="w-4 h-4 rounded-full bg-dark"
                                                                    aria-label="variants"></button>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- variants end -->


                                                <!-- countdown start -->

                                                <div
                                                    class="absolute w-full bottom-0 group-hover:opacity-0 group-hover:invisible transition-all">
                                                    <div
                                                        class="countdown bg-dark item-1 flex flex-wrap justify-evenly p-2"
                                                        data-countdown="2022/11/20" data-format="short">
                                                        <div
                                                            class="countdown__item flex flex-wrap items-baseline flex-col">
                                                            <span
                                                                class="countdown__time mr-1 text-base text-white font-500 daysLeft"></span>
                                                            <span
                                                                class="countdown__text capitalize text-sm text-white font-light daysText"></span>
                                                        </div>
                                                        <div
                                                            class="countdown__item flex flex-wrap items-baseline flex-col">
                                                            <span
                                                                class="countdown__time mr-1 text-base text-white font-500 hoursLeft"></span>
                                                            <span
                                                                class="countdown__text capitalize text-sm text-white font-light hoursText"></span>
                                                        </div>
                                                        <div
                                                            class="countdown__item flex flex-wrap items-baseline flex-col">
                                                            <span
                                                                class="countdown__time mr-1 text-base text-white font-500 minsLeft"></span>
                                                            <span
                                                                class="countdown__text capitalize text-sm text-white font-light minsText"></span>
                                                        </div>
                                                        <div
                                                            class="countdown__item flex flex-wrap items-baseline flex-col">
                                                            <span
                                                                class="countdown__time mr-1 text-base text-white font-500 secsLeft"></span>
                                                            <span
                                                                class="countdown__text capitalize text-sm text-white font-light secsText"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- countdown end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all"
                                                       href="#">Catin uofessor eampden</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3">
                                                    <del class="font-normal text-sm mr-1 inline-block">$110.00</del>
                                                    $130.00
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->


                                </div>
                            </div>

                            <!-- Add Pagination -->

                            <!-- <div class="swiper-pagination"></div> -->

                            <!-- swiper navigation -->

                            <div class="swiper-buttons">
                                <div
                                    class="swiper-button-prev right-auto left-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange"></div>
                                <div
                                    class="swiper-button-next left-auto right-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange"></div>
                            </div>
                        </div>
                    </section>


                </div>
            </div>

        </div>
    </section>
    <!-- Product section end -->

    @include('user.homepage.newsLetter')
</x-user.layouts.app>
