<x-app-layout>

<x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          <x-jet-nav-link href="{{route('admin.index')}}">  {{ __('Administrador') }} </x-jet-nav-link>    <x-jet-nav-link :active="request()->routeIs('admin.products.create')" href="{{route('admin.products.index')}}" class="ml-8">{{ __('Productos') }}</x-jet-nav-link>   @can('admin.users.index') <x-jet-nav-link :active="request()->routeIs('admin.users.index')" href="{{route('admin.users.index')}}" class="ml-8">{{ __('Usuarios') }}</x-jet-nav-link> @endcan @can('admin.categories.index')   <x-jet-nav-link :active="request()->routeIs('admin.categories.index')" href="{{route('admin.categories.index')}}" class="ml-8">{{ __('Categorias') }}</x-jet-nav-link> @endcan
        </h2>
    </x-slot>

<x-jet-authentication-card>

<x-slot name="logo">

</x-slot>

{!!Form::open(['route' => 'admin.products.store', 'autocomplete' => 'off', 'files' => true]) !!}

{!! Form::hidden('user_id',auth()->user()->id) !!}

<div class="relative ">
{!! Form::Label('name', 'Nombre: ') !!}
{!! Form::text('name', null, ['class' => 'rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent ', 'required']) !!}
</div>
<br>
<div class="flex gap-4 mb-2">
                    <div class="relative ">
    {!! Form::Label('slug', 'Slug: ') !!}
    {!! Form::text('slug', null, ['class' => 'disabled rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent', 'readonly' => 'readonly']) !!}
   </div>

        <div class="relative ">
     {!! Form::Label('stock', 'Stock: ') !!}
    {!! Form::number('stock', null, ['class' => 'rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent', 'required']) !!}

    </div>
</div>
<br>
<div class="flex gap-4 mb-2">
<div class="relative">
{!! Form::label('file', 'Imagen para el inventario: ') !!}
  {!! Form::file('file', ['class' => 'py-2 px-2 flex justify-center items-center  bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg', 'accept' => 'image/*']) !!}

</div>


<div class="relative ">
{!! Form::Label('category_id', 'Categoria: ') !!}
{!! Form::select('category_id', $category, null,['class' => 'form-control rounded-lg border-transparent border-gray-300'])!!}
</div>


</div>

<div class="flex w-full my-4">
{!! Form::Submit('Crear producto', ['class' => 'py-2 px-4  bg-blue-600 hover:bg-green-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ']) !!}
</div>


{!! Form::close() !!}


</x-jet-authentication-card>


</x-app-layout>
