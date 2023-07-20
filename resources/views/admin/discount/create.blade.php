<x-admin.layouts.app>
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
            >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            {{ __('Product') }}
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-5">
                    <form action="{{ route('admin.discount.store') }}" method="post">
                        <h6
                            class="text-blueGray-400 text-sm mb-6 font-bold uppercase"
                        >
                            {{ __('Add Discount') }}
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
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Code') }}
                                    </x-admin.form.inputs.label>
                                    <div class="mt-2 flex rounded-md shadow-sm">
                                        <x-admin.form.inputs.render name="code" :value="old('code')" />
                                    </div>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Percent') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs.select name="percent" class="text-center">
                                        @for($percent = 10; $percent <= 100; $percent += 10)
                                            <option
                                                value="{{ $percent }}" @selected(old('percent') == $percent)
                                            >{{ $percent }} %</option>
                                        @endfor
                                    </x-admin.form.inputs.select>
                                </div>
                                <div class="relative w-full mb-3">
                                    <x-admin.form.inputs.label>
                                        {{ __('Expired') }}
                                    </x-admin.form.inputs.label>
                                    <x-admin.form.inputs name="expired" placeholder="xx/xx/xxxx" type="date"
                                                         :value="old('expired')"/>
                                </div>
                                @if(auth()->user()->level == 2)
                                    <div class="relative w-full mb-3">
                                        <x-admin.form.inputs.checkbox name="active">
                                            {{ __('Active') }}
                                        </x-admin.form.inputs.checkbox>
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <x-admin.form.inputs.label>
                                            {{ __('Type') }}
                                        </x-admin.form.inputs.label>
                                        <x-admin.form.inputs.select name="type" class="text-center">
                                            <option value="0">{{ __('For Product') }}</option>
                                            <option value="1">{{ __('ALL Product') }}</option>
                                        </x-admin.form.inputs.select>
                                    </div>
                                @endif
                                <x-user.form.buttons.primary type="submit">
                                    {{ __('Submit') }}
                                </x-user.form.buttons.primary>
                            </div>
                        </div>
                    </form>
                    <hr class="mt-6 border-b-1 border-blueGray-300"/>
                </div>
            </div>
        </div>
    </div>
</x-admin.layouts.app>
