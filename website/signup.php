<?php
if(isset($_SESSION['u_id']))
{
  echo "<script>
      window.location='index';
  </script>";
}
include_once('header.php');

?>

<section class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-text">
          <h4>Wellcome to disha tech</h4>
          <h1>Signup Us</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="contact-us" id="contact-section">
  <div class="container">
    <div class="row">

      <div class="offset-md-2 col-lg-8 mb-5">
        <form  method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h4>Signup <em>Here</em></h4>
              </div>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="name" name="cust_name" class="form-control mb-3" id="name" placeholder="Full Name" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="emai;" name="email" class="form-control mb-3" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              </fieldset>
            </div>
             <div class="col-lg-12">
              <fieldset>
                <input type="number" name="mob" class="form-control mb-3" placeholder="Enter mobile Number" required="">
              </fieldset>
            </div>

            <div class="col-lg-12">
              <fieldset>
                <input type="password;" name="password" class="form-control mb-3" placeholder="Enter password" required="">
              </fieldset>
            </div>

           
            <div class="col-lg-6">
              <a href="login">If you already registered then Login Here</a>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <button type="submit" name="submit" class="btn btn-danger">Signup</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>



<?php
include_once('footer.php');
?>