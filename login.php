


<?php
include('dataconnect.php');

if (isset($_POST['submit'])) {
   
    $email = $_POST['email'];
       $password = $_POST['password'];


  $q ="INSERT INTO login(email,password)
   VALUES ('$email','$password')";
  $query =mysqli_query($con,$q);
}

?>


<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">

body





.loginBox input[type="submit"]
{
    border:1px solid black;
    outline:none;
    height:40px;

    font-size:20px;
    background:#white;
    cursor:pointer;
    border-radius:20px;
    
}
.loginBox input[type="submit"]:hover
{
    background:#17a2b8;
    color:#262626;
}
.loginBox input[type="submit"]:hover
{
  background:#17a2b8;
  color:#262626;
}

    
        
    
    
    </style>
    </head>





        <body>
          <?php include'layout/nav.php';?>

         <div class="container-fluid">
          <div class="row">
        <div class="col-md-2"> <img src="./img/1054.jpg" class=" rounded-circle img-fluid" alt="Responsive image" style= "margin-top: 5px;"></div>

     <div class="col-md-10" style="color: red; font-size: 25px"><img src="./img/logo1.jpg" style="height: 30%; width: 100%; margin-left:" class="img-responsive"  style="font-size: 25px;"><marquee > bank user can request the donor to donate the blood to him and save someone life.
Online Blood Bank management system is to provide services for the people who are in need of blood by gettihelp from the donors who are interested in donating blood for the people. </marquee>
            </div>
       
        
  
      </div>
      
  
      </div>       



<?php include'layout/navber.php';?>












<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head> <script type="text/javascript">
# body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
        </script></head>




<body>
    <div id="login" style="background-image: url(./img/414.jpg);">

        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <center>   <img src="img/sanjay.png" style="height: 50px; margin-top: 15px;"></center>

                            <h3 class="text-center text-info"></h3>
                            <div class="form-group">

                                <label for="email" class="text-black">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-black">password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                           <center> <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div></center>
                            <div id="register-link" class="text-center">
                                <a href="regi.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include'layout/footer.php';?>
