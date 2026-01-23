 @extends('admin.layout.structure')

@section('container')
 
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
						<h2 class="page-head-line">Add product </h2>
                        <div class="form-group">
                            <label>Enter product Name</label>
                              <input name="cate_name" name="text"class="form-control" type="text">
                        </div>
						
						 </div>
										<div class="form-group">
                                            <label>Upload product Image</label>
                                            <input name="cate_img" name="file"class="form-control" type="file">
                                        </div>
						
						
						<input type="submit" class="btn btn-danger btn-lg btn-block" value="submit" />
                    </div>
                </div>     
                 <!-- /. ROW  -->

              
                 <!-- /. ROW  -->           
    </div>
    @endsection