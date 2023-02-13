<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $products = Product::all();

    

        return view('Products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Createproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /* $product=new Product();

          $product->product_name=$request->input('Prdoductname');
          $product->price=$request->input('Price');
          $product->stock=$request->input('Stock');

        if ($request->file('image')) {
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            

            $filename = time() . "." . $extension;

            $file->move('upload/imagesproduct/',$filename);

            $product->pict=$filename;
        }
        else{
            return $request;
            $product->pict="";
        }
        $product->save();

         return view('welcome');

         */
        $product=new Product();

        $product->product_name=$request->input('Prdoductname');
        $product->price=$request->input('Price');
        $product->stock=$request->input('Stock');
        $product->description=$request->input('description');

       

       
        if ($request->hasfile('image')) {
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            

            $filename = time() . "." . $extension;

            $file->move('upload/imagesproduct/',$filename);

            $product->pict=$filename;
        }
        else{
            return $request;
            $product->pict="";
        }
        $product->save();

     

        return redirect()->route('productss.index')

                        ->with('success','Product created successfully.');               
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod=Product::find($id);
        return view("prodcutshow",compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod=Product::find($id);
        return view('updateproduct',compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod=Product::find($id);
        $request->validate([

            'Prdoductnamee' => 'required',

            'Pricee' => 'required',
            'Stocke' => 'required',
            'description'=>'required',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'upload/imagesproduct';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['pict'] = "$profileImage";

        }else{

            unset($input['pict']);

        }
        $prod->update([ "product_name" => $request->Prdoductnamee,
        "price" => $request->Pricee,
        "stock" => $request->Stocke,
        "description" => $request->description,
        ]);
        $prod->update($input);
        

    

        return redirect()->route('productss.index')

                        ->with('success','Product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod=Product::find($id);
        $prod->delete();
      

     

        return redirect()->route('productss.index');
    }
}
