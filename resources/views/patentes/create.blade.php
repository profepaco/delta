<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar patente') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('patente.store',['productore'=>$productore])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="productor" :value="__('Productor')" />
                            <x-text-input id="productor" class="block mt-1 w-full" type="text" name="productor" :value="$productore->nombre.' '.$productore->apellidos" required autofocus autocomplete="productor" readonly />
                            <x-input-error :messages="$errors->get('productor')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="imagen" :value="__('Imagen')" />
                            <x-text-input id="imagen" class="block mt-1 w-full" type="file" accept="image/jpeg" name="imagen" :value="old('imagen')" required autofocus autocomplete="imagen"/>
                            <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
                        </div>
                        <div class="mt-4 flex flex-wrap -mx-3">  
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="libro" :value="__('Libro')" />
                                <x-text-input id="libro" class="block mt-1 w-full" type="number" name="libro" :value="old('libro')" required autofocus autocomplete="libro" />
                                <x-input-error :messages="$errors->get('libro')" class="mt-2" />
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="foja" :value="__('Foja')" />
                                <x-text-input id="foja" class="block mt-1 w-full" type="number" name="foja" :value="old('foja')" required autofocus autocomplete="foja" />
                                <x-input-error :messages="$errors->get('foja')" class="mt-2" />
                            </div>
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