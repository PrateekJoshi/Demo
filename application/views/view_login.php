<?php
$is_register=$this->session->userdata('register_name');
if($is_register){	         
          echo '<div class="alert alert-success" id="message">'.
    '<a href="index.php" class="close" data-dismiss="alert" id="inner-message">&times;</a>'.'
    <strong>Success!</strong>'.'Thanks for Registering.'.
'</div>';
    $this->load->helper('cookie');
    delete_cookie("ci_session");
      }

 $login_email=$this->session->userdata('email');
 if(!empty($login_email)){
  echo '<div class="alert alert-success" id="message">'.
    '<a href="index.php" class="close" data-dismiss="alert" id="inner-message">&times;</a>'.' You are registered ';
  echo  '<strong>'.$login_email[0]->email.'</strong>'.'</div>';
    $this->load->helper('cookie');
    delete_cookie("ci_session");
 }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Demo Web Application</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />      
    <style type="text/css">
  #box{
  	margin: 40px 40px;
  }
    </style>
  

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">Demo Web Application</a>
    </div>
    
  </div>
</div>

	 <div class="row pad-top row-same-height" id="box">
               
                <div class="col-md-6 col-xs-height">
                        <div class="panel panel-default ">
                            <div class="panel-heading" style="text-align:center;">
                        <strong>Register</strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="index.php/register/register_me"><br>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"  ></i></span>
                                            <input type="text" name="register_email" class="form-control" placeholder="Your Email" required/>
                                        </div>
                                         <div class="form-group input-group">
                                             <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" name="register_name" class="form-control" placeholder="Your Name" required/>
                                        </div>

                                         <div class="form-group input-group">
                                             <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="register_password" class="form-control" placeholder="Password" required/>
                                        </div>
                                     
                                     <div style="text-align:center;">
                                     <input type="submit" class="btn btn-success " name="register_button" value="Register Me" /></div>
                                    <hr />
                                   
                                    </form>
                            </div>


                           
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-height" >
                        <div class="panel panel-default ">
                            <div class="panel-heading" style="text-align:center;">
                        <strong>Login</strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="index.php/register/login"><br>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" name="login_email" class="form-control" placeholder="Your email" required/>
                                        </div>
                                         <div class="form-group input-group">
                                           <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="login_password" class="form-control" placeholder="Your Password" required/>
                                        </div><br>
                                      <div style="text-align:center;">
                                     <input type="submit" class="btn btn-success " name="register_button" value="Login" /></div><br>                        
                               
                                    
                                   
                                    </form><br>
                                      <div class="row ">
                                     <div class="col-md-6 ">
                                      <button class="btn btn-danger pull-left"><span><i class="fa fa-google">&nbsp;&nbsp;Sign in with google</i></span></button>
                                   </div>
                                    <div class="col-md-6 ">
                                  <button class="btn btn-primary pull-right"><span><i class="fa fa-facebook">&nbsp;&nbsp;Sign in with facebook</i></span></button>
                                     </div>
                                     </div>
                            </div>


                           
                        </div>
                    </div>
                
                
        </div>


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
   
    <script type="text/javascript">
    $('#message').fadeOut(5000);

	



    </script>
</body>
</html>
