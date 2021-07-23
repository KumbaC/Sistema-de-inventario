<x-app-layout>
    <div class="max-w-4xl px-2 py-8 mx-auto sm:px-6  lg:px-12">
        <h1 class="text-3xl font-bold text-center upercase">Categoria: {{$category->name}}</h1>
    @foreach($products as $product)
    <article class="mb-8 overflow-hidden bg-white rounded-lg shadow-lg">
        <img class="object-center mx-auto sm:px-5 lg:px-25 sm:ml-40 md:ml-40 lg:ml-60 w-80 h-80 flex" @if($product->image) src="{{Storage::url($product->image->url)}}" @else src='/storage/image/box.png' @endif>
        <div class="px-6 py-4">

            <div class="px-6 pt-4 pb-2">


                <a href="#" class="inline-block px-3 py-1 mr-2 text-sm text-gray-700 bg-gray-200 rounded-full">Nombre del producto: {{$product->name}}</a>  <a href="#" class="inline-block px-3 py-1 mr-2 text-sm text-gray-700 bg-gray-200 rounded-full">Stock: {{ $product->stock }}</a>


            </div>

    </article>

    @endforeach
    <div class="mt-4">
        {{$products->links()}}
    </div>
    </div>
 </x-app-layout>
