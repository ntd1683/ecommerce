<x-user.layouts.app>
    {{ Breadcrumbs::render('account') }}

    <div class="pb-24 mt-16">
        <div class="container">

            <div id="shoptab" class="grid grid-cols-12 gap-y-5 lg:gap-y-0 gap-x-5">
                <div class="col-span-12 lg:col-span-4">
                    <ul class="shop-tab-nav account-nav flex flex-wrap flex-col">
                        <li class="@if($tab == 'dashboard') active @endif">
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-secondary  text-base border-t border-l border-r border-gray-200 block"
                               href="#dashboad">{{ __('Dashboad') }}</a></li>
                        <li class="@if($tab == 'orders') active @endif">
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-secondary  text-base border-t border-l border-r border-gray-200 block"
                               href="#orders">{{ __('Orders') }}</a></li>
                        <li class="@if($tab == 'payment-method') active @endif">
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-secondary  text-base border-t border-l border-r border-gray-200 block"
                               href="#payment-method">{{ __('Payment Method') }}</a></li>
                        <li class="@if($tab == 'address') active @endif">
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-secondary  text-base border-t border-l border-r border-gray-200 block"
                               href="#address">{{ __('Address') }}</a></li>
                        <li class="@if($tab == 'account') active @endif"><a
                                class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-secondary  text-base border-t border-l border-r border-gray-200 block"
                                href="#account">{{ __('Account Details') }}</a></li>
                        <li class="@if($tab == 'changePassword') active @endif"><a
                                class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-secondary  text-base border-t border-l border-r border-gray-200 block"
                                href="#changePassword">{{ __('Change Password') }}</a></li>
                        <li>
                            <a class="font-medium py-4 px-5 leading-none uppercase transition-all hover:text-white hover:bg-secondary  text-base border-t border-l border-r border-b border-gray-200 block"
                               href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                    </ul>
                </div>
                <div class="col-span-12 lg:col-span-8">
                    <div>
                        <div id="dashboad" class="shop-tab-content @if($tab == 'dashboard') active @endif">
                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none"
                                    !important>{{ __('Dashboard')  }}</h3>
                                <div class="text-base lg:text-base leading-loose lg:leading-loose">
                                    <p>
                                        Hello, <strong>Alex Tuntuni</strong> (If Not
                                        <strong>Tuntuni ! </strong><a href="{{ route('logout') }}"
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
                        <div id="orders" class="shop-tab-content @if($tab == 'orders') active @endif">
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
                        <div id="payment-method" class="shop-tab-content @if($tab == 'payment-method') active @endif">
                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">{{ __('Payment Method')  }}</h3>
                                <p class="font-medium p-4 text-base lg:text-base ">{{ __('You Can Not Saved Your Payment Method Yet.') }} </p>
                                <form action="{{ route('user-payment.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs id="name_payment" placeholder="{{ __('Name Payment') }}"
                                                                name="name_payment"
                                                                :value="old('name_payment', userPayment()->name_payment ?? '' )"/>
                                        </div>
                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs id="provide" placeholder="{{ __('Provide') }}"
                                                                name="provide"
                                                                :value="old('provide', userPayment()->provide ?? '' )"/>
                                        </div>
                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs.select id="type" name="type">
                                                <option value="-1">{{ __('Select Type') }}</option>
                                                @foreach(\App\Enums\UserPaymentTyeEnum::getArrayView() as $key => $value)
                                                    <option
                                                        value="{{ $value }}" @selected(old('type', userPayment()->type ?? '' ) == $value)>{{ $key }}</option>
                                                @endforeach
                                            </x-user.form.inputs.select>
                                        </div>

                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs.image name="qr"
                                                                      value="{{  old('qr', userPayment()->qr ?? '' ) }}"/>
                                        </div>

                                        <div class="col-span-12">
                                            <x-user.form.buttons.primary type="submit">
                                                {{ __('Save Changes') }}
                                            </x-user.form.buttons.primary>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="address" class="shop-tab-content @if($tab == 'address') active @endif">

                            <div class="p-8 border border-gray-200">
                                <h3 class="font-semibold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">
                                    {{ __('Address') }}</h3>
                                <div class="text-base lg:text-base leading-loose lg:leading-loose ">
                                    <form action="{{ route('address.store') }}" method="post">
                                        @csrf
                                        <div class="grid grid-cols-12 gap-x-5">
                                            <div class="col-span-12 mb-5">
                                                <x-user.form.inputs name="address_1" value="{{ old('address_1', addresses()->address_1 ?? '' ) }}" />
                                            </div>
                                            <div class="col-span-12 mb-5">
                                                <x-user.form.inputs name="address_2" value="{{ old('address_2', addresses()->address_2 ?? '' ) }}" />
                                            </div>
                                            <div class="col-span-12 mb-5">
                                                <label class="text-lg">{{ __('Province') }}</label>
                                                <input type="hidden" id="url_province" value="{{ route('ajax.ghn.get-provinces') }}">
                                                <input type="hidden" name="province" id="province">
                                                <x-user.form.inputs.select name="province_id" class="select-2-province" id="province_id">
                                                    <option value="{{ addresses()->province_id ?? '' }}">{{ addresses()->province ?? '' }}</option>
                                                </x-user.form.inputs.select>
                                            </div>
                                            <div class="col-span-12 mb-5">
                                                <label class="text-lg">{{ __('District') }}</label>
                                                <input type="hidden" id="url_district" value="{{ route('ajax.ghn.get-district') }}">
                                                <input type="hidden" name="district" id="district">
                                                <x-user.form.inputs.select name="district_id" class="select-2-district" id="district_id">
                                                    <option value="{{ addresses()->district_id ?? '' }}">{{ addresses()->district ?? '' }}</option>
                                                </x-user.form.inputs.select>
                                            </div>
                                            <div class="col-span-12 mb-5">
                                                <label class="text-lg">{{ __('Ward') }}</label>
                                                <input type="hidden" id="url_ward" value="{{ route('ajax.ghn.get-ward') }}">
                                                <input type="hidden" name="ward" id="ward">
                                                <x-user.form.inputs.select name="ward_id" class="select-2-ward">
                                                    <option value="{{ addresses()->ward_id ?? '' }}">{{ addresses()->ward ?? '' }}</option>
                                                </x-user.form.inputs.select>
                                            </div>
                                            <div class="col-span-12 mb-5">
                                                <x-user.form.buttons.primary type="submit">
                                                    {{ __('Update Address') }}
                                                </x-user.form.buttons.primary>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div id="changePassword" class="shop-tab-content @if($tab == 'changePassword') active @endif">
                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">{{ __('Change Password')  }}</h3>
                                <form action="{{ route('account.change-password') }}" method="post">
                                    @csrf
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs.password id="old_password" placeholder="Password"
                                                                         name="old_password"/>
                                        </div>
                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs.password id="new_password" placeholder="New Password"
                                                                         name="new_password"/>
                                        </div>
                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs.password id="new_password_confirmation"
                                                                         placeholder="Confirm New Password"
                                                                         name="new_password_confirmation"/>
                                        </div>
                                        <div class="col-span-12">
                                            <x-user.form.buttons.primary id="button_change_password" type="submit">
                                                {{ __('Save Changes') }}
                                            </x-user.form.buttons.primary>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="account" class="shop-tab-content @if($tab == 'account') active @endif">
                            <div class="p-8 border border-gray-200">
                                <h3 class="font-bold text-xl lg:text-2xl capitalize pb-5 mb-5 border-b border-gray-200 leading-none">{{ __('Account Details')  }}</h3>
                                <form action="{{ route('account.change-information') }}" method="post">
                                    @csrf
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <div class="col-span-12">
                                            <x-user.form.inputs id="full-name" placeholder="Full Name" name="name"
                                                                :value="old('name', auth()->user()->name)"/>
                                        </div>
                                        <div class="col-span-6 mb-5">
                                            <x-user.form.inputs.radio value="1" name="gender"
                                                                      :checked="old('gender', auth()->user()->gender)"
                                                                      id="gender1">{{ __('Male') }}</x-user.form.inputs.radio>
                                        </div>
                                        <div class="col-span-6 mb-5">
                                            <x-user.form.inputs.radio value="0" name="gender"
                                                                      :checked="old('gender', auth()->user()->gender)"
                                                                      id="gender0">{{ __('Female') }}</x-user.form.inputs.radio>
                                        </div>

                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs name="birthdate" placeholder="xx/xx/xxxx" type="date"
                                                                :value="old('birthdate', auth()->user()->birthdate)"/>
                                        </div>

                                        <div class="col-span-12 mb-5">
                                            <x-user.form.inputs name="phone" placeholder="0123xxxxxxx"
                                                                :value="old('phone', auth()->user()->phone)"/>
                                        </div>

                                        <div class="col-span-12 mb-5">

                                            @if(! auth()->user()->email_verified)
                                                <div id="modal">
                                                    <div class="text-end text-base">
                                                        <button type="button" class="text-primary hover:text-secondary"
                                                                @click="showModal = true"
                                                                id="verify_email">{{ __('Verify your email') }}
                                                        </button>
                                                    </div>
                                                    <v-modal :open="showModal" @close="showModal = false">
                                                        <x-user.form.buttons.primary id="submit_email_verify"
                                                                                     type="button">
                                                            <x-user.animateSpin class="hidden"
                                                                                id="loading_verify_email"/>
                                                            {{ __('Verify Email') }}
                                                        </x-user.form.buttons.primary>
                                                    </v-modal>
                                                </div>
                                            @endif
                                            <x-user.form.inputs name="email" placeholder="0123xxxxxxx"
                                                                :value="old('email', auth()->user()->email)"/>
                                        </div>

                                        <div class="col-span-12">
                                            <x-user.form.buttons.primary type="submit">
                                                {{ __('Save Changes') }}
                                            </x-user.form.buttons.primary>
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
    <form action="{{ route('ajax.account.verify-email') }}" id="form_verify_email" class="hidden">
        @csrf
    </form>
    @include('user.homepage.newsLetter')
    @push('js')
        <script src="{{ asset('js/user/account.js') }}"></script>
    @endpush
</x-user.layouts.app>
