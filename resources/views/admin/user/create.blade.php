<x-admin.layouts.app>
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
            >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            {{ __('Account User') }}
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-5">
                    <form action="{{ route('admin.product-category.store') }}" method="post">
                        <h6
                            class="text-blueGray-400 text-sm my-6 font-bold uppercase"
                        >
                            {{ __('Create Account User') }}
                        </h6>
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Name') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="name" value="{{ old('name') }}"/>
                                </div>
                            </div>
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
                                        {{ __('Gender') }}
                                    </x-admin.form.inputs.label>

                                </div>
                            </div>
                            <div class="w-1/2 px-4">
                                <div class="relative w-full mb-3">
                                    <x-user.form.inputs.radio value="1" name="gender"
                                                              :checked="old('gender')"
                                                              id="gender1">{{ __('Male') }}</x-user.form.inputs.radio>
                                </div>
                            </div>
                            <div class="w-1/2 px-4">
                                <div class="relative w-full  ">
                                    <x-user.form.inputs.radio value="0" name="gender"
                                                              :checked="old('gender')"
                                                              id="gender0">{{ __('Female') }}</x-user.form.inputs.radio>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3 ">
                                    <x-admin.form.inputs.label>
                                        {{ __('Day Of Birth') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="birthdate" placeholder="xx/xx/xxxx" type="date"
                                                         :value="old('birthdate')"/>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Phone Number') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="phone" placeholder="0123xxxxxxx"
                                                         :value="old('phone')"/>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3 ">
                                    <x-admin.form.inputs.label>
                                        {{ __('Level') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="level" placeholder="1-2-3"
                                                         :value="old('level')"/>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3 ">
                                    <x-admin.form.inputs.label>
                                        {{ __('Password') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs.password name="level" placeholder="1-2-3"
                                                                  :value="old('password')"/>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-6 ">
                                    <x-admin.form.inputs.label>
                                        {{ __('Avatar') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs.image name="level" placeholder="password"
                                                               :value="old('avatar')"/>
                                </div>
                            </div>
                            <x-user.form.buttons.primary type="submit">
                                {{ __('Submit') }}
                            </x-user.form.buttons.primary>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layouts.app>
