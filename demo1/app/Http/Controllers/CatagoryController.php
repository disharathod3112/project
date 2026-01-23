<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           return view('admin.manage_categories');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.add_categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data= new catagory;

      $data->name = $request->name;
      $data->discription = $request->discription;

    if ($request->hasFile('image')) {
    $image = $request->file('image');
    $filename = time().'_img.'.$image->getClientOriginalExtension();
    $image->move(public_path('upload/category'), $filename);
    $data->image = $filename;
    }
      $data->save();

       Alert::success('Congrats', ' Category Added Successfully');

      return redirect('/manage_categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(catagory $catagory)
    {
      $data=catagory::all();
      return view('admin.manage_categories',["catagory"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catagory $catagory,$id)
    {
       $data = catagory::find($id);
          return view('admin.edit_category',["catagory" => $data ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, catagory $catagory)
    {
        $data=catagory::find($id);

      $data->name = $request->name;
      $data->discription = $request->discription;


       if($request->hasFile('image'))
        {
            unlink('upload/category/'.$data->image);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_img.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/category'), $filename);
            $data->image = $filename;
        }
    }
  }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catagory $catagory,$id)
    {
       $data=catagory::find($id);
       $data->delete();
       return redirect('/manage_categories');;
}
}




