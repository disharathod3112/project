<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        // Fetch categories from DB
        $categories = Category::all();

        // Pass categories to the view
        return view('admin.add_product', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'pro_name' => 'required|string|max:255',
        'cate_id' => 'required|integer',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    $data = new Product;
    $data->pro_name = $request->pro_name;
    $data->cate_id = $request->cate_id;
    $data->description = $request->description;
    $data->price = $request->price;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time().'_img.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/product'), $filename);
        $data->image = $filename;
    }

    $data->save();
    Alert::success('Congrats', ' Product added successfully!');
    return redirect('/manage_product');
}

//====product===//
    public function service(product $product)
    {

     $data=$product::all();

       $categories = Category::all();

     return view('website.service' , compact('categories') , ["product" => $data ]);

    
    }



//====product===//
    public function product(product $product,$id)
    {


         $data=product::where('cate_id',$id)->get();  // select * from services
        return view('website.product', ["product" => $data ]);

   // $data = product::find($id);
    //$categories = Category::all();

     //return view('website.product' , compact('categories') , ["product" => $data ]);

    
    }

    //====single_product====//

    public function single_product(product $product,$id)
    {

       $data = product::find($id);
       $categories = Category::all();

     return view('website.single_product' , compact('categories') , ["product" => $data ]);

    
    }

    

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */

    public function show(product $product)
    {
        $data=$product::all();



      return view('admin.manage_product',["product"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product,$id)
    {
         $data = product::find($id);

          // Fetch categories from DB
        $categories = Category::all();

         
        return view('admin.edit_product', compact('categories') , ["product" => $data ]);
    }


      
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product, $id)
    {       
        $request->validate([
            'pro_name' => 'required|string|max:255',
            'cate_id' => 'required|integer', // dropdown version
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data=product::find($id);

        $data->pro_name = $request->pro_name;
        $data->cate_id = $request->cate_id; // single category
        $data->description = $request->description;
        $data->price = $request->price;

      if($request->hasFile('image'))
        {
            unlink('upload/product/'.$data->image);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_img.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/product'), $filename);
            $data->image = $filename;
        }
    }

        $data->update();

        Alert::success('Congrats', ' Product Updeted successfully!');
        return redirect('/manage_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,$id)
    {
        $data=product::find($id); // find se get single data
       if ($data->image && file_exists(public_path('upload/product/'.$data->image))) {
        unlink(public_path('upload/product/'.$data->image));
    }

        $data->delete();

        Alert::warning('Warning', 'Product deleted successfully!');
         return back();

    }
}
