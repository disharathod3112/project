 @extends('admin.layout.structure')

@section('container')
 
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
						<h2 class="page-head-line">Add Categories </h2>
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <br>
                        
                          <form method="post" action="{{url('category')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label>Enter Categories Name</label>
                          
                              <input name="name" name="text"class="form-control" type="text">>
                            <p class="help-block">Help text here.</p>
                        </div>
						
						 </div>
										<div class="form-group">
                                            <label>Upload Categories Image</label>
                                            <input name="image" name="file"class="form-control" type="file">
                                        </div>
						
						
						 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                         </form>
                    </div>
                </div>     
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
    @endsection