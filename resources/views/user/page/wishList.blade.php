<x-user.layouts.app>
    {{ Breadcrumbs::render('wishList') }}
    <div class="search-form fixed top-0 left-0 w-full bg-black opacity-95 min-h-screen items-center justify-center py-8 px-10 transform  transition-transform translate-x-full ease-in-out duration-500 hidden lg:flex z-50">
        <button class="search-close absolute left-1/2 text-white text-xl top-12 translate-y-1/2" aria-label="close icon"><span class="icon-close"></span></button>
        <form class="relative xl:w-1/3 lg:w-1/2" action="#" method="get">
            <input class="text-md font-normal border-b border-solid border-gray-600 bg-transparent h-14 w-full focus:outline-none pr-14 text-white" type="search" name="search" placeholder="Search our store" />
            <button class="absolute right-0 top-3 text-white text-md font-normal" type="submit" aria-label="submit button"><i class="icon-magnifier"></i></button>
        </form>
    </div>
    <!-- offcanvas-overlay start -->
    <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
    <!-- offcanvas-overlay end -->
    <!-- offcanvas-mobile-menu start -->
    <div id="offcanvas-mobile-menu" class="offcanvas left-auto right-0  transform translate-x-translate-x-full-120 fixed font-normal text-sm top-0 z-50 h-screen w-72 sm:w-80 lg:w-96 transition-all ease-in-out duration-300 bg-white">

        <div class="px-8 py-12 h-5/6 overflow-y-auto">

            <!-- search form start -->

            <form class="pb-10 mb-10 border-b border-solid border-gray-600" action="#" method="get">
                <div class="relative">
                    <input class="w-full h-12 text-sm py-4 pl-4 pr-16 bg-gray-light text-dark placeholder-current focus:outline-none" type="search" name="search" placeholder="Search our store">
                    <button class="w-12 h-full absolute top-0 right-0 flex items-center justify-center text-dark text-md border-l border-solid border-gray-600" type="submit" aria-label="button"><i class="icon-magnifier"></i></button>
                </div>
            </form>

            <!-- search form end -->

            <!-- close button start -->
            <button class="offcanvas-close bg-dark group transition-all hover:text-orange text-white w-10 h-10 flex items-center justify-center absolute -left-10 top-0" aria-label="offcanvas"><i class="icon-close transition-all transform group-hover:rotate-90"></i></button>
            <!-- close button end -->

            <!-- offcanvas-menu start -->


            <nav class="offcanvas-menu pb-10 mb-10 border-b border-solid border-gray-600">
                <ul>
                    <li class="relative block">
                        <a href="#" class="block capitalize font-normal text-base my-2 py-1 font-roboto">Home</a>
                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                            <li><a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="index.html">Airpod</a></li>
                            <li><a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="index-2.html">Smartwatch</a></li>
                            <li><a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="index-3.html">Drone</a></li>
                            <li><a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="index-4.html">BackPack</a></li>
                        </ul>
                    </li>
                    <li class="relative block">
                        <a href="#" class="block capitalize font-normal text-base my-2 py-1 font-roboto">Shop</a>
                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                            <li>
                                <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="#">Shop Grid</a>
                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="shop-grid-3-column.html">Shop Grid 3 Column</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="shop-grid-4-column.html">Shop Grid 4 Column</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="shop-grid-right-sidebar.html">shop Grid Right Sidebar</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="#">shop list</a>
                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                    <li><a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="shop-list.html">Shop List</a></li>
                                    <li><a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="shop-list-right-sidebar.html">Shop List right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="#">blogs</a>
                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                    <li><a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                                    <li><a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                                    <li><a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>

                                </ul>
                            </li>
                            <li>
                                <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="#">Product Types</a>
                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                    <li><a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="single-product.html">Shop Single</a></li>
                                    <li><a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="single-product-configurable.html">Shop Variable</a></li>
                                    <li><a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="single-product-affiliate.html">Shop Affiliate</a></li>
                                    <li><a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="single-product-group.html">Shop Group</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="relative block">
                        <a href="#" class="block capitalize font-normal text-base my-2 py-1 font-roboto">Blog</a>
                        <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                            <li>
                                <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="#">Blog Grid</a>
                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-grid-3-column.html">Blog Grid 3 column</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-grid-2-column.html">Blog Grid 2 column</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="text-sm py-2 px-4 text-dark font-light block font-roboto transition-all hover:text-orange" href="#">Blog List</a>
                                <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100">
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-list-right-sidebar.html">Blog List Right Sidebar</a>
                                    </li>
                                    <li>
                                        <a class="text-sm pt-3 px-10 pb-1 text-dark font-light block font-roboto transition-all hover:text-orange" href="blog-details.html">Blog details</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="relative block"><a href="about-us.html" class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">about Us</a></li>
                    <li class="relative block"><a href="contact.html" class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Contact Us</a></li>
                </ul>
            </nav>
            <!-- offcanvas-menu end -->


            <nav>
                <ul id="settings-menu">
                    <li class="block mb-3">
                        <a class="flex flex-wrap justify-between mb-3 text-base text-dark hover:text-orange" href="javascript:void(0)">Currency <i class="icon-arrow-down"></i></a>
                        <ul class="sub-category hidden py-5 px-6 shadow">
                            <li class="my-2 block"><a class="font-light text-sm tracking-wide text-dark block hover:text-orange" href="#">EUR €</a></li>
                            <li class="my-2 block"><a class="font-light text-sm tracking-wide text-dark block hover:text-orange" href="#">USD $</a></li>
                        </ul>
                    </li>
                    <li class="block mb-3">
                        <a class="flex flex-wrap justify-between mb-3 text-base text-dark hover:text-orange" href="javascript:void(0)">Account <i class="icon-arrow-down"></i></a>
                        <ul class="sub-category hidden py-5 px-6 shadow">
                            <li class="my-2 block"><a class="font-light text-sm tracking-wide text-dark block hover:text-orange" href="#">English</a></li>
                            <li class="my-2 block"><a class="font-light text-sm tracking-wide text-dark block hover:text-orange" href="#">Français</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    <!-- offcanvas-mobile-menu end -->


    <!-- offcanvas-mobile-menu start -->
    <div id="offcanvas-cart" class="offcanvas left-auto right-0  transform translate-x-translate-x-full-120 fixed font-normal text-sm top-0 z-50 h-screen w-80 lg:w-96 transition-all ease-in-out duration-300 bg-white overflow-y-auto">
        <div class="p-8">
            <div class="flex flex-wrap justify-between items-center pb-6 mb-6 border-b border-solid border-gray-600">
                <h4 class="font-normal text-md text-dark capitalize">Shoping Cart</h4>
                <button class="offcanvas-close hover:text-orange" aria-label="close icon"><i class="icon-close"></i></button>
            </div>
            <ul class="h-96 overflow-y-auto">
                <li class="flex flex-wrap group mb-8">
                    <div class="mr-5 relative">
                        <a href="#"><img src="assets/images/cart/product1.webp" alt="product image" loading="lazy" width="90" height="100" /></a>
                        <button class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-orange"><i class="icon-close"></i></button>
                    </div>
                    <div class="flex-1">
                        <h4>
                            <a class="font-light text-sm md:text-base text-dark hover:text-orange transition-all tracking-wide" href="#">Birpod product unsde - m / gold</a>
                        </h4>
                        <span class="font-light text-sm text-dark transition-all tracking-wide">1 x <span>$80.00</span></span>
                    </div>
                </li>
                <li class="flex flex-wrap group mb-8">
                    <div class="mr-5 relative">
                        <a href="https://template.hasthemes.com/#"><img src="assets/images/cart/product2.webp" alt="product image" loading="lazy" width="90" height="100" /></a>
                        <button class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-orange"><i class="icon-close"></i></button>
                    </div>
                    <div class="flex-1">
                        <h4>
                            <a class="font-light text-sm md:text-base text-dark hover:text-orange transition-all tracking-wide" href="https://template.hasthemes.com/#">Airpod product kiebd - red</a>
                        </h4>
                        <span class="font-light text-sm text-dark transition-all tracking-wide">1 x <span>$99.00</span></span>
                    </div>
                </li>
                <li class="flex flex-wrap group mb-8">
                    <div class="mr-5 relative">
                        <a href="#"><img src="assets/images/cart/product3.webp" alt="product image" loading="lazy" width="90" height="100" /></a>
                        <button class="absolute top-3 left-3 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all hover:text-orange"><i class="icon-close"></i></button>
                    </div>
                    <div class="flex-1">
                        <h4>
                            <a class="font-light text-sm md:text-base text-dark hover:text-orange transition-all tracking-wide" href="#">Airpod product ides - navy</a>
                        </h4>
                        <span class="font-light text-sm text-dark transition-all tracking-wide">1 x <span>$39.00</span></span>
                    </div>
                </li>
            </ul>
            <div>
                <div class="flex flex-wrap justify-between items-center py-4 my-6 border-t border-b border-solid border-gray-600 font-normal text-base text-dark capitalize">Total:<span>$218.00</span>
                </div>
                <div class="text-center">
                    <a class="py-5 px-10 block bg-white border border-solid border-gray-600 uppercase font-semibold text-base hover:bg-orange hover:border-orange hover:text-white transition-all leading-none" href="checkout.html">Checkout</a><a class="py-5 px-10 block bg-white border border-solid border-gray-600 uppercase font-semibold text-base hover:bg-orange hover:border-orange hover:text-white transition-all leading-none mt-3" href="cart.html">View Cart</a>
                </div>
            </div>

        </div>

    </div>
    <!-- offcanvas-mobile-menu end -->


    <!-- Header end -->


 


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


    <!-- Footer section start -->
    <footer>

        <!-- News Letter section start -->
        <div class="news-letter-section bg-gray-100 pt-24 pb-24">
            <div class="container">
                <div class="max-w-[600px] mx-auto">
                    <div class="text-center">
                        <a href="#" class="inline-block mb-11">
                            <img src="assets/images/logo/logo.webp" alt="brand logo" loading="lazy" width="125" height="45" />
                        </a>

                        <p class="mb-10">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.aliqua. Ut enim ad
                            minim. Lorem ipsum dolor sit amet.
                        </p>

                        <form id="mc-form" class="relative text-center md:max-w-xl mx-auto mb-10">
                            <input id="mc-email" type="email" name="email" placeholder="email@example.com" class="border border-solid border-primary w-full h-14 sm:h-16 rounded-full bg-transparent placeholder-primary placeholder-opacity-50 text-sm sm:text-base focus:outline-none py-1 pl-8 pr-14 sm:pr-36" />
                            <button id="mc-submit" type="submit" class="bg-dark transition-all hover:bg-orange hover:text-white px-10 sm:px-3 py-5 sm:py-1 rounded-l-full sm:rounded-l-none rounded-r-full text-white capitalize font-medium text-sm lg:text-md sm:absolute sm:top-0 sm:right-0 sm:h-full mt-3 sm:mt-0 leading-none w-full sm:w-auto">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-green-400"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-red-600"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                    <div class="flex flex-wrap items-center justify-center">
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-facebook"></i></a>
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-twitter"></i></a>
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-instagram"></i></a>
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-youtube"></i></a>
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-dribbble"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- News Letter section end -->

        <!-- Footer Bottom Section start -->
        <div class="footer-bottom-section py-8 bg-gray-500">
            <div class="container">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex order-last md:order-first flex-wrap items-center justify-center md:justify-start">
                        <p class="text-white flex flex-wrap items-center text-sm lg:text-base">&copy; 2022 Sinp. Made with <i class="icon-heart mx-2 text-orange"></i> by<a href="#" class="ml-1 transition hover:text-orange">Codecarnival</a>.</p>
                    </div>

                    <div class="flex flex-wrap items-center justify-center md:justify-end">
                        <a href="#">
                            <img class="w-full h-full" src="assets/images/logo/payment.webp" alt="payment logo" loading="lazy" width="286" height="23" />
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Footer Bottom Section end -->

    </footer>
    <!-- Footer section end -->

    <a id="scrollUp" class="w-12 h-12 rounded-full bg-orange text-white fixed right-5 bottom-16 flex flex-wrap items-center justify-center transition-all duration-300 z-10" href="#" aria-label="scroll up"><i class="icon-arrow-up"></i></a>

    <!-- Modals -->
    <!-- modal-overlay start -->
    <div class="modal-overlay hidden fixed inset-0 bg-black opacity-50 z-10"></div>
    <!-- modal-overlay end -->
    <!-- modal-mobile-menu start -->
    <div id="modal-cart" class="modal fixed opacity-0 transition-opacity duration-300 ease-linear md:w-11/12 md:max-w-1000 hidden z-40 left-8 right-8 md:left-1/2 top-1/2 transform -translate-y-1/2 md:-translate-x-1/2 p-7 bg-white">



        <div class="grid md:grid-cols-2 gap-4">
            <div class="w-full">
                <img class="w-full h-full" src="assets/images/products/lg/product1.webp" alt="product image" loading="lazy" width="432" height="480">
            </div>
            <div>
                <button class="text-black text-lg absolute top-7 right-7 modal-close"><i class="icon-close"></i></button>

                <h3 class="text-dark font-medium text-md lg:text-lg leading-none mb-4">Airpod product kiebd</h3>
                <h5 class="font-bold text-md leading-none text-orange mb-8">
                    $130.00
                    <del class="font-normal text-base mr-1 inline-block">$110.00</del>
                </h5>

                <p class="mb-5 text-sm">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,</p>

                <select class="w-full h-12 border border-solid border-gray-300  px-5 py-2 appearance-none" style="background: rgba(0,0,0,0) url('assets/images/icon/qcv-arrow-down.webp') no-repeat scroll right 20px center;">
                    <option value="red">red</option>
                    <option value="green">green</option>
                    <option value="blue">blue</option>
                </select>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                        <input type="number" min="1" max="100" step="1" value="1" class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                    </div>
                    <div class="ml-2 sm:ml-8">
                        <button class="bg-black leading-none py-4 px-5 md:px-8 font-normal text-sm h-11 text-white transition-all hover:bg-orange">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- modal-mobile-menu end -->


    <!-- modal-overlay start -->
    <div class="modal-overlay hidden fixed inset-0 bg-black opacity-50 z-30"></div>
    <!-- modal-overlay end -->
    <!-- modal-mobile-menu start -->
    <div id="modal-addto-cart" class="modal fixed opacity-0 transition-opacity duration-300 ease-linear md:w-11/12 md:max-w-1000 hidden z-50 left-8 right-8 md:left-1/2 top-1/2 transform -translate-y-1/2 md:-translate-x-1/2 p-7 bg-white mx-auto">


        <div class="md:flex md:flex-wrap">
            <div class="md:mr-5 md:flex-30 mb-5 md:mb-0">
                <img class="w-full" src="assets/images/products/lg/product1.webp" alt="product image" loading="lazy" width="432" height="480">
            </div>
            <div class="md:flex-auto">
                <button class="text-black text-lg absolute top-7 right-7 modal-close"><i class="icon-close"></i></button>
                <h3 class="text-dark font-medium text-md sm:text-lg mb-4">Airpod product kiebd</h3>
                <p class="text-dark text-sm flex flex-wrap items-center"><i class="icon-check text-lg mr-5"></i> Added to cart successfully!</p>
                <div class="mt-8">
                    <a href="#" class="bg-black leading-none py-2 px-5 font-normal text-sm text-white transition-all hover:bg-orange mr-5">View Cart</a>
                    <a href="#" class="bg-black leading-none py-2 px-5 font-normal text-sm text-white transition-all hover:bg-orange">Checkout</a>
                </div>
            </div>
        </div>

    </div>
    <!-- modal-mobile-menu end -->



    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/tippy-bundle.umd.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>
    <!-- team carousel end -->
    @include('user.homepage.newsLetter')
</x-user.layouts.app>