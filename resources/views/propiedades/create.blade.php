<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agregando propiedad') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="productor" :value="__('Productor')" />
                            <x-text-input id="productor" class="block mt-1 w-full" type="text" name="productor" :value="$productore->nombre.' '.$productore->apellidos" required autofocus autocomplete="productor" readonly />
                            <x-input-error :messages="$errors->get('productor')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="lugar" :value="__('Lugar')" />
                            <x-text-input id="lugar" class="block mt-1 w-full" type="text" name="lugar" :value="old('lugar')" required autofocus autocomplete="lugar"/>
                            <x-input-error :messages="$errors->get('lugar')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="tipo_tenencia" :value="__('Tipo de tenencia')"/>
                            <select id="tipo_tenencia" name="tipo_tenencia" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option>Selecciona una opción</option>
                                <option value="pequeña">Pequeña propiedad</option>
                                <option value="ejidal">Ejidal</option>
                            </select>
                            <x-input-error :messages="$errors->get('tipo_tenencia')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="superficie" :value="__('Superficie')" />
                            <x-text-input id="superficie" class="block mt-1 w-full" type="number" name="superficie" :value="old('superficie')" required autofocus autocomplete="superficie"/>
                            <x-input-error :messages="$errors->get('superficie')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-primary-button>
                                {{ __('Guardar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>