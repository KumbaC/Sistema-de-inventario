<div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <x-jet-nav-link href="{{route('admin.users.index')}}" :active="request()->routeIs('admin.users.index')">  {{ __('Usuarios') }} </x-jet-nav-link>    <x-jet-nav-link :active="request()->routeIs('admin.users.create')" href="{{route('admin.users.create')}}" class="ml-2">{{ __('Crear nuevo usuario') }}</x-jet-nav-link>   <x-jet-nav-link  href="{{route('admin.products.index')}}" class="ml-2">{{ __('Productos') }}</x-jet-nav-link>   <x-jet-nav-link :active="request()->routeIs('admin.categories.index')" href="{{route('admin.categories.index')}}" class="ml-2">{{ __('Categorias') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.roles.index')}}" class="ml-2">  {{ __('Roles') }} </x-jet-nav-link>
        </h2>
    </x-slot>
    @if(session('info'))
    <div class="py-4 text-center bg-green-900 lg:px-4" x-data="{ show: true }" x-show="show">
        <div class="flex items-center p-2 leading-none text-indigo-100 bg-green-800 lg:rounded-full lg:inline-flex" role="alert">
          <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-green-500 rounded-full">¡Usuario creado!</span>
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
          <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-blue-500 rounded-full">¡Role asignado!</span>
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
          <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-red-500 rounded-full">¡Usuario elminado!</span>
          <span class="flex-auto mr-2 font-semibold text-left">{{session('info3')}}</span>
          <svg class="w-4 h-4 opacity-75 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
        <button type="button" class="px-2 py-1 font-bold text-white bg-red-500 rounded-full close hover:bg-white" @click="show = false" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

<div class="container max-w-6xl px-4 mx-auto sm:px-8">
    <div class="py-8">
        <div class="grid-cols-2 px-8 py-6 -mx-4 overflow-x-auto sm:-mx-16 sm:px-8 md:grid-cols-2">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                {{--Buscador--}}
            <div class="bg-white rounded-lg">
        <div class="pt-1 card-header">
            <input wire:model="search" class="flex-1 px-2 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-purple-600 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-purple-600 focus:border-transparent" placeholder="Buscar">
       </div>

         @if($users->count())

                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                ID
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                NAME
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                EMAIL
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                FECHA SUBIDA
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                FOTO DE PERFIL
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                EDITAR
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                ELIMINAR
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($users as $user)
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$user->id}}
                                        </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                     {{$user->name}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$user->email}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">

                                    <p class="text-gray-900 whitespace-no-wrap">
                                       {{$user->created_at}}
                                    </p>

                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">

                                        <a href="#" class="relative block ml-5">
                                            <img  src="{{$user->profile_photo_url }}" alt="{{$user->name }}"  class="object-cover w-10 h-10 mx-auto rounded"/>
                                        </a>

                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">

                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">

                                <a href="{{route('admin.users.edit', $user)}}"><button class="w-10 h-10 px-4 py-2 text-base font-semibold text-center text-white whitespace-no-wrap transition duration-200 ease-in bg-blue-700 rounded-lg shadow-md hover:bg-blue-200 focus:ring-blue-500 focus:ring-offset-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2" >
                                    <svg width="20" height="20" fill="currentColor" class="w-4 h-4 -ml-1 text-white" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                        </path>
                                    </svg>
                                </button></a>

                        </td>
                        <form action="{{route("admin.users.destroy", $user)}}" method="POST">
                            @csrf
                            @method('delete')
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <button class="w-10 h-10 px-4 py-2 text-base font-semibold text-center text-white whitespace-no-wrap transition duration-200 ease-in bg-red-700 rounded-lg shadow-md hover:bg-red-400 focus:ring-blue-500 focus:ring-offset-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 -ml-1 text-white" viewBox="0 0 1792 1792">
                                        <path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z">
                                        </path>
                                    </svg>
                                </button>

                            </td>
                        </form>


                        </tr>
                       @endforeach
                    </tbody>
                    @else
            <div class="card-body">
                <center><strong>No se encuentran resultados de su busqueda</strong></center>
            </div>
            @endif
                </table>

          <div class="bg-white">
             {{$users->links()}}
          </div>

</x-app-layout>

</div>
