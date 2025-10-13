<?php
include_once('header.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Customers</h2>   
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
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Mobile</th>
                                    </tr>
                                </thead>
                               <tbody>
				  <?php
				foreach($cust_arr as $data)
				{
				?>

				  <tr>
					<td><?php echo $data->cust_id;?></td>
					<td><?php echo $data->cust_name;?></td>
					<td><?php echo $data->email;?></td>
                    <td><?php echo $data->password;?></td>
					<td><?php echo $data->mob;?></td>
					
					
					<td  class="text-center">
						<a href="status?status_customers=<?php echo $data->cust_id;?>" class="btn btn-primary"><?php echo $data->status;?></a>
						<a href="delete?del_customers=<?php echo $data->cust_id;?>" onclick="on_confirm()" class="btn btn-danger">Delete</a>
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
            <script>
                function on_confirm()
{
	var ans=confirm('Are you sure want to delete'); // ok & cancel
	if(ans==true)
	{
		alert('Delete Succes');
	}
}
                </script>
<?php
include_once('footer.php');
?>
