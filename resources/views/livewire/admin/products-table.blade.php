<div>

<div class="container max-w-6xl px-4 mx-auto sm:px-8">
    <div class="py-8">
        <div class="grid-cols-2 px-8 py-6 -mx-4 overflow-x-auto sm:-mx-16 sm:px-8 md:grid-cols-2">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                    {{--Buscador--}}
            <div class="bg-white rounded-lg">
                <div class="pt-1 card-header">
                    <input wire:model="search" class="px-2 py-2 mx-1 text-base text-gray-700 placeholder-gray-400 bg-white border border-purple-500 rounded-lg shadow-sm appearance-none flex-2 focus:outline-none focus:ring-1 focus:ring-purple-600 focus:border-transparent" placeholder="Buscar">
               </div>

                 @if($producto->count())
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
                                STOCK
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                FECHA SUBIDA
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                PUBLICADO POR
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                FOTO ARTICULO
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($producto as $product)
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$product->id}}
                                        </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                     {{$product->name}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$product->stock}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">

                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$product->created_at}}
                                    </p>

                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$product->user->name}}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <a href="#" class="relative block">
                                            <img alt="profil"  @if($product->image) src="{{Storage::url($product->image->url)}}" @else src="/storage/image/box.png"   @endif  class="object-cover w-10 h-10 mx-auto rounded"/>
                                        </a>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">

                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                    @else
            <div class="bg-white card-body">
                <center><strong class="text-lg">No se encuentran resultados de su busqueda</strong></center>
            </div>
            @endif
       </table>

    <div class="bg-white card-footer">
        {{$producto->links()}}
    </div>


</div>
