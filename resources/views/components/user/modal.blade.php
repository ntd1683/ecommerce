<v-modal :open="true" @close="open = false">
    <form action="" method="post" id="form_verify_email">
        @csrf
        <input type="hidden" name="email" value="{{ auth()->user()->email }}">
        <div class="">
            <x-user.form.buttons.primary>
                {{ __('Verify Email') }}
            </x-user.form.buttons.primary>
        </div>
    </form>
</v-modal>
