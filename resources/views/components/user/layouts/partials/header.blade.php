<header id="sticky-header">
    <!-- Banner -->
    <x-user.layouts.partials.banner />
    <!-- End Banner -->
    <div class="px-4 md:px-8 2xl:px-24 lg:py-0">
        <div class="flex items-center lg:relative">
            <div class="w-6/12 lg:w-2/12">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ Storage::url(option('site_logo')) }}" alt="logo" loading="lazy"
                                                   width="125" height="45"/>
                    </a>
                </div>
            </div>
            <div class="hidden lg:flex flex-1 xl:relative">
                <nav class="main-menu">
                    <ul class="flex flex-wrap">
                        <li class="main-menu__item relative group">
                            <a class="block py-10 xl:pr-6 md:pr-5 capitalize font-normal tehover:text-secondary hover:text-secondary transition-all"
                               href="{{ route('index') }}">Home</a>
                        </li>

                        <li class="main-menu__item group">
                            <a class="block py-10 xl:px-6 md:px-5 capitalize font-normal tehover:text-secondary hover:text-secondary transition-all"
                               href="#">Shop</a>
                            <ul class="mega-menu flex flex-wrap bg-white py-5 px-8 shadow transition-all absolute left-0 top-full opacity-0 group-hover:opacity-100 invisible group-hover:visible group-hover:-translate-y-3 transform z-10">
                                <li class="flex-auto px-4">
                                    <a class="font-normal text-base capitalize text-dark pb-5 border-b block border-solid border-gray-600 mb-6 tracking-wide transition-all hover:text-secondary"
                                       href="#">Shop Grid </a>
                                    <ul class="pb-2">
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="shop-grid-3-column.html">Shop Grid 3 Column</a></li>
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="shop-grid-4-column.html">Shop Grid 4 Column</a></li>
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="shop-grid-right-sidebar.html">shop Grid Right Sidebar</a></li>
                                    </ul>
                                </li>

                                <li class="flex-auto px-4">
                                    <a class="font-normal text-base capitalize text-dark pb-5 border-b block border-solid border-gray-600 mb-6 tracking-wide transition-all hover:text-secondary"
                                       href="shop-list.html">shop list</a>
                                    <ul class="pb-2">
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="shop-list.html">Shop List</a></li>
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    </ul>
                                </li>

                                <li class="flex-auto px-4">
                                    <a class="font-normal text-base capitalize text-dark pb-5 border-b block border-solid border-gray-600 mb-6 tracking-wide transition-all hover:text-secondary"
                                       href="#">Product Types</a>
                                    <ul class="pb-2">
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="single-product.html">Shop Single</a></li>
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="single-product-configurable.html">Shop Variable</a></li>
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="single-product-affiliate.html">Shop Affiliate</a></li>
                                        <li class="my-3"><a
                                                class="font-normal text-base capitalize text-dark tracking-wide block hover:text-secondary transition-all"
                                                href="single-product-group.html">Shop Group</a></li>
                                    </ul>
                                </li>
                                <li class="overflow-hidden flex-auto mx-4"><a href="#"><img
                                            class="transform hover:scale-105 transition-all w-full"
                                            src="assets/images/mega-menu/megamenu.webp" alt="Smartwatch" loading="lazy"
                                            width="1000" height="120"/></a></li>
                            </ul>
                        </li>
                        <li class="main-menu__item relative group"><a
                                class="block py-10 xl:px-6 md:px-5 capitalize font-normal tehover:text-secondary hover:text-secondary transition-all"
                                href="#">Blog</a>

                            <ul class="submenu bg-white py-3 px-8 shadow transition-all absolute left-0 top-full opacity-0 group-hover:opacity-100 invisible group-hover:visible group-hover:-translate-y-3 transform z-10 min-w-max">
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="blog-list.html">Blog list</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="blog-list-right-sidebar.html"> Blog List Right Sideba</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="blog-details.html"> Blog details</a></li>
                            </ul>

                        </li>
                        <li class="main-menu__item relative group"><a
                                class="block py-10 xl:px-6 md:px-5 capitalize font-normal tehover:text-secondary hover:text-secondary transition-all"
                                href="#">pages</a>
                            <ul class="submenu bg-white py-3 px-8 shadow transition-all absolute left-0 top-full opacity-0 group-hover:opacity-100 invisible group-hover:visible group-hover:-translate-y-3 transform z-10 min-w-max">
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="{{ route('about-us') }}">About Page</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="{{ route('cart') }}">Cart Page</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="{{ route('check-out') }}">Checkout Page</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="compare.html">Compare Page</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="login-register.html">Login & Register Page</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="{{ route('account') }}">Account Page</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="{{ route('wish-list') }}">Wishlist Page</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="{{ route('frequently-asked-questions') }}">Frequently Questions</a></li>
                                <li class="my-3"><a
                                        class="text-dark font-normal text-base capitalize transition-all hover:text-secondary"
                                        href="404.html">Error 404</a></li>
                            </ul>
                        </li>
                        <li class="main-menu__item"><a
                                class="block py-10 xl:px-6 md:px-5 capitalize font-normal tehover:text-secondary hover:text-secondary transition-all"
                                href="{{ route('contact-us') }}">Contact</a></li>
                    </ul>
                </nav>

            </div>

            <div class="w-6/12 lg:w-3/12">
                <ul class="flex items-center justify-end">
                    <li class="ml-6 hidden lg:block">
                        <button class="search-toggle text-hover:text-secondary text-md hover:text-secondary transition-all"
                                aria-label="icon-settings">
                            <i class="icon-magnifier"></i>
                        </button>
                    </li>
                    <li class="ml-6">
                        <a href="#offcanvas-cart"
                           class="text-primary text-md hover:text-secondary transition-all relative offcanvas-toggle">
                            <span
                                class="w-5 h-5 bg-dark text-white text-sm rounded-full font-normal flex flex-wrap items-center justify-center absolute -top-3 left-2 leading-none">4</span>
                            <i class="icon-bag"></i>
                            <span class="text-base leading-none text-dark">245 000 VNĐ</span>
                        </a>

                    </li>
                    <li id="toggle-menu" class="ml-6 hidden lg:block relative">
                        <button class="text-primary text-md hover:text-secondary transition-all toggle-menu"
                                aria-label="icon-settings">
                            <i class="icon-settings"></i>
                        </button>
                        <div id="settings-card"
                             class="bg-white absolute right-0 px-8 py-5 shadow w-80 opacity-0 invisible transition-all duration-300 ease-in-out z-20">
                            <h4 class="text-md text-dark font-normal capitalize tracking-wide pb-5 border-b border-solid border-gray-600 mb-5">
                                {{ __('Account') }}</h4>
                            <ul>
                                @if(auth()->check())
                                <li class="my-4">
                                    <a href="{{ route('account') }}"
                                                    class="text-base text-dark hover:text-secondary transition-all font-light capitalize tracking-wide">
                                        {{ auth()->user()->name }}
                                    </a>
                                </li>
                                <li class="my-4">
                                    <a href="{{ route('logout') }}"
                                                    class="text-base text-dark hover:text-secondary transition-all font-light capitalize tracking-wide">
                                        {{ __('Log out') }}
                                    </a>
                                </li>
                                @else
                                    <li class="my-4">
                                        <a href="{{ route('login-register') }}"
                                           class="text-base text-dark hover:text-secondary transition-all font-light capitalize tracking-wide">
                                            {{ __('Login Or Register') }}
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>


                    </li>
                    <li class="ml-6 lg:hidden">
                        <a href="#offcanvas-mobile-menu"
                           class="offcanvas-toggle text-primary text-md hover:text-secondary transition-all"><i
                                class="icon-menu"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div
    class="search-form fixed top-0 left-0 w-full bg-black opacity-95 min-h-screen items-center justify-center py-8 px-10 transform  transition-transform translate-x-full ease-in-out duration-500 hidden lg:flex z-50">
    <button class="search-close absolute left-1/2 text-white text-xl top-12 translate-y-1/2" aria-label="close icon">
        <span class="icon-close"></span></button>
    <form class="relative xl:w-1/3 lg:w-1/2" action="#" method="get">
        <input
            class="text-md font-normal border-b border-solid border-gray-600 bg-transparent h-14 w-full focus:outline-none pr-14 text-white"
            type="search" name="search" placeholder="Search our store"/>
        <button class="absolute right-0 top-3 text-white text-md font-normal" type="submit" aria-label="submit button">
            <i class="icon-magnifier"></i></button>
    </form>
