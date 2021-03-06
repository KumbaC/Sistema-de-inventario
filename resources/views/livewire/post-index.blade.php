<div>
    <x-app-layout>
        @if(session('Exito3'))
        <div class="py-4 -mt-2 text-center bg-red-900 lg:px-4" x-data="{ show: true }" x-show="show">
            <div class="flex items-center p-2 leading-none text-indigo-100 bg-red-800 lg:rounded-full lg:inline-flex" role="alert">
              <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-red-500 rounded-full">¬°Eliminado!</span>
              <span class="flex-auto mr-2 font-semibold text-left">{{session('Exito3')}}</span>
              <svg class="w-4 h-4 opacity-75 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
            <button type="button" class="px-2 py-1 font-bold text-white bg-red-500 rounded-full close hover:bg-white" @click="show = false" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
    @endif
        <div class="px-2 py-8 mx-auto max-w-7xl sm:px-6 lg:px-12">
   <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
     @foreach($products as $producto)
     <article class="w-full bg-center bg-cover h-80 @if($loop->first) md:col-span-1  @endif" @if($producto->image) style="background-image: url({{Storage::url($producto->image->url)}})" @else style="background-image: url(/storage/image/box.png)"   @endif>
   <div class="flex flex-col justify-center w-full h-full px-8">

    <div class="inline-flex items-center bg-white leading-none ${props.textColor} rounded-full p-2 shadow text-teal text-sm">
        <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-red-600 rounded-full">
            PRODUCTO
        </span>
        <span class="inline-flex px-2 text-black">
            {{$producto->name}}
        </span>
    </div>


     <div class="inline-flex items-center bg-white leading-none ${props.textColor} rounded-full p-2 shadow text-teal text-sm">
        <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-gray-700 rounded-full">
            STOCK :
        </span>
        <span class="inline-flex px-2 text-gray-700">
            {{$producto->stock}}
        </span>
    </div>
     @can('admin.products.index')
     <a href="{{route('admin.products.edit', $producto)}}"><button type="button" class="grid items-center justify-center w-12 h-12 px-4 py-2 mt-12 text-base font-semibold text-center text-white transition duration-200 ease-in bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2">
        <svg width="20" height="20" fill="currentColor" class="w-6 h-6 mx-auto text-white" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
            </path>
        </svg>
    </a></button>
    <form action="{{route("admin.products.destroy", $producto)}}" method="POST">
        @csrf
        @method('delete')
    <button class="grid items-center justify-center w-12 h-12 px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-red-600 rounded-lg shadow-md hover:bg-red-700 focus:ring-blue-500 focus:ring-offset-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 " wire:click="$emit('deleteProduct', {{$producto->id}})">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 text-white" viewBox="0 0 1792 1792">
            <path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z">
            </path>
        </svg>
    </button>
</form>
@endcan
   </div>


    </article>
    @endforeach

   </div>
   <div class="mt-4 ">
       {{$products->links()}}
   </div>
</div>
</x-app-layout>

     
@livewireScripts



</div>
