<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Product::with('user')->latest('id')->paginate(5);
        return view('admin.products.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name', 'id');
        return view('admin.products.create', compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::create($request->all());
         if($request->file('file')){
           $url = Storage::put('products', $request->file('file'));
           $product->image()->create([
               'url' => $url
           ]);
         }

         return redirect()->route('admin.products.index', $product)->with('Exito','¡El producto fue creado con exito! ');
       }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::pluck('name', 'id');
        return view('admin.products.edit',compact('category', 'product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        if($request->file('file')){
            $url = Storage::put('products', $request->file('file'));
          if($product->image){
              Storage::delete($product->image->url);

              $product->image()->update([
               'url' => $url
           ]);
          }
          else{
              $product->image()->create([
                  'url' => $url
              ]);
          }
    }
    return redirect()->route('admin.products.index', $product)->with('Exito2','¡Se ha actualizado el producto con exito! ');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $product->delete();
        return redirect()->route('products.show')->with('Exito3', '¡Se elimino de manera exitosa el producto!');
    }
}
