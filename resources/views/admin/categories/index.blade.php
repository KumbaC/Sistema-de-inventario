<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800 leading-light">
            <x-jet-nav-link :active="request()->routeIs('admin.categories.index')">  {{ __('Categorias') }} </x-jet-nav-link>    <x-jet-nav-link :active="request()->routeIs('admin.category.create')" href="{{route('admin.categories.create')}}" class="ml-2">{{ __('Crear una categoria') }}</x-jet-nav-link>   <x-jet-nav-link  href="{{route('admin.users.index')}}" class="ml-2">{{ __('Usuarios') }}</x-jet-nav-link>   <x-jet-nav-link href="{{route('admin.products.index')}}" class="ml-2">{{ __('Productos') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.roles.index')}}" class="ml-2">  {{ __('Roles') }} </x-jet-nav-link>
        </h2>
    </x-slot>


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
