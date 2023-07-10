<x-user.layouts.app>
    {{ Breadcrumbs::render('contactUs') }}
    <!-- contact us section start -->

    <div class="bg-white py-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                <div class="contact-info-area">
                    <h2 class="font-semibold text-dark text-4xl mb-14 capitalize">{{ __('Contact Us') }}</h2>
                    <div class="flex flex-wrap items-center mb-8">
                        <span class="text-dark text-4xl mr-5"><i class="icon-location-pin"></i></span>
                        <p class="flex-1">Address goes here, street, Crossroad 123.</p>
                    </div>
                    <div class="flex flex-wrap items-center mb-8">
                        <span class="text-dark text-4xl mr-5"><i class="icon-envelope"></i></span>
                        <a href="mailto:info@example.com" class="flex-1">info@example.com / info@example.com</a>
                    </div>
                    <div class="flex flex-wrap items-center">
                        <span class="text-dark text-4xl mr-5"><i class="icon-screen-smartphone"></i></span>
                        <a href="tel:01234567890" class="flex-1">+1 35 776 859 011 / +1 35 776 859 011</a>
                    </div>
                </div>

                <div class="p-10 lg:p-14 shadow mt-14 lg:mt-0">
                    <form id="contact-form" method="get" action="#">
                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text" name="name" placeholder="Name">
                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="email" placeholder="Email" name="email">
                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text" placeholder="subject" name="subject">
                        <textarea class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 text-dark h-32 focus:outline-none text-base resize-none" name="massage"></textarea>
                        <button class="w-full leading-none uppercase text-white text-sm bg-dark px-5 py-5 transition-all hover:bg-orange" type="submit" aria-label="button">{{ __('Send Message') }}</button>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>

    </div>
    <!-- contact us section end -->


    <!-- google map start -->

    <div>
        <iframe class="w-full h-96 md:h-500px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3918.463045762183!2d106.7854597!3d10.8523427!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175276e7ea103df%3A0xb6cf10bb7d719327!2sThu%20Duc%20Campus%20Hutech%20khu%20E!5e0!3m2!1svi!2s!4v1689003604046!5m2!1svi!2s" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- google map end -->

    <!-- team carousel end -->
    @include('user.homepage.newsLetter')

</x-user.layouts.app>
