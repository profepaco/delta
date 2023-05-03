<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modificando ganado') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('ganado.update',['ganado'=>$ganado])}}">
                        @csrf
                        @method('PUT')
                        <div class="mt-4">
                            <x-input-label for="productor" :value="__('Productor')" />
                            <x-text-input id="productor" class="block mt-1 w-full" type="text" name="productor" :value="$productore->nombre.' '.$productore->apellidos" required autofocus autocomplete="productor" readonly />
                            <x-input-error :messages="$errors->get('productor')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="especie_id" :value="__('Socio')"/>
                            <select id="especie_id" name="especie_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option>Selecciona una opción</option>
                                @foreach ($especies as $especie)
                                    <option value="{{$especie->id}}" {{$ganado->especie_id === $especie->id ? 'selected':'' }}>{{$especie->nombre}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('especie_id')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="cantidad" :value="__('Cantidad')" />
                            <x-text-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="$ganado->cantidad" required autofocus autocomplete="cantidad"/>
                            <x-input-error :messages="$errors->get('cantidad')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-primary-button>
                                {{ __('Actualizar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>