
<?php

include_once('../website/model.php');  // 1 load model
  
class control extends model{   // 2 etends model for use of logic

    function __construct()
    {
        session_start();

        model::__construct();  // 3 call model __construct

        $path=$_SERVER['PATH_INFO'];

        switch($path){

            case 'admin-login':   
            include_once('admin-login.php');    
            break;
            
                case '/admin-login':
                    if (isset($_REQUEST['submit'])) {

                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];
                    $data = array(
                        "email" => $email,
                        "password" => $password
                    );
                    $res=$this->select_where('admin',$data);
                    
                    $chk=$res->num_rows; // login checj row wise condition 
                    if($chk==1) // 1 means true & 0 false
                    {  
                        $data=$res->fetch_object(); // data fetch single
                        //CREATE SESSION
                        $_SESSION['a_name']=$data->name;
                        $_SESSION['a_email']=$data->email;
                        $_SESSION['a_id']=$data->id;

                        echo "<script>
                            alert('Login Success!');
                            window.location='dashboard';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                            alert('Login Failed!');
                            window.location='admin-login';
                        </script>";
                    }
                } 

            include_once('admin-login.php');    
            break;

            case '/dashboard':
            include_once('dashboard.php');    
            break;

            case '/add_categories':
               
                 if(isset($_REQUEST['submit'])) {

                   $cate_name=$_REQUEST['cate_name'];

                   $image=$_FILES['image']['name'];

                   $path='assets/img/categories/'.$image;
                   $dup_img = $_FILES['image']['tmp_name']; 
                   move_uploaded_file($dup_img,$path);

                   $data=array(
                    "cate_name"=>$cate_name,
                    "image"=>$image
                    );

                   $res=$this->insert('categories',$data);
                   if($res)
                   {
                        echo "<script>
                            alert('Category Added Success!');
                        </script>";
                   }
                }
            include_once('add_categories.php');    
            break;

            case '/manage_categories':
                $cate_arr=$this->select('categories');        
                include_once('manage_categories.php');    
            break;

             case '/edit_categories':
				 if (isset($_REQUEST['edit_cate'])) {
                    $id = $_REQUEST['edit_cate'];
                    $where = array("id" => $id);
                    $res = $this->select_where('categories', $where);
                    $fetch=$res->fetch_object();
					
					 if (isset($_REQUEST['submit'])) {

						$cate_name = $_REQUEST['cate_name'];
						
						if($_FILES['image']['size']>0)
						{
							
							unlink('assets/img/categories/' . $fetch->cate_image);
							
							$cate_image = $_FILES['image']['name'];
							$path = 'assets/img/categories/' . $cate_image;
							$dup_img = $_FILES['cate_image']['tmp_name'];
							move_uploaded_file($dup_img, $path);

							$data = array("cate_name" => $cate_name, "image" => $cate_image);

							$res = $this->update('categories', $data, $where);
							if ($res) {
								echo "<script>
									alert('Category Updated Success!');
									window.location='manage_categories';
								</script>";
							}
						}
						else
						{
							$data = array("cate_name" => $cate_name);

							$res = $this->update('categories', $data, $where);
							if ($res) {
								echo "<script>
									alert('Category Updated Success!');
									window.location='manage_categories';
								</script>";
							}
						}
						
                }
					
                }
                include_once('edit_categories.php');
                break;	




            case '/add_service':
                 $ser_arr = $this->select('service');
                if (isset($_REQUEST['submit'])) {

                    $ser_name = $_REQUEST['ser_name'];
                   $description = $_REQUEST['description'];
                   $price = $_REQUEST['price'];

                   $image = $_FILES['image']['name'];

                    $path = 'assets/img/service/' . $image;
                    $dup_img = $_FILES['image']['tmp_name'];
                    move_uploaded_file($dup_img, $path);

                    $data = array(
                    "ser_name" => $ser_name,
                    "description" => $description,
                    "price" => $price,
                    "image" => $image
                    );

                    $res = $this->insert('service', $data);
                    if ($res) {
                        echo "<script>
                            alert('Service Added Success!');
                        </script>";
                    }
                }



            include_once('add_service.php');    
            break;
            
            case '/manage_service':
            $ser_arr=$this->select('service');      
            include_once('manage_service.php');    
            break;

             case '/edit_service':
				 if (isset($_REQUEST['edit_ser'])) {
                    $ser_id = $_REQUEST['edit_ser'];
                    $where = array("ser_id" => $ser_id);
                    $res = $this->select_where('service', $where);
                    $fetch=$res->fetch_object();
					
					 if (isset($_REQUEST['submit'])) {

						 $ser_name = $_REQUEST['ser_name'];
                        $description = $_REQUEST['description'];
                        $price = $_REQUEST['price'];
						
						if($_FILES['image']['size']>0)
						{
							
							unlink('assets/img/service/' . $fetch->image);
							
							$image = $_FILES['image']['name'];
							$path = 'assets/img/service/' . $image;
							$dup_img = $_FILES['image']['tmp_name'];
							move_uploaded_file($dup_img, $path);

							$data = array("ser_name" => $ser_name,
                                         "description" => $description,
                                         "price" => $price,
                                         "image" => $image
                                        
                                        
                                        );

							$res = $this->update('service', $data, $where);
							if ($res) {
								echo "<script>
									alert('Service Updated Success!');
									window.location='manage_service';
								</script>";
							}
						}
						else
						{
							 $data = array(
                                "ser_name" => $ser_name,
                                "description" => $description,
                                "price" => $price
                        
                        );

							$res = $this->update('service', $data, $where);
							if ($res) {
								echo "<script>
									alert('Service Updated Success!');
									window.location='manage_service';
								</script>";
							}
						}
						
                }
					
                }
                include_once('edit_service.php');
                break;	


            case '/manage_cart':
            include_once('manage_cart.php');    
            break;

            case '/manage_contact':
            $cont_arr=$this->select('contact_us');    
            include_once('manage_contact.php');    
            break;

            case '/manage_customers':
            $cust_arr=$this->select('customers'); 
            include_once('manage_customers.php');    
            break;

             case '/manage_order':
            include_once('manage_order.php');    
            break;

            case '/manage_feedback': 
            include_once('manage_feedback.php');    
            break;

            case '/admin_account':
            include_once('admin_account.php');    
            break;

             case '/delete':
                if (isset($_REQUEST['del_contact'])) {
                    $id = $_REQUEST['del_contact'];
                    $where = array("id" => $id);
                    $res = $this->delete_where('contact_us', $where);
                    if ($res) {
                        echo "<script>
                            alert('Contact Deleted Success!');
                            window.location='manage_contact';
                        </script>";
                    }
                }

                if (isset($_REQUEST['del_category'])) {
                    $id = $_REQUEST['del_category'];
                    $where = array("id" => $id);
					
					// get del image first then delete data
					$res = $this->select_where('categories', $where);
                    $fetch=$res->fetch_object();
					$old_img=$fetch->cate_image;
					
                    $res = $this->delete_where('categories', $where);
                    if ($res) {
						
						unlink('assets/images/categories/' . $old_img);
                        echo "<script>
                            alert('Contact Deleted Success!');
                             window.location='manage_categories';
                        </script>";
                    }
                }

                if (isset($_REQUEST['del_customers'])) {
                 $cust_id = $_REQUEST['del_customers'];
                    $where = array("cust_id" => $cust_id);
					
					
					
                    $res = $this->delete_where('customers', $where);
                    if ($res) {
						
						
                        echo "<script>
                            alert('Customer Deleted Success!');
                             window.location='manage_customers';
                        </script>";
                    }
                }

                if (isset($_REQUEST['del_service'])) {
                    $ser_id = $_REQUEST['del_service'];
                    $where = array("ser_id" => $ser_id);
					
					
					
                    $res = $this->delete_where('service', $where);
                    if ($res) {
						
						unlink('assets/img/service/' . $old_img);
                        echo "<script>
                            alert('Service Deleted Success!');
                             window.location='manage_service';
                        </script>";
                    }
                }
                
                break;
                case '/status':
                if (isset($_REQUEST['status_customers'])) {
					
                    $cust_id = $_REQUEST['status_customers'];
                    $where = array("cust_id" => $cust_id);
                    $res = $this->select_where('customers', $where);
					$fetch=$res->fetch_object();
					
					//echo $fetch->status;
						
					if($fetch->status=="Unblock")
					{
						$arr=array("status"=>"Block");
						$res=$this->update('customers', $arr, $where);
						if ($res) {
							
							unset($_SESSION['u_id']);
							unset($_SESSION['u_name']);
							unset($_SESSION['u_email']);
							echo "<script>
								alert('Customers Blocked Success!');
								window.location='manage_customers';
							</script>";
						}
					}
					else
					{
						$arr=array("status"=>"Unblock");
						$res=$this->update('customers', $arr, $where);
						if ($res) {
							echo "<script>
								alert('Customers Unblock Success!');
								window.location='manage_customers';
							</script>";
						}
					}
					
					
                }

                
                break;
				
				

        }
    }
}

$obj=new control;
?>
