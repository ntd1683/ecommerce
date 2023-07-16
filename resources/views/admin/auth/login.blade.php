<x-admin.layouts.guest>
    <div class="container mx-auto px-4 h-full mb-2">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
                >
                    <div class="rounded-t mb-0 px-6 py-6">
                        <div class="text-center mb-3">
                            <h6 class="text-blueGray-500 text-sm font-bold">
                                {{ __('Sign in with') }}
                            </h6>
                        </div>
                        <div class="btn-wrapper text-center">
                            <button
                                class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                type="button"
                            >
                                <img
                                    alt="..."
                                    class="w-5 mr-1"
                                    src="{{ asset('images/admin/github.svg') }}"
                                />Github
                            </button
                            >
                            <button
                                class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                type="button"
                            >
                                <img
                                    alt="..."
                                    class="w-5 mr-1"
                                    src="{{ asset('images/admin/google.svg') }}"
                                />Google
                            </button>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300"/>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        <div class="text-blueGray-400 text-center mb-3 font-bold">
                            <small>{{ __('Or sign in with credentials') }}</small>
                        </div>
                        <form action="{{ route('admin.process-login') }}" method="post">
                            @csrf
                            <div class="relative w-full mb-3">
                                <x-admin.form.inputs.label for="email"
                                >Email</x-admin.form.inputs.label>
                                <x-admin.form.inputs type="email" placeholder="Email" name="email"/>
                            </div>
                            <div class="relative w-full mb-3">
                                <x-admin.form.inputs.label for="password"
                                >Password</x-admin.form.inputs.label>
                                <x-admin.form.inputs.password name="password" placeholder="Password"/>
                            </div>
                            <div>
                                <label class="inline-flex items-center cursor-pointer"
                                ><input
                                        id="customCheckLogin"
                                        type="checkbox"
                                        class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                                        name="remember"
                                    /><span
                                        class="ml-2 text-sm font-semibold text-blueGray-600"
                                    >{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                    type="submit"
                                >
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layouts.guest>
