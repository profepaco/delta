<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registro de productor') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('productores.store') }}" novalidate>
                        @csrf
                        <div class="flex flex-wrap -mx-3">  
                            <div class="w-full md:w-1/3 px-3">
                                <x-input-label for="RFC" :value="__('RFC')" />
                                <x-text-input id="RFC" class="block mt-1 w-full" type="text" name="RFC" :value="old('RFC')" required autofocus autocomplete="RFC" />
                                <x-input-error :messages="$errors->get('RFC')" class="mt-2" />
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <x-input-label for="CURP" :value="__('CURP')" />
                                <x-text-input id="CURP" class="block mt-1 w-full" type="text" name="CURP" :value="old('CURP')" required autofocus autocomplete="CURP" />
                                <x-input-error :messages="$errors->get('CURP')" class="mt-2" />
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <x-input-label for="INE" :value="__('INE')" />
                                <x-text-input id="INE" class="block mt-1 w-full" type="text" name="INE" :value="old('INE')" required autofocus autocomplete="INE" />
                                <x-input-error :messages="$errors->get('INE')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mt-4">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="nombre" :value="__('Nombre')" />
                                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="apellidos" :value="__('Apellidos')" />
                                <x-text-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')" required autofocus autocomplete="apellidos" />
                                <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
                            </div>
                        </div>
                        <div class="mt-4">
                            <x-input-label for="domicilio" :value="__('Domicilio')" />
                            <x-text-input id="domicilio" class="block mt-1 w-full" type="text" name="domicilio" :value="old('domicilio')" required autofocus autocomplete="domicilio" />
                            <x-input-error :messages="$errors->get('domicilio')" class="mt-2" />
                        </div>
                        <div class="flex flex-wrap -mx-3 mt-4">
                            <div class="w-full md:w-1/3 px-3">
                                <x-input-label for="UPP" :value="__('UPP')" />
                                <x-text-input id="UPP" class="block mt-1 w-full" type="text" name="UPP" :value="old('UPP')" required autofocus autocomplete="UPP" />
                                <x-input-error :messages="$errors->get('UPP')" class="mt-2" />
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <x-input-label for="telefono" :value="__('Teléfono')"/>
                                <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" />
                                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <x-input-label for="esSocio" :value="__('Socio')"/>
                                <select id="esSocio" name="esSocio" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option>Selecciona una opción</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                                <x-input-error :messages="$errors->get('esSocio')" class="mt-2" />
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
