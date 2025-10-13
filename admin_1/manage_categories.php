<?php
include_once('header.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Categories</h2>   
                       
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
				foreach($cate_arr as $data)
				{
				?>

				  <tr>
					<td><?php echo $data->id;?></td>
					<td><?php echo $data->cate_name;?></td>
                    <td><img src="assets/img/categories/<?php echo $data->image;?>" width="100px"> </td>

					
					<td  class="text-center">
						<a href="edit_categories?edit_cate=<?php echo $data->id;?>" class="btn btn-primary">Edit</a>
						<a href="delete?del_category=<?php echo $data->id;?>" class="btn btn-danger">Delete</a>
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
