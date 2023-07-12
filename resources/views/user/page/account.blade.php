<x-user.layouts.app>
    {{ Breadcrumbs::render('account') }}
    <div class="pb-24 mt-16">
        <div class="container">

            <div id="shoptab" class="grid grid-cols-12 gap-y-5 lg:gap-y-0 gap-x-5">
                <div class="col-span-12 lg:col-span-4">
                    <ul class="shop-tab-nav account-nav flex flex-wrap flex-col">
                        <li>
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-orange  text-base border-t border-l border-r border-gray-200 block"
                               href="#dashboad">dashboad</a></li>
                        <li>
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-orange  text-base border-t border-l border-r border-gray-200 block"
                               href="#orders">orders</a></li>
                        <li>
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-orange  text-base border-t border-l border-r border-gray-200 block"
                               href="#download">download</a></li>
                        <li>
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-orange  text-base border-t border-l border-r border-gray-200 block"
                               href="#payment-method">payment method</a></li>
                        <li>
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-orange  text-base border-t border-l border-r border-gray-200 block"
                               href="#address">address</a></li>
                        <li class="active"><a
                                class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-orange  text-base border-t border-l border-r border-gray-200 block"
                                href="#account"> Account Details</a></li>
                        <li>
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-orange  text-base border-t border-l border-r border-b border-gray-200 block"
                               href="login-register.html">Logout</a></li>
                    </ul>
                </div>
                <div class="col-span-12 lg:col-span-8">
                    <div>
                        <div id="dashboad" class="shop-tab-content">
                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none"
                                    !important>{{ __('Dashboard')  }}</h3>
                                <div class="text-base lg:text-base leading-loose lg:leading-loose">
                                    <p>
                                        Hello, <strong>Alex Tuntuni</strong> (If Not
                                        <strong>Tuntuni ! </strong><a href="login-register.html"
                                                                      class="transition-all hover:text-orange">Logout</a>)
                                    </p>
                                    <p>
                                        From your account dashboard. you can easily check &amp; view
                                        your recent orders, manage your shipping and billing addresses
                                        and edit your password and account details.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div id="orders" class="shop-tab-content">
                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">{{ __('Orders')  }}</h3>

                                <div class="overflow-x-auto text-base lg:text-base leading-loose lg:leading-loose">
                                    <table class="w-full min-w-max">
                                        <thead>
                                        <tr>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                No
                                            </th>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Name
                                            </th>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Date
                                            </th>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Status
                                            </th>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Total
                                            </th>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                1
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Mostarizing Oil
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Aug 22, 2018
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Pending
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                $45
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                <a href="shopping-cart.html"
                                                   class="ht-btn black-btn">{{ __('View') }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                2
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Katopeno Altuni
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                July 22, 2018
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Approved
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                $100
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                <a href="shopping-cart.html"
                                                   class="ht-btn black-btn">{{ __('View') }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                3
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Murikhete Paris
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                June 12, 2017
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                On Hold
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                $99
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                <a href="shopping-cart.html"
                                                   class="ht-btn black-btn">{{ __('View') }}</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <div id="download" class="shop-tab-content">

                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">{{ __('Downloads')  }}</h3>
                                <div class="overflow-x-auto text-base lg:text-base leading-loose lg:leading-loose">
                                    <table class="w-full min-w-max">
                                        <thead>
                                        <tr>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Product
                                            </th>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Date
                                            </th>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Expire
                                            </th>
                                            <th class="bg-gray-light text-center border border-solid border-gray-200 p-3 font-semibold text-base">
                                                Download
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Mostarizing Oil
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Aug 22, 2018
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Yes
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                <a href="#" class="ht-btn black-btn">{{ __('Download File') }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Katopeno Altuni
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Sep 12, 2018
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                Never
                                            </td>
                                            <td class="text-center border border-solid border-gray-200 py-5 px-3 align-middle">
                                                <a href="#" class="ht-btn black-btn">{{ __('Download File') }}</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div id="payment-method" class="shop-tab-content">
                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">{{ __('Payment Method')  }}</h3>
                                <p class="font-medium p-4 text-base lg:text-base ">{{ __('You Can Not Saved Your Payment Method Yet.') }} </p>
                            </div>
                        </div>
                        <div id="address" class="shop-tab-content">

                            <div class="p-8 border border-gray-200">
                                <h3 class="font-semibold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">
                                    Billing Address</h3>
                                <div class="text-base lg:text-base leading-loose lg:leading-loose ">
                                    <address class="not-italic">
                                        <p><strong>Alex Tuntuni</strong></p>
                                        <p>
                                            1355 Market St, Suite 900 <br>
                                            San Francisco, CA 94103
                                        </p>
                                        <p>Mobile: (123) 456-7890</p>
                                    </address>
                                    <a href="#" class="transition-all hover:text-orange">{{ __('Edit Address') }}</a>
                                </div>

                            </div>
                        </div>
                        <div id="account" class="shop-tab-content active">
                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">{{ __('Account Details')  }}</h3>
                                <form action="#">
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <div class="col-span-12 lg:col-span-6 mb-5">
                                            <input
                                                class="border border-solid border-gray-200 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                id="first-name" placeholder="First Name" type="text">
                                        </div>

                                        <div class="col-span-12 lg:col-span-6 mb-5">
                                            <input
                                                class="border border-solid border-gray-200 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                id="last-name" placeholder="Last Name" type="text">
                                        </div>

                                        <div class="col-span-12 mb-5">
                                            <input
                                                class="border border-solid border-gray-200 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                id="display-name" placeholder="Display Name" type="text">
                                        </div>

                                        <div class="col-span-12 mb-5">
                                            <input
                                                class="border border-solid border-gray-200 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                id="email" placeholder="Email Address" type="email">
                                        </div>

                                        <div class="col-span-12 mb-5">
                                            <h4 class="font-semibold text-base capitalize">{{ __('Password change')  }}</h4>
                                        </div>

                                        <div class="col-span-12 mb-5">
                                            <input
                                                class="border border-solid border-gray-200 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                id="current-pwd" placeholder="Current Password" type="password">
                                        </div>

                                        <div class="col-span-12 lg:col-span-6 mb-5">
                                            <input
                                                class="border border-solid border-gray-200 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                id="new-pwd" placeholder="New Password" type="password">
                                        </div>

                                        <div class="col-span-12 lg:col-span-6 mb-5">
                                            <input
                                                class="border border-solid border-gray-200 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"
                                                id="confirm-pwd" placeholder="Confirm Password" type="password">
                                        </div>

                                        <div class="col-span-12">
                                            <button
                                                class="inline-block leading-none uppercase text-white text-sm bg-primary px-5 py-5 transition-all hover:bg-orange"
                                                aria-label="Save Changes">Save Changes
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
    @include('user.homepage.newsLetter')
</x-user.layouts.app>
