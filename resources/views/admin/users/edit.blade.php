<x-guest-layout>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <x-jet-nav-link href="{{route('admin.users.index')}}" :active="request()->routeIs('admin.users.edit')">  {{ __('Usuarios') }} </x-jet-nav-link>  <x-jet-nav-link  href="{{route('admin.products.index')}}" class="ml-8">{{ __('Productos') }}</x-jet-nav-link>   <x-jet-nav-link  href="{{route('admin.categories.index')}}" class="ml-8">{{ __('Categorias') }}</x-jet-nav-link>  <x-jet-nav-link href="{{route('admin.roles.index')}}" class='ml-8'>{{ __('Roles') }}</x-jet-nav-link>
            </h2>
        </x-slot>

        <x-jet-authentication-card>
            <x-slot name="logo">

            </x-slot>

            <x-jet-validation-errors class="mb-4" />

                <h2 class="font-bold">Nombre del usuario: {{$user->name}}</h2>
                <h5 class="font-bold">Listado de roles</h5>
                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                 @foreach($role as $roles)
                 <div>
                     <label>
                         {!! Form::checkbox('roles[]', $roles->id, null, ['class'=>'mr-1 rounded-lg text-yellow-500']) !!}
                         {{$roles->name}}

                     </label>

                 </div>


                 @endforeach
                 <br>
                 {!! Form::submit('Asignar rol', ['class' => 'py-2 px-4  bg-blue-600 hover:bg-green-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg']) !!}



                {!!Form::close() !!}
            </div>
        </div>

    </x-jet-authentication-card>


  </x-guest-layout>
</x-app-layout>