</div>
<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu"
     class="offcanvas left-auto right-0  transform translate-x-translate-x-full-120 fixed font-normal text-sm top-0 z-50 h-screen w-72 sm:w-80 lg:w-96 transition-all ease-in-out duration-300 bg-white">

    <div class="px-8 py-12">

        <!-- search form start -->

        <form class="pb-10 mb-10 border-b border-solid border-gray-600" action="#" method="get">
            <div class="relative">
                <input
                    class="w-full h-12 text-sm py-4 pl-4 pr-16 bg-gray-light text-dark placeholder-current focus:outline-none"
                    type="search" name="search" placeholder="Search our store">
                <button
                    class="w-12 h-full absolute top-0 right-0 flex items-center justify-center text-dark text-md border-l border-solid border-gray-600"
                    type="submit" aria-label="button"><i class="icon-magnifier"></i></button>
            </div>
        </form>

        <!-- search form end -->

        <!-- close button start -->
        <button
            class="offcanvas-close group transition-all hover:text-secondary text-dark w-10 h-10 flex items-center justify-center absolute top-2 right-0 text-base"
            aria-label="offcanvas"><i class="icon-close transition-all transform group-hover:rotate-90"></i></button>
        <!-- close button end -->

        <!-- offcanvas-menu start -->


        <nav class="offcanvas-menu pb-10 mb-10 border-b border-solid border-gray-600">
            <ul>
                <li class="relative block">
                    <a href="{{ route('index') }}" class="block capitalize font-normal text-base my-2 py-1 font-roboto">Home</a>
                </li>
                <li class="relative block">
                    <a href="#" class="block capitalize font-normal text-base my-2 py-1 font-roboto">Shop</a>
                    <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                        <li>
                            <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                               href="#">Shop Grid</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="shop-grid-3-column.html">Shop Grid 3 Column</a>
                                </li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="shop-grid-4-column.html">Shop Grid 4 Column</a>
                                </li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a>
                                </li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="shop-grid-right-sidebar.html">shop Grid Right Sidebar</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                               href="#">shop list</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="shop-list.html">Shop List</a></li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="shop-list-right-sidebar.html">Shop List right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                               href="#">blogs</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                               href="#">Product Types</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                <li>
                                    <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="single-product.html">Shop Single</a></li>
                                <li>
                                    <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="single-product-configurable.html">Shop Variable</a></li>
                                <li>
                                    <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="single-product-affiliate.html">Shop Affiliate</a></li>
                                <li>
                                    <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="single-product-group.html">Shop Group</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="relative block">
                    <a href="#" class="block capitalize font-normal text-base my-2 py-1 font-roboto">Blog</a>
                    <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                        <li>
                            <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                               href="#">Blog Grid</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-grid-3-column.html">Blog Grid 3 column</a>
                                </li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-grid-2-column.html">Blog Grid 2 column</a>
                                </li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                </li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-secondary"
                               href="#">Blog List</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                </li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-list-right-sidebar.html">Blog List Right Sidebar</a>
                                </li>
                                <li>
                                    <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-secondary"
                                       href="blog-details.html">Blog details</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="relative block"><a href="about-us.html"
                                              class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">about
                        Us</a></li>
                <li class="relative block"><a href="contact.html"
                                              class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Contact
                        Us</a></li>
            </ul>
        </nav>
        <!-- offcanvas-menu end -->


        <nav>
            <ul id="settings-menu">
                <li class="block mb-3">
                    <a class="flex flex-wrap justify-between mb-3 text-base text-dark hover:text-secondary"
                       href="javascript:void(0)">{{ __('Account') }}<i class="icon-arrow-down"></i></a>
                    <ul class="sub-category hidden py-5 px-6 ">
                        @if(auth()->check())
                            <li class="my-2 block"><a
                                    class="font-light text-sm tracking-wide text-dark block hover:text-secondary" href="{{ route('account') }}">{{ auth()->user()->name }}</a>
                            </li>
                            <li class="my-2 block">
                                <a class="font-light text-sm tracking-wide text-dark block hover:text-secondary" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                            </li>
                        @else
                            <li class="my-2 block"><a
                                    class="font-light text-sm tracking-wide text-dark block hover:text-secondary" href="{{ route('login-register') }}">{{ __('Login - Register') }}</a>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
