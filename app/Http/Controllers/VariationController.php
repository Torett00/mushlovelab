<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variation;
use App\Models\Product;
class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Variationss = Variation::all();

    

        return view('variation',compact('Variationss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Products = Product::all();
        return view('createvariation',compact('Products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request-> validate([
        
            'specie'=>'required',
            'product_id'=>'required',
            'description','nullable',
             
           ]);
             
           Variation::create($request->all());
           $Variationss = Variation::all();

    

           return view('variation',compact('Variationss'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Variatione=Variation::find($id);
        $Variatione->delete();
      

     

        return redirect()->route('VariationController.index');
    }
}
