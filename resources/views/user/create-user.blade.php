<section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Add New User') }}
            </h2>
        </header>

        <x-splade-form class="mt-2" :action="route('user.store')">
            <x-splade-input name="name" :label="__('Username')" />
            <x-splade-input name="email" label="Email address" />
            <x-splade-input id="password" name="password" type="password" :label="__('Password')" autocomplete="password" />
            <x-splade-input id="password_confirmation" name="password_confirmation" type="password" :label="__('Confirm Password')" autocomplete="password" />

            <x-splade-submit class="mt-2"/>
        </x-splade-form>
</section>
