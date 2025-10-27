
<?php
include_once('header.php');
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Categories</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Categories
                        </div>
                        <div class="panel-body">
                            <form  method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                      <label for="" class="form-label">Category Name</label>
                      <input type="name" name="cate_name"  class="form-control" id="exampleInputname" aria-describedby="emailHelp">
                    </div>
                    

                      <div class="mb-3">
                      <label for="" class="form-label">Category Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputimage">
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
