<?php
include_once('header.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Contact</h2>   
                        <h5>Welcome Dishali Rathod , Love to see you back. </h5>
                       
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
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
				  <?php
				foreach($cont_arr as $data)
				{
				?>

				  <tr>
					<td><?php echo $data->id;?></td>
					<td><?php echo $data->name;?></td>
                    <td><?php echo $data->subject;?></td>
					<td><?php echo $data->email;?></td>
					<td><?php echo $data->mob;?></td>
                    <td><?php echo $data->message;?></td>
					<td  class="text-center">
						<a href="" class="btn btn-primary">Edit</a>
						<a href="delete?del_contact=<?php echo $data->id;?>" class="btn btn-danger">Delete</a>
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
