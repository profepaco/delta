<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Productores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-4">
                    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                      <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 dark:border-indigo-600 shadow sm:rounded-lg">
                        <table class="min-w-full">
                          <thead>
                            <tr>
                              <x-table-th>
                                ID
                              </x-table-th>
                              <x-table-th>
                                Nombre
                              </x-table-th>
                              <x-table-th>
                                Socio
                              </x-table-th>
                              <x-table-th>
                                Acciones
                              </x-table-th>
                            </tr>
                          </thead>
                
                          <tbody class="bg-white dark:bg-gray-800 dark:text-gray-200">
                            @foreach ($productores as $productor)
                              <tr>
                                <x-table-column class="py-4">
                                    {{$productor->id}}
                                </x-table-column>
                                <x-table-column class="py-4">
                                    {{$productor->nombre.' '.$productor->apellidos}}
                                </x-table-column>
                                <x-table-column class="py-4">
                                    {{$productor->esSocio ? 'Si':'No'}}
                                </x-table-column>
                                <x-table-column class="py-4">
                                  <a href="{{route('productores.show',['productore'=>$productor])}}" class="text-gray-200 hover:text-gray-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                  </a>
                                  <a href="{{route('productores.edit',['productore'=>$productor])}}" class="text-indigo-200 hover:text-indigo-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                  </a>
                                  <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-300 hover:text-red-500 mx-2"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                  </a>
                                </x-table-column>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                <a href="{{route('productores.create')}}" class="inline-flex items-center m-6 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Registrar productor</a>
            </div>
        </div>     
    </div>
</x-app-layout>
