<x-admin.layouts.app>
    <div class="flex flex-wrap">
        <div class="w-full lg:w-8/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
            >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            {{ __('My Account') }}
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>
                        <h6
                            class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                        >
                            {{ __('User Information') }}
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <div class="flex justify-between">
                                        <x-admin.form.inputs.label for="email">
                                            {{ __('Email address') }}
                                        </x-admin.form.inputs.label>

                                        <div id="modal">
                                            @if(! auth()->user()->email_verified)
                                                <button
                                                    class="text-primary hover:text-secondary uppercase text-xs font-bold mb-2"
                                                    @click="showModal = true"
                                                    id="verify_email"
                                                    type="button"
                                                >
                                                    {{ __('Verify Email') }}
                                                </button>
                                                <v-modal :open="showModal" @close="showModal = false">
                                                    <x-user.form.buttons.primary id="submit_email_verify" type="button">
                                                        <x-user.animateSpin class="hidden" id="loading_verify_email"/>
                                                        {{ __('Verify Email') }}
                                                    </x-user.form.buttons.primary>
                                                </v-modal>
                                            @endif
                                        </div>
                                    </div>
                                    <x-admin.form.inputs type="email"
                                                         value="{{ auth()->user()->email ?: 'jesse@example.com' }}"
                                                         name="email" id="email"/>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Full Name') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="name" value="{{ auth()->user()->name }}"/>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300"/>

                        <h6
                            class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                        >
                            Contact Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label for="address1">
                                        {{ __('Address 1') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="address_1" value="{{ auth()->user()->addresses()->first()->address_1 }}"/>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        City
                                    </label>
                                    <input
                                        type="email"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="New York"
                                    />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        Country
                                    </label>
                                    <input
                                        type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="United States"
                                    />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        Postal Code
                                    </label>
                                    <input
                                        type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        value="Postal Code"
                                    />
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300"/>

                        <h6
                            class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                        >
                            About Me
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        About me
                                    </label>
                                    <textarea
                                        type="text"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4"
                                    >
                                A beautiful UI Kit and Admin for JavaScript & Tailwind CSS. It is Free
                                and Open Source.
                              </textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16"
            >
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4 flex justify-center">
                            <div class="relative">
                                <img
                                    alt="..."
                                    src="../../assets/img/team-2-800x800.jpg"
                                    class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px"
                                />
                            </div>
                        </div>
                        <div class="w-full px-4 text-center mt-20">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"
                          >
                            22
                          </span>
                                    <span class="text-sm text-blueGray-400">Friends</span>
                                </div>
                                <div class="mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"
                          >
                            10
                          </span>
                                    <span class="text-sm text-blueGray-400">Photos</span>
                                </div>
                                <div class="lg:mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"
                          >
                            89
                          </span>
                                    <span class="text-sm text-blueGray-400"
                                    >Comments</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3
                            class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2"
                        >
                            Jenna Stones
                        </h3>
                        <div
                            class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase"
                        >
                            <i
                                class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"
                            ></i>
                            Los Angeles, California
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-10">
                            <i
                                class="fas fa-briefcase mr-2 text-lg text-blueGray-400"
                            ></i>
                            Solution Manager - Creative Tim Officer
                        </div>
                        <div class="mb-2 text-blueGray-600">
                            <i
                                class="fas fa-university mr-2 text-lg text-blueGray-400"
                            ></i>
                            University of Computer Science
                        </div>
                    </div>
                    <div
                        class="mt-10 py-10 border-t border-blueGray-200 text-center"
                    >
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p
                                    class="mb-4 text-lg leading-relaxed text-blueGray-700"
                                >
                                    An artist of considerable range, Jenna the name taken
                                    by Melbourne-raised, Brooklyn-based Nick Murphy
                                    writes, performs and records all of his own music,
                                    giving it a warm, intimate feel with a solid groove
                                    structure. An artist of considerable range.
                                </p>
                                <a
                                    href="javascript:void(0);"
                                    class="font-normal text-pink-500"
                                >
                                    Show more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('ajax.verifyEmail') }}" id="form_verify_email" class="hidden">
        @csrf
    </form>
    @push('js')
        <script src="{{ asset('js/user/account.js') }}"></script>
    @endpush
</x-admin.layouts.app>
