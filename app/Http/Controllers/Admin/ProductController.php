<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); //listado
    }
    public function create()
    {
        return view('admin.products.create');   // formulario de registro
    }
    public function store(Request $request)
    {
        //return view(''); // registrar el nuevo producto
        //dd($resquest->all()); para ver que llego antes de enviar grabar
    //  validar los datos antes de guardar
        $messages =[
            'name.required' => 'Es necesario registrar el nombre del Producto',
            'name.min' => 'El nombre del Producto debe tener al menos 3 caracteres',
            'description.required' => 'Es necesario registrar la descripcion del Producto',
            'description.max' => 'La descripcion del Producto solo adminite hasta 200 caracteres',

            'price.required' => 'Es necesario registrar el precio del Producto',
            'price.numeric' => 'El valor capturado debe ser numerico',
            'price.min' => 'no se adminiten valores negativos'
        ];
        $rules =[
            'name'=>'required|min:3',
            'description'=>'required|max:200',
            'price'=>'required|numeric|min:0'
        ];
        $this->validate($request,$rules,$messages);

        $product= new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save();
        return redirect('/admin/products');
    }

    public function edit($id)
    {
        //return "Mostrar el id que llega con id $id";
        $product=Product::find($id);
        return view('admin.products.edit')->with(compact('product'));   // formulario de registro
    }
    public function update(Request $request, $id)
    {
        //return view(''); // registrar el nuevo producto
        //dd($resquest->all()); para ver que llego antes de enviar grabar
        $messages =[
            'name.required' => 'Es necesario registrar el nombre del Producto',
            'name.min' => 'El nombre del Producto debe tener al menos 3 caracteres',
            'description.required' => 'Es necesario registrar la descripcion del Producto',
            'description.max' => 'La descripcion del Producto solo adminite hasta 200 caracteres',

            'price.required' => 'Es necesario registrar el precio del Producto',
            'price.numeric' => 'El valor capturado debe ser numerico',
            'price.min' => 'no se adminiten valores negativos'
        ];
        $rules =[
            'name'=>'required|min:3',
            'description'=>'required|max:200',
            'price'=>'required|numeric|min:0'
        ];
        $this->validate($request,$rules,$messages);


        
        $product=  Product::find($id);
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save(); //update
        return redirect('/admin/products');
    }

    public function destroy($id)
    {
        //return view(''); // registrar el nuevo producto
        //dd($resquest->all()); para ver que llego antes de enviar grabar
        $product=  Product::find($id);
        $product->delete(); //update
        return back();
    }

}

