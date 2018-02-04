<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
         //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'product' =>     'required',
            'description' => 'required',
            'category'    => 'required',
            'image_a'     => 'required|max:5120',
            'image_b'     => 'required|max:5120',
            'image_c'     => 'required|max:5120',
        ]);


        // Handle File Upload
        if($request->hasFile('image_a')){
            //Get file name with the extention
            $fileNameWithExt = $request->file('image_a')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extention = $request->file('image_a')->getClientOriginalExtension();
            // Filename to store
            $file_a = $filename . '_'. time() .'.'.$extention;
            // Upload Image
            $path = $request->file('image_a')->storeAs('public/images', $file_a);  
        }
        
        if($request->hasFile('image_b')){
            //Get file name with the extention
            $fileNameWithExt = $request->file('image_b')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extention = $request->file('image_b')->getClientOriginalExtension();
            // Filename to store
            $file_b = $filename . '_'. time() .'.'.$extention;
            // Upload Image
            $path = $request->file('image_b')->storeAs('public/images', $file_b);  
        }
        
        if($request->hasFile('image_c')){
            //Get file name with the extention
            $fileNameWithExt = $request->file('image_c')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extention = $request->file('image_c')->getClientOriginalExtension();
            // Filename to store
            $file_c = $filename . '_'. time() .'.'.$extention;
            // Upload Image
            $path = $request->file('image_c')->storeAs('public/images', $file_c);  
        }
        
        if($request->hasFile('image_d')){
            //Get file name with the extention
            $fileNameWithExt = $request->file('image_d')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extention = $request->file('image_d')->getClientOriginalExtension();
            // Filename to store
            $file_d = $filename . '_'. time() .'.'.$extention;
            // Upload Image
            $path = $request->file('image_d')->storeAs('public/images', $file_d);  
        }
        else{
            $file_d = 'noimage.jpg';
        }

        // Create Product
        $product = new Product;
        $product->product_name = $request->input('product');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->image_a = $file_a;
        $product->image_b = $file_b;
        $product->image_c = $file_c;
        $product->image_d = $file_d;

        // Handle File Upload


        $product->save();

        return redirect('/store')->with('success', 'Product Added');
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
        $product = Product::find($id);
        return view('pages.product')->with('product', $product);;
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
        $product = Product::find($id);
        return view('pages.edit')->with('product', $product);;
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
        $this->validate($request ,[
            'product' =>     'required',
            'description' => 'required',
            'category'    => 'required'
        ]);

        // Create Product
        $product = Product::find($id);
        $product->product_name = $request->input('product');
        $product->description = $request->input('description');
        $product->category = $request->input('category');

        $product->save();

        return redirect('store')->with('success', 'Product Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('success', 'Product Deleted');
    }

    public function category_product($category)
    {
        $products = Product::orderBy('created_at', 'desc')->where('category', $category)->paginate(5);
        return view('pages.category')->with('products', $products);
    }
}










