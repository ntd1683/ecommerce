<nav
    class="md:left-0 md:block fixed w-full md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between md:w-64 z-10 py-4 px-6"
>
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
    >
        <button
            class="toggle-example-collapse-sidebar cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
        >
            <i class="fas fa-bars"></i>
        </button>
        <a
            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="{{ route('admin.index') }}"
        >
            {{ option('site_name', config('app.name', 'Laravel')) }}
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a
                    class="open-notification-dropdown text-blueGray-500 block py-1 px-3"
                    href="#pablo"
                ><i class="fas fa-bell"></i>
                </a>
                <div
                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="notification-dropdown"
                >
                    <x-admin.layouts.partials.menuAction />
                </div>
            </li>
            <li class="inline-block relative">
                <a
                    class="text-blueGray-500 block open-user-responsive-dropdown"
                    href="#pablo"
                >
                    <div class="items-center flex">
                        <span
                            class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                        >
                            <img
                                alt="..."
                                class="w-full rounded-full align-middle border-none shadow-lg"
                                src="{{ auth()->user()->avatar_url }}"
                            />
                        </span>
                    </div>
                </a>
                <div
                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="user-responsive-dropdown"
                >
                    <x-admin.layouts.partials.menuAction />
                </div>
            </li>
        </ul>
        <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
        >
            <div
                class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
            >
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a
                            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                            href="{{ route('admin.index') }}"
                        >
                            {{ option('site_name', config('app.name', 'Laravel')) }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button
                            type="button"
                            class="toggle-example-collapse-sidebar cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                        >
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
                <div class="mb-3 pt-0">
                    <input
                        type="text"
                        placeholder="Search"
                        class="border-0 px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                    />
                </div>
            </form>
            <!-- Divider -->
            <hr class="my-4 md:min-w-full"/>
            <!-- Heading -->

            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a
                        @class(['text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-secondary', 'active' => getNameRouteMain() == 'index' ])
                        href="{{ route('admin.index') }}"
                    >
                        <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                        {{ __('Dashboard') }}
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full"/>
            <!-- Heading -->
            <h6
                class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
                {{ __('Product') }}
            </h6>

            <ul
                class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
                <li class="items-center">
                    <a
                        @class(['text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-secondary', 'active' => getNameRouteMain() == 'product' ])
                        href="{{ route('admin.product.create') }}"
                    >
                        <i
                            class="fas fa-plus mr-2 text-sm"
                        ></i>
                        {{ __('Create') }}
                    </a>
                </li>
                <li class="items-center">
                    <a
                        @class(['text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-secondary', 'active' => getNameRouteMain() == 'product' ])
                        href="{{ route('admin.product.import') }}"
                    >
                        <i
                            class="fas fa-plus mr-2 text-sm"
                        ></i>
                        {{ __('Import Sheet') }}
                    </a>
                </li>
            </ul>
            <h6
                class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
                {{ __('Category') }}
            </h6>

            <ul
                class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
                <li class="items-center">
                    <a
                        @class(['text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-secondary', 'active' => getNameRouteMain() == 'product-category' ])
                        href="{{ route('admin.product-category.create') }}"
                    >
                        <i
                            class="fas fa-plus mr-2 text-sm"
                        ></i>
                        {{ __('Create') }}
                    </a>
                </li>
            </ul>

            <h6
                class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
                {{ __('Discount') }}
            </h6>

            <ul
                class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
                <li class="items-center">
                    <a
                        @class(['text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-secondary', 'active' => getNameRouteMain() == 'discount' ])
                        href="{{ route('admin.discount.create') }}"
                    >
                        <i
                            class="fas fa-plus mr-2 text-sm"
                        ></i>
                        {{ __('Create') }}
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full"/>
            <!-- Heading -->
            <h6
                class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
                No Layout Pages
            </h6>
            <!-- Navigation -->

            <ul
                class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
                <li class="items-center">
                    <a
                        href="../landing.html"
                        class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                    >
                        <i
                            class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"
                        ></i>
                        Landing Page
                    </a>
                </li>

                <li class="items-center">
                    <a
                        href="../profile.html"
                        class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                    >
                        <i
                            class="fas fa-user-circle text-blueGray-300 mr-2 text-sm"
                        ></i>
                        Profile Page
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
