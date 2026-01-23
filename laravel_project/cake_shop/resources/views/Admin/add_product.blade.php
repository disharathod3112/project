 @extends('admin.layout.structure')

@section('container')
 
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
						<h2 class="page-head-line">Add product </h2>
                        

                        <form method="post" action="{{ url('/product') }}" enctype="multipart/form-data">
                            @csrf

                        <div class="form-group">
                        <label>Enter product Name</label>
                        <input type="text" name="name"class="form-control" type="text">
                        </div>

                        <div class="form-group">
                        <label>Select Category</label>
                        <select name="cate_id" class="form-control">
                            <option value="">--Select Category--</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <br>

						<div class="form-group">
                            <label>discription</label>
                              <input type="text" name="discription"class="form-control" type="text">
                        </div><div class="form-group">
                            <label>price</label>
                              <input type="number" name="price"class="form-control" type="text">
                        </div>
						 </div>
										<div class="form-group">
                                            <label>Upload product Image</label>
                                            <input name="image" name="file"class="form-control" type="file">
                                        </div>
						
						
						<button type="submit" class="btn btn-primary">Add product </button>
                    </form>
                    </div>
                </div>     
                 <!-- /. ROW  -->

              
                 <!-- /. ROW  -->           
</div>
    @endsection