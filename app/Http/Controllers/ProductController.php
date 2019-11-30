<?php

namespace edy\Http\Controllers;

use Illuminate\Http\Request;
use edy\Product;
use edy\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    //esta funcion muestra es la pagina de la tabla 
    public function index()
    {
    	$products=Product::orderBy('id','desc')->paginate();
    //carpeta products archivo index
    	return view('products.index',compact('products'));
    }

     public function create()
    {
       
        return view('products.create');
    }
    //la funcion create envia a store para guardar los datos
    public function store(ProductRequest $request)
    {
        $product = New Product;

        $product->name  =$request->name;
        $product->short =$request->short;
        $product->body  =$request->body;
        $product->save();
       return redirect()->route('products.index')
                                ->with('info','el producto ha sido guardado');
    }
    //editar
     public function edit($id)
    {
        $product=Product::find($id);
        return view('products.edit',compact('product'));
    }
    //la funcion edit envia a update para actualizar
     public function update(ProductRequest $request ,$id)
    {
        $product = Product::find($id);

        $product->name  =$request->name;
        $product->short =$request->short;
        $product->body  =$request->body;
        $product->save();
       return redirect()->route('products.index')
                                ->with('info','el producto fue actualizado');
    }
    //mostrar
    public function show($id)
    {
    	$product=Product::find($id);
    	return view('products.show',compact('product'));
    }//eliminar
    public function destroy($id)
    {
    	$product=Product::find($id);
    	$product->delete();

    	return back()->with('info','el producto fue eliminado');
    }
}
