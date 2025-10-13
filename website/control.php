
<?php

include_once('model.php');   // 1 load model

class control extends model
{   // 2 etends model for use of logic

    function __construct()
    {
         session_start();
         model::__construct();  // 3 call model __construct

         $path=$_SERVER['PATH_INFO'];
         
         switch($path){

            case '/index':
                $serv_arr=$this->select('service');
            include_once('index.php');
            break;

            case '/about':
            include_once('about.php');
            break;

            case '/course':
            include_once('course.php');
            break;

            case '/services':
            $serv_arr=$this->select('service');    
            
            include_once('service.php');
            break;

            case '/projects':
            include_once('project.php');
            break;

            case '/blog':
            include_once('blog.php');
            break;

             case '/team':
            include_once('team.php');
            break;

             case '/testimonial':
            include_once('testimonial.php');
            break;

             case '/404':
            include_once('404.php');
            break;


            case '/contact':
                if (isset($_REQUEST['submit'])) {

                    $name = $_REQUEST['name'];
                    $subject = $_REQUEST['subject'];
                    $email = $_REQUEST['email'];
                    $mob = $_REQUEST['mob'];
                     $message = $_REQUEST['message'];

                   

                    $data = array(
                        "name" => $name,
                        "subject" => $subject,
                        "email" => $email,
                        "mob" => $mob,
                        "message" => $message,
                    );

                    $res = $this->insert('contact_us', $data);
                    if ($res) {
                        echo "<script>
                            alert('massage send Succesfully!');
                            window.location='contact';
                        </script>";
                    } else {
                        echo "Not succeess";
                    }
                }
            include_once('contact.php');
            break;

            case '/signup':
                    if (isset($_REQUEST['submit'])) {
                    $cust_name = $_REQUEST['cust_name'];
                    $email = $_REQUEST['email'];
                    $mob = $_REQUEST['mob'];
                    $password = md5($_REQUEST['password']);

                   

                    $data = array(
                        "cust_name" => $cust_name,
                        "email" => $email,
                        "mob" => $mob,
                        "password" => $password,
                    );

                    $res = $this->insert('customers', $data);
                    if ($res) {
                        echo "<script>
                            alert('Signup Success!');
                            window.location='login';
                        </script>";
                    } else {
                        echo "Not succeess";
                    }
                }
                include_once('signup.php');
                break;




            case '/login':
                if (isset($_REQUEST['submit'])) {

                    $email = $_REQUEST['email'];
                    $password = md5($_REQUEST['password']);
                    $data = array(
                        "email" => $email,
                        "password" => $password
                    );
                    $res=$this->select_where('customers',$data);
                    $chk=$res->num_rows; 
                    if($chk==1) // 1 means true & 0 false
                    {
                        $data=$res->fetch_object(); // data fetch single
                        //CREATE SESSION
                        $_SESSION['u_name']=$data->cust_name;
                        $_SESSION['u_email']=$data->email;
                        $_SESSION['u_id']=$data->cust_id;


                        echo "<script>
                            alert('Login Success!');
                            window.location='index';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                            alert('Login Failed!');
                            window.location='login';
                        </script>";
                    }
                }

            include_once('login.php');
            break;

            case '/logout':
                
                    unset($_SESSION['u_id']);
                    unset($_SESSION['u_name']);
                    unset($_SESSION['u_email']);

                    //session_destroy();
                     echo "<script>
                            alert('Logout Success!');
                            window.location='index';
                        </script>";
                break;
				
            case '/view_more' :
            $serv_arr=$this->select('service'); 
                if (isset($_REQUEST['read_more'])){
                    $id= $_REQUEST['read_more'];
                    $where = array ("ser_id" => $id);
                    $res= $this->select_where('service', $where);
                    $fetch=$res->fetch_object();
                }
            include_once('view_more.php');
            break;
        

         }
    }

}

$obj=new control;
?>
 