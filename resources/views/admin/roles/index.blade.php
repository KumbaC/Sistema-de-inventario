<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <x-jet-nav-link :active="request()->routeIs('admin.roles.index')">  {{ __('Roles') }} </x-jet-nav-link>    <x-jet-nav-link href="{{route('admin.roles.create')}}" class="ml-6">{{ __('Crear un role') }}</x-jet-nav-link>   <x-jet-nav-link  href="{{route('admin.users.index')}}" class="ml-6">{{ __('Usuarios') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.products.index')}}" class="ml-4">{{ __('Productos') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.categories.index')}}" class="ml-6">{{ __('Categorias') }}</x-jet-nav-link>
        </h2>
    </x-slot>
@livewire('admin.roles-table')

</x-app-layout>
