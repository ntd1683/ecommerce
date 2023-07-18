<x-user.layouts.app>
    {{ Breadcrumbs::render('shopGridLeftSideBar') }}

    <!-- blog grid section start -->

    <div class="py-24">
        <div class="container">
            <div class="flex flex-wrap flex-col lg:flex-row -mx-4">
                <div class="lg:w-1/4 px-4 order-last lg:order-first mt-8 lg:mt-0">
                    <div>
                        <div class="mb-12">
                            <h4 class="font-medium text-xl lg:text-2xl text-dark capitalize mb-10">Search</h4>
                            <div class="pro-sidebar-search mb-50 mt-25">
                                <form class="border border-solid border-gray-300" action="#" method="get">
                                    <div class="relative">
                                        <input
                                            class="w-full h-12 text-sm py-4 pl-4 pr-16 bg-white text-dark placeholder-current focus:outline-none"
                                            type="search" name="search" placeholder="Search our store">
                                        <button
                                            class="w-12 h-full absolute top-0 right-0 flex items-center justify-center text-dark text-md border-l border-solid border-gray-300"
                                            type="submit"><i class="icon-magnifier"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="mb-12">
                            <h4 class="font-medium text-xl lg:text-2xl text-dark capitalize mb-5">Categories</h4>
                            <ul class="text-sm lg:text-lg leading-loose">
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-1" type="checkbox">
                                    <label for="checkbox-1"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Backpack </label>
                                    <a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-sm hover:text-white
        hover:bg-orange transition-all">9</a>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-2" type="checkbox">
                                    <label for="checkbox-2"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Headphone </label>
                                    <a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-sm hover:text-white
        hover:bg-orange transition-all">8</a>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-3" type="checkbox">
                                    <label for="checkbox-3"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Drone </label>
                                    <a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-sm hover:text-white
        hover:bg-orange transition-all">7</a>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-4" type="checkbox">
                                    <label for="checkbox-4"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Fourth
                                        option</label>
                                    <a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-sm hover:text-white
        hover:bg-orange transition-all">7</a>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-5" type="checkbox">
                                    <label for="checkbox-5"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Smartwatch </label>
                                    <a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-sm hover:text-white
        hover:bg-orange transition-all">7</a>
                                </li>
                            </ul>
                        </div>

                        <div class="mb-12">
                            <h4 class="font-medium text-xl lg:text-2xl text-dark capitalize mb-8">Vendors</h4>

                            <ul class="text-sm lg:text-lg leading-loose">
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-11" type="checkbox">
                                    <label for="checkbox-11"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">
                                        Vendor 1 </label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-21" type="checkbox">
                                    <label for="checkbox-21"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">
                                        Vendor 10 </label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-31" type="checkbox">
                                    <label for="checkbox-31"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">
                                        Vendor 11 </label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-41" type="checkbox">
                                    <label for="checkbox-41"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Vendor
                                        12</label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-51" type="checkbox">
                                    <label for="checkbox-51"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Vendor
                                        2 </label>
                                </li>
                            </ul>
                        </div>

                        <div class="mb-12">
                            <h4 class="font-medium text-xl lg:text-2xl text-dark capitalize mb-10">Color</h4>
                            <ul class="text-sm lg:text-lg leading-loose">
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-12" type="checkbox">
                                    <label for="checkbox-12"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Red </label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-22" type="checkbox">
                                    <label for="checkbox-22"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Green </label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-32" type="checkbox">
                                    <label for="checkbox-32"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Blue </label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-42" type="checkbox">
                                    <label for="checkbox-42"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">Yellow</label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-52" type="checkbox">
                                    <label for="checkbox-52"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">White </label>
                                </li>
                            </ul>
                        </div>

                        <div class="mb-12">
                            <h4 class="font-medium text-xl lg:text-2xl text-dark capitalize mb-10">Size</h4>

                            <ul class="text-sm lg:text-lg leading-loose">
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-13" type="checkbox">
                                    <label for="checkbox-13"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">S</label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-23" type="checkbox">
                                    <label for="checkbox-23"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">M</label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-33" type="checkbox">
                                    <label for="checkbox-33"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">L</label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-43" type="checkbox">
                                    <label for="checkbox-43"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">XL</label>
                                </li>
                                <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                    <input class="checkbox opacity-0 absolute" id="checkbox-53" type="checkbox">
                                    <label for="checkbox-53"
                                           class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">XXL</label>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-medium text-xl lg:text-2xl text-dark capitalize mb-10">Tags</h4>

                            <ul class="flex flex-wrap -m-1 text-lg lg:text-lg leading-loose ">
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Black</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Blue</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Fiber</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Gold</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Gray</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Green</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">L</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Leather</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">M</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Magenta</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Maroon</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Metal</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Navy</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Orange</a>
                                </li>
                                <li class="m-1"><a href="#"
                                                   class="bg-gray-light leading-none py-3 px-5 block text-sm transition-all hover:text-white hover:bg-orange">Pink</a>
                                </li>
                            </ul>


                        </div>
                    </div>

                </div>

                <div id="shoptab" class="flex-1">
                    <div class="flex flex-wrap justify-between items-center px-4 text-lg lg:text-lg leading-loose ">
                        <div class="flex flex-wrap ">
                            <div class="shop-select flex mr-12">
                                <label for="SortBy">Sort by :</label>
                                <select id="SortBy" class="px-2 bg-transparent text-lg lg:text-lg leading-loose ">
                                    <option value="manual">Featured</option>
                                    <option value="best-selling">Best Selling</option>
                                    <option value="title-ascending">Alphabetically, A-Z</option>
                                    <option value="title-descending">Alphabetically, Z-A</option>
                                    <option value="price-ascending">Price, low to high</option>
                                    <option value="price-descending">Price, high to low</option>
                                    <option value="created-descending">Date, new to old</option>
                                    <option value="created-ascending">Date, old to new</option>
                                </select>
                            </div>
                            <p class="my-2 sm:my-0">Showing 1 - 9 of 9 result</p>
                        </div>
                        <div>
                            <span>Show :</span>
                            <select class="bg-transparent">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div>
                            <ul class="shop-tab-nav flex flex-wrap">
                                <li class="active"><a href="#grid"
                                                      class="text-base hover:text-orange inline-block py-2 px-2"><i
                                            class="icon-grid"></i></a></li>
                                <li><a href="#list" class="text-base hover:text-orange inline-block py-2 px-2 ml-5"><i
                                            class="icon-menu"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div id="grid" class="shop-tab-content active">
                            <div class="flex flex-wrap -mb-7 -px-4">

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-full h-full" src="{{ asset('images/service3.webp') }}"
                                                 alt="product image" loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Batin
                                                    crofessor pampden</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block">110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-full h-full" src="assets/images/products/drone/product2.webp"
                                                 alt="product image" loading="lazy" width="432" height="480"/>

                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
                                                            <i class="icon-bag"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->
                                        </div>

                                        <div class="py-5 px-4">
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Esse
                                                    quam nihil molestiae</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>

                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <img class="w-full h-full" src="assets/images/products/drone/product3.webp"
                                             alt="product image" loading="lazy" width="432" height="480"/>
                                        <!-- actions start -->

                                        <div
                                            class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                            <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="#modal-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                       aria-label="quick view" data-tippy-content="Quick View">
                                                        <i class="icon-magnifier"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                       aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                       aria-label="compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                       aria-label="add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- actions end -->


                                        <div class="py-5 px-4">
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Inisd
                                                    deofessor smpden</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-full h-full" src="assets/images/products/drone/product4.webp"
                                                 alt="product image" loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Nam
                                                    libero tempore,</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-full h-full" src="assets/images/products/drone/product5.webp"
                                                 alt="product image" loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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
                                                <div class="countdown bg-dark item-1 flex flex-wrap justify-evenly p-2"
                                                     data-countdown="2022/11/20" data-format="short">
                                                    <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 daysLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light daysText"></span>
                                                    </div>
                                                    <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 hoursLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light hoursText"></span>
                                                    </div>
                                                    <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 minsLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light minsText"></span>
                                                    </div>
                                                    <div class="countdown__item flex flex-wrap items-baseline flex-col">
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
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Catin
                                                    uofessor eampden</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-ful h-fulll" src="assets/images/products/bags/product1.webp"
                                                 alt="product image" loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Every
                                                    pleasure is to be</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">

                                        <span
                                            class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                        <span
                                            class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                        <span
                                            class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                        <img class="w-ful h-fulll" src="assets/images/products/bags/product2.webp"
                                             alt="product image" loading="lazy" width="432" height="480"/>

                                        <!-- actions start -->

                                        <div
                                            class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                            <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="#modal-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                       aria-label="quick view" data-tippy-content="Quick View">
                                                        <i class="icon-magnifier"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                       aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                       aria-label="compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                       aria-label="add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- actions end -->

                                        <div class="py-5 px-4">
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Simple
                                                    and repellendus</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>

                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-ful h-fulll" src="assets/images/products/bags/product5.webp"
                                                 alt="product image" loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Architecto
                                                    non provident</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">

                                        <span
                                            class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                        <span
                                            class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                        <span
                                            class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                        <img class="w-ful h-fulll" src="assets/images/products/bags/product3.webp"
                                             alt="product image" loading="lazy" width="432" height="480"/>

                                        <!-- actions start -->

                                        <div
                                            class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                            <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="#modal-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                       aria-label="quick view" data-tippy-content="Quick View">
                                                        <i class="icon-magnifier"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                       aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                       aria-label="compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>
                                                <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                       aria-label="add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- actions end -->

                                        <div class="py-5 px-4">
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Simple
                                                    and easy</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-ful h-fulll" src="assets/images/products/bags/product4.webp"
                                                 alt="product image" loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Cupiditate
                                                    non provident</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-full h-full" src="assets/images/products/drone/product1.webp"
                                                 alt="product image" loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Batin
                                                    crofessor pampden</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                        <div class="relative overflow-hidden">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="w-full h-full" src="assets/images/products/drone/product2.webp"
                                                 alt="product image" loading="lazy" width="432" height="480"/>

                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="quick view" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="quick veiw" data-tippy-content="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange"
                                                           aria-label="compare" data-tippy-content="Compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle"
                                                           aria-label="add to cart" data-tippy-content="Add to cart">
                                                            <i class="icon-bag"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->
                                        </div>

                                        <div class="py-5 px-4">
                                            <h4><a class="block text-base hover:text-orange transition-all" href="#">Esse
                                                    quam nihil molestiae</a></h4>
                                            <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                        </div>

                                    </div>

                                </div>


                            </div>


                        </div>
                        <div id="list" class="shop-tab-content">
                            <div class="flex flex-wrap -mb-7 -px-4">

                                <div class="w-full px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/drone/product1.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Batin
                                                    crofessor pampden</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>

                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>

                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/drone/product2.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>

                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- actions end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Esse
                                                    quam nihil molestiae</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/drone/product3.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- actions end -->

                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Inisd
                                                    deofessor smpden</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>

                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-4 mb-7">


                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/drone/product4.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Nam
                                                    libero tempore,</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/drone/product5.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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
                                                <div class="countdown bg-dark item-1 flex flex-wrap justify-evenly p-2"
                                                     data-countdown="2022/11/20" data-format="short">
                                                    <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 daysLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light daysText"></span>
                                                    </div>
                                                    <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 hoursLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light hoursText"></span>
                                                    </div>
                                                    <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 minsLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light minsText"></span>
                                                    </div>
                                                    <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 secsLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light secsText"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- countdown end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Catin
                                                    uofessor eampden</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/bags/product1.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Every
                                                    pleasure is to be</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/bags/product2.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->
                                        </div>


                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Simple
                                                    and repellendus</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/bags/product5.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Architecto
                                                    non provident</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/bags/product3.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Simple
                                                    and easy</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/bags/product4.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Cupiditate
                                                    non provident</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/drone/product1.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
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
                                                        <button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none">
                                                        <button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none">
                                                        <button class="w-4 h-4 rounded-full bg-orange"
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

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Batin
                                                    crofessor pampden</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                 src="assets/images/products/drone/product2.webp" alt="product image"
                                                 loading="lazy" width="432" height="480"/>

                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                           class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                           aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2" href="#">Esse
                                                    quam nihil molestiae</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4">
                                                <del class="font-normal text-sm mr-1 inline-block"> 110.00</del>
                                                130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Add to wishlist"
                                                       data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                       aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                       class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                       aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="mt-12">
                        <ul class="pagination flex flex-wrap items-center justify-center">
                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white"
                                   href="#">
                                    <i class="icon-arrow-left"></i>
                                </a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white active"
                                   href="#">1</a>
                            </li>
                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white"
                                   href="#">2</a>
                            </li>
                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white"
                                   href="#">3</a>
                            </li>
                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white"
                                   href="#">
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog grid section end -->

    @include('user.homepage.newsLetter')
</x-user.layouts.app>
