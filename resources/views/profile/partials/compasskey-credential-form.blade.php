<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Compasskey Credential') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('compasskey_credential.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('URL')" />
            <x-text-input id="url" name="url" type="text" class="mt-1 block w-full" :value="old('url', $user->compasskeyCredential?->url)" required autofocus autocomplete="url" />
            <x-input-error class="mt-2" :messages="$errors->get('url')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Token')" />
            <x-text-input id="token" name="token" type="text" class="mt-1 block w-full" :value="old('token', $user->compasskeyCredential?->token)" required autofocus autocomplete="token" />
            <x-input-error class="mt-2" :messages="$errors->get('token')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @php
                print_r(session('status'));
            @endphp
            @if (session('status') === 'guesty_credential-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
