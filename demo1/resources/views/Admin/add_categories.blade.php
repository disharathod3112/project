 @extends('admin.layout.structure')

@section('container')
 
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
						<h2 class="page-head-line">Add Categories </h2>
                        <div class="form-group">
                            <label>Enter Categories Name</label>
                              <input name="cate_name" name="text"class="form-control" type="text">>
                            <p class="help-block">Help text here.</p>
                        </div>
						
						 </div>
										<div class="form-group">
                                            <label>Upload Categories Image</label>
                                            <input name="cate_img" name="file"class="form-control" type="file">
                                        </div>
						
						
						<input type="submit" class="btn btn-danger btn-lg btn-block" value="submit" />
                    </div>
                </div>     
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
    @endsection