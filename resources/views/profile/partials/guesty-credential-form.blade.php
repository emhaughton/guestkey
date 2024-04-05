<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Guesty Credential') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('guesty_credential.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Client ID')" />
            <x-text-input id="client_id" name="client_id" type="text" class="mt-1 block w-full" :value="old('client_id', $user->guestyCredential?->client_id)" required autofocus autocomplete="client_id" />
            <x-input-error class="mt-2" :messages="$errors->get('client_id')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Client Secret')" />
            <x-text-input id="client_secret" name="client_secret" type="text" class="mt-1 block w-full" :value="old('client_secret', $user->guestyCredential?->client_secret)" required autofocus autocomplete="client_secret" />
            <x-input-error class="mt-2" :messages="$errors->get('client_secret')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Account ID')" />
            <x-text-input id="account_id" name="account_id" type="text" class="mt-1 block w-full" :value="old('account_id', $user->guestyCredential?->account_id)" required autofocus autocomplete="account_id" />
            <x-input-error class="mt-2" :messages="$errors->get('account_id')" />
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
