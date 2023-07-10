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
