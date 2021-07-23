<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          <x-jet-nav-link :active="request()->routeIs('admin.index')">  {{ __('Administrador') }} </x-jet-nav-link>    <x-jet-nav-link  href="{{route('admin.products.index')}}" class="ml-6">{{ __('Productos') }}</x-jet-nav-link>  @can('admin.users.index') <x-jet-nav-link href="{{route('admin.users.index')}}" class="ml-6">{{ __('Usuarios') }}</x-jet-nav-link> @endcan   @can('admin.categories.index')   <x-jet-nav-link  href="{{route('admin.categories.index')}}" class="ml-4">{{ __('Categorias') }}</x-jet-nav-link>@endcan @can('admin.roles.index') <x-jet-nav-link href="{{route('admin.roles.index')}}" class="ml-2">{{ __('Roles') }}</x-jet-nav-link> @endcan
        </h2>
    </x-slot>

   

    <div class="grid grid-cols-1 gap-4 my-4 md:grid-cols-2 lg:grid-cols-3">
        <div class="w-full">
            <div class="relative w-full px-4 py-6 bg-white shadow-lg dark:bg-gray-700">
                <p class="text-sm font-semibold text-gray-700 border-b border-gray-200 w-max dark:text-white">
                    Productos
                </p>
                <div class="flex items-end my-6 space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                        <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                      </svg>
                    <p class="ml-20 text-3xl font-bold text-black dark:text-white">

                        PRODUCTOS
                    </p>


                </div>
                <div class="dark:text-white">
                    <div class="flex items-center justify-between pb-2 mb-2 text-sm border-b border-gray-200 sm:space-x-12">
                        <p >
                            Crear
                        </p>

                        <a href="{{route('admin.products.create')}}"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                          </svg></a>
                    </div>
                    <div class="flex items-center justify-between space-x-12 text-sm md:space-x-24">
                        <p>
                            Ver productos
                        </p>

                        <a href="{{route('admin.products.index')}}"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.679 7.932c.412-.621 1.242-1.75 2.366-2.717C5.175 4.242 6.527 3.5 8 3.5c1.473 0 2.824.742 3.955 1.715 1.124.967 1.954 2.096 2.366 2.717a.119.119 0 010 .136c-.412.621-1.242 1.75-2.366 2.717C10.825 11.758 9.473 12.5 8 12.5c-1.473 0-2.824-.742-3.955-1.715C2.92 9.818 2.09 8.69 1.679 8.068a.119.119 0 010-.136zM8 2c-1.981 0-3.67.992-4.933 2.078C1.797 5.169.88 6.423.43 7.1a1.619 1.619 0 000 1.798c.45.678 1.367 1.932 2.637 3.024C4.329 13.008 6.019 14 8 14c1.981 0 3.67-.992 4.933-2.078 1.27-1.091 2.187-2.345 2.637-3.023a1.619 1.619 0 000-1.798c-.45-.678-1.367-1.932-2.637-3.023C11.671 2.992 9.981 2 8 2zm0 8a2 2 0 100-4 2 2 0 000 4z"></path></svg></a>



                    </div>
                </div>
            </div>
        </div>
     @can('admin.categories.index')
        <div class="w-full">
            <div class="relative w-full px-4 py-6 bg-white shadow-lg dark:bg-gray-700">
                <p class="text-sm font-semibold text-gray-700 border-b border-gray-200 w-max dark:text-white">
                    Usuarios
                </p>
                <div class="flex items-end my-6 space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                      </svg>
                    <p class="text-3xl font-bold text-black dark:text-white">
                        USUARIOS
                    </p>

                </div>
                <div class="dark:text-white">
                    <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                        <p>
                            Crear
                        </p>

                        <a href="{{route('admin.users.create')}}">  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                          </svg></a>
                    </div>

                    <div class="flex items-center justify-between space-x-12 text-sm md:space-x-24">
                        <p>
                            Ver usuarios
                        </p>
                        <a href="{{route('admin.users.index')}}"> <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.679 7.932c.412-.621 1.242-1.75 2.366-2.717C5.175 4.242 6.527 3.5 8 3.5c1.473 0 2.824.742 3.955 1.715 1.124.967 1.954 2.096 2.366 2.717a.119.119 0 010 .136c-.412.621-1.242 1.75-2.366 2.717C10.825 11.758 9.473 12.5 8 12.5c-1.473 0-2.824-.742-3.955-1.715C2.92 9.818 2.09 8.69 1.679 8.068a.119.119 0 010-.136zM8 2c-1.981 0-3.67.992-4.933 2.078C1.797 5.169.88 6.423.43 7.1a1.619 1.619 0 000 1.798c.45.678 1.367 1.932 2.637 3.024C4.329 13.008 6.019 14 8 14c1.981 0 3.67-.992 4.933-2.078 1.27-1.091 2.187-2.345 2.637-3.023a1.619 1.619 0 000-1.798c-.45-.678-1.367-1.932-2.637-3.023C11.671 2.992 9.981 2 8 2zm0 8a2 2 0 100-4 2 2 0 000 4z"></path></svg></a>
                    </div>

                </div>
            </div>
        </div>
    @endcan
