<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <x-jet-nav-link :active="request()->routeIs('admin.products.index')">  {{ __('Productos') }} </x-jet-nav-link>    <x-jet-nav-link href="{{route('admin.products.create')}}" class="ml-2">{{ __('Crear un producto') }}</x-jet-nav-link>
            @can('admin.users.index') <x-jet-nav-link :active="request()->routeIs('admin.users.index')" href="{{route('admin.users.index')}}" class="ml-2">{{ __('Usuarios') }}</x-jet-nav-link> @endcan
            @can('admin.categories.index') <x-jet-nav-link  href="{{route('admin.categories.index')}}" class="ml-4">{{ __('Categorias') }}</x-jet-nav-link>@endcan
            @can('admin.roles.index')<x-jet-nav-link  href="{{route('admin.roles.index')}}" class="ml-4">  {{ __('Roles') }} </x-jet-nav-link> @endcan
        </h2>
    </x-slot>

@livewire('admin.products-table')

</x-app-layout>
