<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Eliminar cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Una vez que elimines su cuenta, todos tus recursos y datos se eliminarán de forma permanente.') }}
        </p>
    </header>

    <x-ui.danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Eliminar cuenta') }}</x-ui.danger-button>

    <x-modal.modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('¿Estás segur@ de eliminar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Una vez que elimines tu cuenta todos tus recursos y datos se perderán de forma permanente. Por favor, introduce tu contraseña para confirmar.') }}
            </p>

            <div class="mt-6">
                <x-ui.input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-ui.text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-ui.input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-ui.secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-ui.secondary-button>

                <x-ui.danger-button class="ml-3">
                    {{ __('Eliminar cuenta') }}
                </x-ui.danger-button>
            </div>
        </form>
    </x-modal.modal>
</section>
