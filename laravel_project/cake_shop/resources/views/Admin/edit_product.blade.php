@extends('admin.layout.structure')

@section('container')
 
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
						<h2 class="page-head-line">Edit product </h2>
                        

                        <form method="post" action="{{ url('/update_product/'.$product->id) }}" enctype="multipart/form-data">
                            @csrf

                        <div class="form-group">
                        <label>Enter product Name</label>
                        <input type="text" name="name"class="form-control" type="text" value="{{ $product->name }}">
                        </div>

                        <div class="form-group">
                        <label>Select Category</label>
                        <select name="cate_id" class="form-control">
                            <option value="{{ $product->cate_id }}">--Select Category--</option>
                            @foreach($catagories as $catagory)
                                <option value="{{ $catagory->id }}">{{ $catagory->name }}</option>
                            @endforeach
                        </select>
                        <br>

						<div class="form-group">
                            <label>Enter product Name</label>
                              <input type="text" name="discription"class="form-control" type="text" value="{{ $product->discription }}">
                        </div><div class="form-group">
                            <label>Enter product Name</label>
                              <input type="number" name="price"class="form-control" type="text" value="{{ $product->price }}">
                        </div>
						 </div>
                               <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Product Image</label><br>
                      <img class="mb-3" src="<?php echo url('upload/product/'.$product->image)?>" width="20%"   style="object-fit: cover; border-radius: 5px;">
                      <input type="file" name="image" class="form-control" id="exampleInputPassword1"  >
                    </div>



						<button type="submit" class="btn btn-primary">Edit product </button>
                    </form>
                    </div>
                </div>     
                 <!-- /. ROW  -->

              
                 <!-- /. ROW  -->           
</div>
    @endsection