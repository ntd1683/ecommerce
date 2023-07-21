<x-user.layouts.app>
    {{ Breadcrumbs::render('aboutUs') }}

    <!-- about us section start -->
    <div class="py-20 bg-white">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
                <div class="flex flex-wrap items-center mb-10 lg:mb-0">
                    <img src="{{ asset('images/user/service1.webp') }}" alt="images">
                </div>
                <div>
                    <div class="mb-10">
                        <h3 class="font-bold uppercase text-3xl md:text-4xl mb-5 text-dark">{{ __('WELCOME TO') }} <span class="text-orange">{{ __('Sinp') }}</span></h3>
                        <p>Parlo provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a complete.</p>
                    </div>
                    <div class="mb-10">
                        <h4 class="font-semibold uppercase text-md mb-4 text-dark">WE START AT 2022</h4>
                        <p>Parlo provide how all this mistaken idea of denouncing pleasure and sing pain was born nsidae.</p>
                    </div>
                    <div>
                        <h4 class="font-semibold uppercase text-md mb-4 text-dark">WIN BEST ONLINE SHOP AT 2022</h4>
                        <p>Parlo provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a solution.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us section end -->

    <!-- testimonial section start -->
    <div class="testimonial-area bg-gray-light py-24 bg-no-repeat bg-cover bg-center group" style="background-image: url('{{ asset('images/user/slide/slide5.webp') }}');">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <div class="text-center pb-14">
                        <h2 class="font-playfair font-bold text-orange text-3xl sm:text-4xl xl:text-5xl mb-5">{{ __('What Client Says') }}</h2>
                        <p class="font-playfair font-medium text-md mb-3">Contrary to popular belief, Lorem Ipsum is not.</p>
                    </div>
                </div>
                <div class="lg:col-start-3 col-span-12 lg:col-span-8 text-center">

                    <div class="testimonial overflow-hidden relative">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="w-40 h-40 rounded-full mx-auto overflow-hidden">
                                        <img src="{{ Storage::url(option('site_logo')) }}" alt="image">
                                    </div>
                                    <p class="my-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit.</p>
                                    <h5 class="font-semibold text-sm text-dark uppercase">Hester Perkins</h5>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-40 h-40 rounded-full mx-auto overflow-hidden">
                                        <img src="{{ Storage::url(option('site_logo')) }}" alt="image">
                                    </div>
                                    <p class="my-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit.</p>
                                    <h5 class="font-semibold text-sm text-dark uppercase">Hester Perkins</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="swiper-pagination"></div> -->
                        <!-- swiper navigation -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-prev right-auto left-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark group-hover:opacity-100 transition-all hover:text-orange hover:border-orange opacity-0 invisible group-hover:visible"></div>
                            <div class="swiper-button-next left-auto right-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark group-hover:opacity-100 transition-all hover:text-orange hover:border-orange opacity-0 invisible group-hover:visible"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- testimonial section end -->


    <!-- team carousel start -->
    <div class="py-20">
        <div class="container">
            <div class="grid gap-x-4 grid-cols-12">
                <div class="col-span-12">
                    <div class="text-center pb-14">
                        <h2 class="font-playfair font-bold text-orange text-3xl sm:text-4xl xl:text-5xl mb-5">{{ __('Team Members') }}</h2>
                        <p class="font-playfair font-medium text-md mb-3">Contrary to popular belief, Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="relative -m-4">
                        <div class="team-carousel overflow-hidden p-4">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div class="bg-gray-light group">
                                            <div class="relative">
                                                <a href="#" class="block"><img class="w-full h-full" src="{{ Storage::url(option('site_logo')) }}" alt="team image" loading="lazy" width="270" height="330" /></a>
                                                <div class="absolute w-full top-1/2 left-0 transform translate-y-1/2 bg-white flex flex-wrap items-center justify-center p-3 transition-all group-hover:-translate-y-1/2 invisible opacity-0 group-hover:visible group-hover:opacity-100 duration-500">
                                                    <a href="#" class="w-8 h-8 rounded-full flex flex-wrap items-center justify-center text-white text-sm mx-1
                                     transition-all border border-solid border-transparent hover:bg-white hover:border-facebook bg-facebook hover:text-facebook"><i class="icon-social-facebook"></i></a>
                                                    <a href="#" class="w-8 h-8 rounded-full flex flex-wrap items-center justify-center text-white text-sm mx-1
                                     transition-all border border-solid border-transparent hover:bg-white hover:border-twitter bg-twitter hover:text-twitter"><i class="icon-social-twitter"></i></a>
                                                    <a href="#" class="w-8 h-8 rounded-full flex flex-wrap items-center justify-center text-white text-sm mx-1
                                     transition-all border border-solid border-transparent hover:bg-white hover:border-instagram bg-instagram hover:text-instagram"><i class="icon-social-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="py-5 px-3 text-center">
                                                <h4 class="font-medium text-dark text-md capitalize mb-1">Ms. Sophia</h4>
                                                <span class="italic">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div class="bg-gray-light group">
                                            <div class="relative">
                                                <a href="#" class="block"><img class="w-full h-full" src="{{ Storage::url(option('site_logo')) }}" alt="team image" loading="lazy" width="270" height="330" /></a>
                                                <div class="absolute w-full top-1/2 left-0 transform translate-y-1/2 bg-white flex flex-wrap items-center justify-center p-3 transition-all group-hover:-translate-y-1/2 invisible opacity-0 group-hover:visible group-hover:opacity-100 duration-500">
                                                    <a href="#" class="w-8 h-8 rounded-full flex flex-wrap items-center justify-center text-white text-sm mx-1
                                     transition-all border border-solid border-transparent hover:bg-white hover:border-facebook bg-facebook hover:text-facebook"><i class="icon-social-facebook"></i></a>
                                                    <a href="#" class="w-8 h-8 rounded-full flex flex-wrap items-center justify-center text-white text-sm mx-1
                                     transition-all border border-solid border-transparent hover:bg-white hover:border-twitter bg-twitter hover:text-twitter"><i class="icon-social-twitter"></i></a>
                                                    <a href="#" class="w-8 h-8 rounded-full flex flex-wrap items-center justify-center text-white text-sm mx-1
                                     transition-all border border-solid border-transparent hover:bg-white hover:border-instagram bg-instagram hover:text-instagram"><i class="icon-social-instagram"></i></a>
                                                </div>
                                            </div>
                                            <div class="py-5 px-3 text-center">
                                                <h4 class="font-medium text-dark text-md capitalize mb-1">Mr. Peter Pan</h4>
                                                <span class="italic">Developer</span>
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
                                <div class="swiper-button-prev right-auto left-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange"></div>
                                <div class="swiper-button-next left-auto right-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- team carousel end -->
    @include('user.homepage.newsLetter')
</x-user.layouts.app>
