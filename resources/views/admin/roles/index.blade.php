<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <x-jet-nav-link :active="request()->routeIs('admin.roles.index')">  {{ __('Roles') }} </x-jet-nav-link>    <x-jet-nav-link href="{{route('admin.roles.create')}}" class="ml-6">{{ __('Crear un role') }}</x-jet-nav-link>   <x-jet-nav-link  href="{{route('admin.users.index')}}" class="ml-6">{{ __('Usuarios') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.products.index')}}" class="ml-4">{{ __('Productos') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.categories.index')}}" class="ml-6">{{ __('Categorias') }}</x-jet-nav-link>
        </h2>
    </x-slot>
    @if(session('info'))
    <div class="py-4 text-center bg-green-900 lg:px-4" x-data="{ show: true }" x-show="show">
        <div class="flex items-center p-2 leading-none text-indigo-100 bg-green-800 lg:rounded-full lg:inline-flex" role="alert">
          <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-green-500 rounded-full">¡Role creado!</span>
          <span class="flex-auto mr-2 font-semibold text-left">{{session('info')}}</span>
          <svg class="w-4 h-4 opacity-75 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
        <button type="button" class="px-2 py-1 font-bold text-white bg-green-500 rounded-full close hover:bg-white" @click="show = false" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    @if(session('info2'))
    <div class="py-4 text-center bg-blue-900 lg:px-4" x-data="{ show: true }" x-show="show">
        <div class="flex items-center p-2 leading-none text-indigo-100 bg-blue-800 lg:rounded-full lg:inline-flex" role="alert">
          <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-blue-500 rounded-full">¡Role modificado!</span>
          <span class="flex-auto mr-2 font-semibold text-left">{{session('info2')}}</span>
          <svg class="w-4 h-4 opacity-75 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
        <button type="button" class="px-2 py-1 font-bold text-white bg-blue-500 rounded-full close hover:bg-white" @click="show = false" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif


    @if(session('info3'))
    <div class="py-4 text-center bg-red-900 lg:px-4" x-data="{ show: true }" x-show="show">
        <div class="flex items-center p-2 leading-none text-indigo-100 bg-red-800 lg:rounded-full lg:inline-flex" role="alert">
          <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-red-500 rounded-full">¡Role eliminado!</span>
          <span class="flex-auto mr-2 font-semibold text-left">{{session('info3')}}</span>
          <svg class="w-4 h-4 opacity-75 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
        <button type="button" class="px-2 py-1 font-bold text-white bg-red-500 rounded-full close hover:bg-white" @click="show = false" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif


@livewire('admin.roles-table')

</x-app-layout>
