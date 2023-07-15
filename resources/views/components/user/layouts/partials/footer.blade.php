<footer>
    <!-- footer start -->
    <div class="bg-gray bg-no-repeat bg-center bg-cover pt-24" style="background-image:url('{{ asset('images/user/shape.webp') }}')">
        <div class="container">

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-6 lg:col-span-6 mb-10">
                    <a href="index.html" class="inline-block mb-4"><img src="{{ asset('images/user/logo.webp') }}" alt="logo" loading="lazy" width="125" height="45" /></a>
                    <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor inci ut labore et dolore</p>

                    <div class="flex flex-wrap items-center justify-start">
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-facebook"></i></a>
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-twitter"></i></a>
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-instagram"></i></a>
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-youtube"></i></a>
                        <a href="#" aria-label="social links" class="text-lg text-dark hover:text-orange mx-3 leading-none transition"><i class="icon-social-dribbble"></i></a>
                    </div>
                </div>

                <div class="col-span-6 md:col-span-6 lg:col-span-2 mb-10">
                    <h3 class="text-primary font-bold text-md capitalize leading-none mb-8 font-playfair">Information</h3>
                    <ul>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Best Value</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Your Order</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Terms Condition</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Contact us</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Manufactureres</a></li>
                    </ul>
                </div>
                <div class="col-span-6 md:col-span-6 lg:col-span-2 mb-10">
                    <h3 class="text-primary font-bold text-md capitalize leading-none mb-8 font-playfair">Quick Links</h3>
                    <ul>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">New Brands</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">News &amp; Blog</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Our Office</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Our Store</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Return Policy</a></li>
                    </ul>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-2 mb-10">
                    <h3 class="text-primary font-bold text-md capitalize leading-none mb-8 font-playfair">Main Menu</h3>
                    <ul>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Best Value</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Your Order</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Terms &amp; Condition</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Contact us</a></li>
                        <li class="ml-4 mb-5 list-circle"><a class="hover:text-orange transition-all" href="#">Manufactureres</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <!-- Credit Section start -->
    <div class="footer-bottom-section py-8 bg-gray-500">
        <div class="container">
            <div class="grid md:grid-cols-2 gap-4">
                <div class="flex order-last md:order-first flex-wrap items-center justify-center md:justify-start">
                    <p class="text-white flex flex-wrap items-center text-sm lg:text-base">&copy;{{ __(' 2023 Web Made With ') }}<i class="icon-heart mx-2 text-orange"></i>{{ __(' by') }}<a href="#" class="ml-1 transition hover:text-orange">{{ __('Nguyen Tan Dung ') }}</a><span class="ml-1">{{ __('and') }}</span><a href="#" class="ml-1 transition hover:text-orange">{{ __('Nguyen Mai Bao Huy') }}</a>.</p>
                </div>

                <div class="flex flex-wrap items-center justify-center md:justify-end">
                    <a href="#">
                        <img class="w-auto h-10" src="{{ asset('images/user/hutech.webp') }}" alt="payment logo" loading="lazy" />
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Credit Section end -->
</footer>
