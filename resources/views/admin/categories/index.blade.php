<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800 leading-light">
            <x-jet-nav-link :active="request()->routeIs('admin.categories.index')">  {{ __('Categorias') }} </x-jet-nav-link>    <x-jet-nav-link :active="request()->routeIs('admin.category.create')" href="{{route('admin.categories.create')}}" class="ml-2">{{ __('Crear una categoria') }}</x-jet-nav-link>   <x-jet-nav-link  href="{{route('admin.users.index')}}" class="ml-2">{{ __('Usuarios') }}</x-jet-nav-link>   <x-jet-nav-link href="{{route('admin.products.index')}}" class="ml-2">{{ __('Productos') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.roles.index')}}" class="ml-2">  {{ __('Roles') }} </x-jet-nav-link>
        </h2>
    </x-slot>
    @if(session('info'))
    <div class="py-4 text-center bg-green-900 lg:px-4" x-data="{ show: true }" x-show="show">
        <div class="flex items-center p-2 leading-none text-indigo-100 bg-green-800 lg:rounded-full lg:inline-flex" role="alert">
          <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-green-500 rounded-full">┬íCategoria guardada!</span>
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
      <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-blue-500 rounded-full">┬íCategoria modificada!</span>
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
      <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-red-500 rounded-full">┬íCategoria eliminada!</span>
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
        <div class="px-8 py-6 -mx-4 overflow-x-auto sm:-mx-16 sm:px-8">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-green-600">
                                ID
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-green-600">
                                NAME
                            </th>
                             <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-green-600">
                                EDITAR
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-green-600">
                                ELIMINAR
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($category as $categoria)
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$categoria->id}}
                                        </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                     {{$categoria->name}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <a href="{{route("admin.categories.edit", $categoria)}}">
                                <x-jet-button class="-ml-4">Editar</x-jet-button>
                                </a>
                            </td>
                          <form action="{{route('admin.categories.destroy', $categoria)}}" method="POST">
                              @csrf
                              @method('delete')
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <button class="items-center justify-center w-24 h-8 mt-auto -ml-4 text-base font-semibold text-center text-white transition duration-200 bg-red-600 rounded-lg shadow-md hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 ">Borrar</button>
                            </td>
                        </form>
                        </tr>
                       @endforeach
                    </tbody>
                </table>

    <div class="bg-white card-footer">
        {{$category->links()}}
    </div>

</x-app-layout>
