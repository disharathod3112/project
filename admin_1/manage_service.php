<?php
include_once('header.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage service</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ser_name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
				foreach($ser_arr as $data)
				{
				?>

				  <tr>
					<td><?php echo $data->ser_id;?></td>
					<td><?php echo $data->ser_name;?></td>
                    <td> <textarea  name="description"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> <?php echo $data->description;?></textarea></td>
                    <td><?php echo $data->price;?></td>
                    <td><img src="assets/img/service/<?php echo $data->image;?>" width="100px" alt=""></td>
                    

					<td  class="text-center">
						<a href="edit_service?edit_ser=<?php echo $data->ser_id;?>"class="btn btn-primary">Edit</a>
						<a href="delete?del_service=<?php echo $data->ser_id;?>" class="btn btn-danger">Delete</a>
					</td>
				  </tr>
				<?php
				}
				?>  
				</tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
<?php
include_once('footer.php');
?>
