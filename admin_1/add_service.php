
﻿<?php
include_once('header.php');
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Service</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add service
                        </div>
                        <div class="panel-body">
                          <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Service Name</label>
                      <textarea type="name" name="ser_name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div> 
                       
                    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Description</label>
                      <textarea  name="description"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>

                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Price</label>
                      <textarea  name="price"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Service Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputPassword1">
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
