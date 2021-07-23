<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <x-jet-nav-link :active="request()->routeIs('admin.roles.create')">  {{ __('Roles') }} </x-jet-nav-link>  <x-jet-nav-link  href="{{route('admin.users.index')}}" class="ml-6">{{ __('Usuarios') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.products.index')}}" class="ml-4">{{ __('Productos') }}</x-jet-nav-link> <x-jet-nav-link  href="{{route('admin.categories.index')}}" class="ml-6">{{ __('Categorias') }}</x-jet-nav-link>
        </h2>
    </x-slot>

    <x-jet-authentication-card>

        <x-slot name="logo">

          </x-slot>

        {!!Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

        <div class="relative ">
        {!! Form::Label('name', 'Nombre: ') !!}
        {!! Form::text('name', null, ['class' => 'rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent ', 'required']) !!}
        </div>
<br>
        <h2 class="font-bold h3">Lista de permisos: </h2>
        @foreach($permisos as $permission)
        <div>
            <label>
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=> 'mr-1 rounded-lg text-yellow-600']) !!}
                {{$permission->description}}
            </label>
        </div>

        @endforeach
        <div class="flex w-full my-4">
        {!! Form::Submit('Actualizar rol', ['class' => 'py-2 px-4  bg-blue-600 hover:bg-green-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ']) !!}
        </div>


        {!! Form::close() !!}

        </x-jet-authentication-card>











</x-app-layout>