</div>
<!-- offcanvas-mobile-menu end -->


<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-cart"
     class="offcanvas left-auto right-0  transform translate-x-translate-x-full-120 fixed font-normal text-sm top-0 z-50 h-screen w-80 lg:w-96 transition-all ease-in-out duration-300 bg-white overflow-y-auto">
    <div class="p-8">
        <div class="flex flex-wrap justify-between items-center pb-6 mb-6 border-b border-solid border-gray-600">
            <h4 class="font-bold text-base text-dark capitalize">Shoping Cart</h4>
            <button class="offcanvas-close hover:text-secondary" aria-label="close icon"><i class="icon-close"></i>
            </button>
        </div>
        <ul class="h-96 overflow-y-auto">
            <li class="flex flex-wrap group mb-8">
                <div class="mr-5 relative">
                    <a href="#"><img src="assets/images/cart/product1.webp" alt="product image" loading="lazy"
                                     width="90" height="100"/></a>
                    <button
                        class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-secondary">
                        <i class="icon-close"></i></button>
                </div>
                <div class="flex-1">
                    <h4>
                        <a class="font-light text-sm md:text-base text-dark hover:text-secondary transition-all tracking-wide"
                           href="#">Birpod product unsde - m / gold</a>
                    </h4>
                    <span
                        class="font-light text-sm text-dark transition-all tracking-wide">1 x <span>80.000 VNĐ</span></span>
                </div>
            </li>
            <li class="flex flex-wrap group mb-8">
                <div class="mr-5 relative">
                    <a href="https://template.hasthemes.com/#"><img src="assets/images/cart/product2.webp"
                                                                    alt="product image" loading="lazy" width="90"
                                                                    height="100"/></a>
                    <button
                        class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-secondary">
                        <i class="icon-close"></i></button>
                </div>
                <div class="flex-1">
                    <h4>
                        <a class="font-light text-sm md:text-base text-dark hover:text-secondary transition-all tracking-wide"
                           href="https://template.hasthemes.com/#">Airpod product kiebd - red</a>
                    </h4>
                    <span
                        class="font-light text-sm text-dark transition-all tracking-wide">1 x <span>99.000 VNĐ</span></span>
                </div>
            </li>
            <li class="flex flex-wrap group mb-8">
                <div class="mr-5 relative">
                    <a href="#"><img src="assets/images/cart/product3.webp" alt="product image" loading="lazy"
                                     width="90" height="100"/></a>
                    <button
                        class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-secondary">
                        <i class="icon-close"></i></button>
                </div>
                <div class="flex-1">
                    <h4>
                        <a class="font-light text-sm md:text-base text-dark hover:text-secondary transition-all tracking-wide"
                           href="#">Airpod product ides - navy</a>
                    </h4>
                    <span
                        class="font-light text-sm text-dark transition-all tracking-wide">1 x <span>39.000 VNĐ</span></span>
                </div>
            </li>
        </ul>
        <div>
            <div
                class="flex flex-wrap justify-between items-center py-4 my-6 border-t border-b border-solid border-gray-600 font-normal text-base text-dark capitalize">
                Total:<span>218.000 VNĐ</span>
            </div>
            <div class="text-center">
                <a class="py-5 px-10 block bg-white border border-solid border-gray-600 uppercase font-semibold text-base hover:bg-secondary hover:border-secondary hover:text-white transition-all leading-none"
                   href="checkout.html">Checkout</a>
                <a
                    class="py-5 px-10 block bg-white border border-solid border-gray-600 uppercase font-semibold text-base hover:bg-secondary hover:border-secondary hover:text-white transition-all leading-none mt-3"
                    href="cart.html">View Cart</a>
            </div>
        </div>

    </div>

</div>
<!-- offcanvas-mobile-menu end -->
<!-- Header end -->