@can('admin.categories.index')
        <div class="w-full">
            <div class="relative w-full px-4 py-6 bg-white shadow-lg dark:bg-gray-700">
                <p class="text-sm font-semibold text-gray-700 border-b border-gray-200 w-max dark:text-white">
                    Categorias
                </p>

                <div class="flex items-end my-6 space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="w-10 h-10"><path fill-rule="evenodd" d="M0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v3.585a.746.746 0 010 .83v8.085A1.75 1.75 0 0114.25 16H6.309a.748.748 0 01-1.118 0H1.75A1.75 1.75 0 010 14.25V6.165a.746.746 0 010-.83V1.75zM1.5 6.5v7.75c0 .138.112.25.25.25H5v-8H1.5zM5 5H1.5V1.75a.25.25 0 01.25-.25H5V5zm1.5 1.5v8h7.75a.25.25 0 00.25-.25V6.5h-8zm8-1.5h-8V1.5h7.75a.25.25 0 01.25.25V5z"></path></svg>
                    <p class="text-3xl font-bold text-black dark:text-white">
                        CATEGORIAS
                    </p>

                </div>
                <div class="dark:text-white">
                    <div class="flex items-center justify-between pb-2 mb-2 space-x-12 text-sm border-b border-gray-200 md:space-x-24">
                        <p>
                            Añadir
                        </p>
                        <a href="{{route('admin.categories.create')}}"><div class="flex items-end text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                              </svg></a>
                        </div>
                    </div>
                    <div class="flex items-center justify-between space-x-12 text-sm md:space-x-24">
                        <p>
                            Ver categorias
                        </p>
                        <div class="flex items-end text-xs" >
                           <a href="{{route('admin.categories.index')}}"><svg xmlns="http://www.w3.org/2000/svg"  class="w-6 h-6" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1.679 7.932c.412-.621 1.242-1.75 2.366-2.717C5.175 4.242 6.527 3.5 8 3.5c1.473 0 2.824.742 3.955 1.715 1.124.967 1.954 2.096 2.366 2.717a.119.119 0 010 .136c-.412.621-1.242 1.75-2.366 2.717C10.825 11.758 9.473 12.5 8 12.5c-1.473 0-2.824-.742-3.955-1.715C2.92 9.818 2.09 8.69 1.679 8.068a.119.119 0 010-.136zM8 2c-1.981 0-3.67.992-4.933 2.078C1.797 5.169.88 6.423.43 7.1a1.619 1.619 0 000 1.798c.45.678 1.367 1.932 2.637 3.024C4.329 13.008 6.019 14 8 14c1.981 0 3.67-.992 4.933-2.078 1.27-1.091 2.187-2.345 2.637-3.023a1.619 1.619 0 000-1.798c-.45-.678-1.367-1.932-2.637-3.023C11.671 2.992 9.981 2 8 2zm0 8a2 2 0 100-4 2 2 0 000 4z"></path></svg></a>

                        </div>
                    </div>
                @endcan

</x-app-layout>
