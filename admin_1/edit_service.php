
<?php
include_once('header.php');
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Service</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit service
                        </div>
                        <div class="panel-body">
                          <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Service Name</label>
                      <input type="text" name="ser_name" value="<?php echo $fetch->ser_name;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div> 
                       
                    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Description</label>
                     <input type="text"  name="description" value="<?php echo $fetch->description;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Price</label>
                      <input type="text" name="price" value="<?php echo $fetch->price;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Service Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                      <img src="assets/img/service/<?php echo $fetch->image;?>" width="100px" alt="">
                    </div>
                   
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>

        </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <?php
   include_once('footer.php');
   ?>
