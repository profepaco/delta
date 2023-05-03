<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Productor {{ $productore->esSocio? 'Asociado' : 'Independiente' }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="w-full md:w-1/2 px-3">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h4 class="text-center font-bold text-lg">Datos personales</h4>
                        <p class="pt-6 font-bold">INE: <span class="font-light">{{$productore->INE}}</span></p>
                        <p class="pt-2 font-bold">RFC: <span class="font-light">{{$productore->RFC}}</span></p>
                        <p class="pt-2 font-bold">CURP: <span class="font-light">{{$productore->RFC}}</span></p>
                        <p class="pt-2 font-bold">UPP: <span class="font-light">{{$productore->UPP}}</span></p>
                        <p class="pt-2 font-bold">Nombre: <span class="font-light">{{$productore->nombre.' '.$productore->apellidos}}</span></p>
                        <p class="pt-2 font-bold">Domicilio: <span class="font-light">{{$productore->domicilio}}</span></p>
                        <p class="pt-2 font-bold">Teléfono: <span class="font-light">{{$productore->telefono}}</span></p>
                        <a href="{{route('productores.edit',['productore'=>$productore])}}" class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Editar</a>
                    </div>                    
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h4 class="text-center font-bold text-lg">Patente registrada</h4>
                        @if($productore->patente==null)
                          <a href="{{route('patente.create',['productore'=>$productore])}}" class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Registrar patente</a>
                        @else
                          <div class="flex flex-wrap -mx-3 pt-4">  
                            <div class="w-full md:w-1/3 px-3">
                              <img src="{{url('uploads/')}}/{{$productore->patente->imagen}}" alt="Imagen de patentes">
                            </div>
                            <div class="w-full md:w-2/3">
                              <div class="flex pt-4">
                                <div class="w-full md:w-1/2 px-3 text-center">
                                  <h4 class="text-lg">Libro</h4>
                                  <p class="text-6xl pt-6">{{$productore->patente->libro}}</p>
                                </div>
                                <div class="w-full md:w-1/2 px-3 text-center">
                                  <h4 class="text-lg text-center">Foja</h4>
                                  <p class="text-6xl pt-6">{{$productore->patente->foja}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="{{route('productores.edit',['productore'=>$productore])}}" class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Editar</a>
                          <a href="{{route('productores.edit',['productore'=>$productore])}}" class="inline-flex items-center mt-4 ml-2 px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">Eliminar</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <!-- Sección de ganado-->
            <div class="w-full md:w-1/2 px-3">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h4 class="text-center font-bold text-lg">Ganado registrado</h4>
                        @if(count($productore->ganado)===0)
                            <p class="pt-4">Sin ganado registrado</p>
                        @else
                        <div class="flex flex-col pt-4">
                            <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                              <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 dark:border-indigo-600 shadow sm:rounded-lg">
                                <table class="min-w-full">
                                  <thead>
                                    <tr>
                                      <x-table-th>
                                        Especie
                                      </x-table-th>
                                      <x-table-th>
                                        Cantidad
                                      </x-table-th>
                                      <x-table-th>
                                        Acciones
                                      </x-table-th>
                                    </tr>
                                  </thead>
                                  <tbody class="bg-white dark:bg-gray-800 dark:text-gray-200">
                                     <?php $total =0 ?>
                                    @foreach ( $productore->ganado as $ganado)
                                    <tr>
                                        <?php $total+= $ganado->cantidad?>
                                        <x-table-column class="py-2">
                                            {{$ganado->especie->nombre}}
                                        </x-table-column>
                                        <x-table-column class="py-2">
                                            {{$ganado->cantidad}}
                                        </x-table-column>
                                        <x-table-column class="py-2">
                                            <a href="{{route('ganado.edit',['productore'=>$productore,'ganado'=>$ganado])}}" class="text-indigo-200 hover:text-indigo-400 mx-2">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                  stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                              </svg>
                                            </a>
                                            <form method="POST" action="{{route('ganado.destroy',['ganado'=>$ganado])}}">
                                                @csrf
                                                @method('DELETE') 
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-300 hover:text-red-500 mx-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                          </x-table-column>
                                    </tr>
                                    @endforeach
                                    <tr class="bg-indigo-600">
                                        <x-table-column class="py-2">
                                            <span class="font-bold"> TOTAL:</span>
                                        </x-table-column>
                                        <x-table-column class="py-2">
                                            {{$total}}
                                        </x-table-column>
                                        <x-table-column class="py-2">
                                        </x-table-column>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                        @endif
                        <a href="{{route('ganado.create',['productore'=>$productore])}}" class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Agregar ganado</a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h4 class="text-center font-bold text-lg">Propiedad registrada</h4>
                        @if(count($productore->propiedades)===0)
                            <p class="pt-4">Sin propiedades registradas</p>
                        @else
                        <div class="flex flex-col pt-4">
                            <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                              <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 dark:border-indigo-600 shadow sm:rounded-lg">
                                <table class="min-w-full">
                                  <thead>
                                    <tr>
                                      <x-table-th>
                                        Lugar
                                      </x-table-th>
                                      <x-table-th>
                                        Superficie
                                      </x-table-th>
                                      <x-table-th>
                                        Acciones
                                      </x-table-th>
                                    </tr>
                                  </thead>
                                  <tbody class="bg-white dark:bg-gray-800 dark:text-gray-200">
                                    @foreach ( $productore->propiedades as $propiedad)
                                    <tr>
                                        <x-table-column class="py-2">
                                            {{$propiedad->lugar}}
                                        </x-table-column>
                                        <x-table-column class="py-2">
                                            {{$propiedad->superficie}}
                                        </x-table-column>
                                        <x-table-column class="py-2">
                                            <a href="{{route('propiedad.edit',['productore'=>$productore,'propiedad'=>$propiedad])}}" class="text-indigo-200 hover:text-indigo-400 mx-2">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                                  stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                              </svg>
                                            </a>
                                            <form method="POST" action="{{route('propiedades.destroy',['propiedad'=>$propiedad])}}">
                                                @csrf
                                                @method('DELETE') 
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-300 hover:text-red-500 mx-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                          </x-table-column>
                                    </tr>
                                    @endforeach
                                    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                        @endif
                        
                        <a href="{{route('propiedades.create',['productore'=>$productore])}}" class="inline-flex items-center mt-4 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Agregar propiedad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>