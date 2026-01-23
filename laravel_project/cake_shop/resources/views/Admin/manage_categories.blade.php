  @extends('admin.layout.structure')

@section('container')
 
 
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 class="page-head-line"> Categories </h2>  
							<p class="mb-0">Manage Categories </p>
					@if(session('delete'))
					<h3 style="color:green" class="float-end m-3">{{session('delete')}} is Deleted success</h3>
					@endif
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#ID</th>
								<th>Categories Name</th>
								<th>Categories Image</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
                            <tbody>

							@foreach($catagory as $d)
							<tr>
								<td>{{$d->id}}</td>
								<td>{{$d->name}}</td>
								<td><img src="<?php echo url('upload/category/'.$d->image)?>" width="50px"> </td>

								<td class="text-center">
									<a href="#" class="btn btn-primary">Edit</a>
									<a href="/dlt_category/{{$d->id}}" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
                        </table>

                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>

    @endsection