  @extends('admin.layout.structure')

@section('container')
 
 
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 class="page-head-line">Manage Products </h2>  
							<table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#id</th>
                                    <th>Name</th>
                                    <th>cate_id</th>
                                    <th>discription</th>
                                    <th>price</th>
                                    <th>image</th>
                                    <th>create at</th>
                                    <th>Update at</th>

                                       <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($product as $product)
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->cate_id }}</td>
                                    <td>{{ $product->discription }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td><img src="{{ asset('upload/product/'.$product->image) }}" width="100px" alt="Image"></td>
                                   <th>{{ $product->created_at }}</th>
                                      <th>{{ $product->updated_at }}</th>

                                    <td class="text-center">
                                        <a href="edit_product/{{ $product->id }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="dlt_product/{{ $product->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this product?')">Delete</a>

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