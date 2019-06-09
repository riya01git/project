 <?php
include('dataconnect.php');

if (isset($_POST['request_submit'])) {
   
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Blood_Group = $_POST['Blood_Group'];
     $Age = $_POST['Age'];
     $When_Need_Blood = $_POST['When_Need_Blood'];
     $Blood_Unit = $_POST['Blood_Unit'];
     $Email = $_POST['Email'];
      $Mobile_Number = $_POST['Mobile_Number'];
      $Hospital_Name = $_POST['Hospital_Name'];
      $City = $_POST['City'];
 



  $q ="INSERT INTO doner(Name,Address,Blood_Group,Age,When_Need_Blood,Blood_Unit,Email,Mobile_Number,Hospital_Name,City)
   VALUES ('$Name','$Address','$Blood_Group','$Age','$When_Need_Blood','$Blood_Unit','$Email','$Mobile_Number','$Hospital_Name','$City')";
  $query =mysqli_query($con,$q);
}

?>




 
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">


    </style>
    </head>


<?php include'layout/nav.php';?>


        <body>
         <div class="container-fluid">
          <div class="row">
        <div class="col-md-2"> <img src="./img/1054.jpg" class=" rounded-circle img-fluid" alt="Responsive image" style=" margin-top: 5px;"></div>
          
       <div class="col-md-10" style="color: red; font-size: 25px"><img src="./img/logo1.jpg" style="height: 30%; width: 100%; margin-left:" class="img-responsive"  style="font-size: 25px;"><marquee > bank user can request the donor to donate the blood to him and save someone life.
Online Blood Bank management system is to provide services for the people who are in need of blood by gettihelp from the donors who are interested in donating blood for the people. </marquee>
            </div>
         
        
  
      </div>
      
  
      </div>
<!DOCTYPE html>
<html>
<head>
  <title>home</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/bg.css">
<style >
  
  
 </head>
</style>
<body>


<div class="container-flude">

 <div class="css">

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="homepage.php" style="margin-left: 8%; color: white;">Home<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="login1.php" style="margin-left: 3%; color: white;">Login<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="doner.php" style="margin-left: 3%;color: white;">DonarRegistaion<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="bloodrequest.php" style="margin-left: 3%;color: white;">BloodRequest<span class="sr-only">(current)</span></a>
       <a class="nav-item nav-link active" href="viewrequest.php" style="margin-left: 3%;color: white;">ViewRequest<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="hospital.php" style="margin-left: 3%; color: white;">HospitalRequest <span class="sr-only">(current)</span></a>
      
      
      <a class="nav-item nav-link active" href="advi.php" style="margin-left: 3%; color: white;">Advertisement <span class="sr-only">(current)</span></a>
      
      <a class="nav-item nav-link active" href="about.php" style="margin-left: 3%;color: white;">About<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="feedback.php" style="margin-left: 3%; color: white;">Feedback<span class="sr-only">(current)</span></a>
    </div></div>

</nav> 
</div></div>
</body></html>





     
        






 <html lang="en-US"><head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>doner</title>
<link rel="dns-prefetch" href="//www.google.com">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="IDonatePro » Feed" href="http://themeatelier.net/wp-plugins/idonate-plugin/feed/">
<link rel="alternate" type="application/rss+xml" title="IDonatePro » Comments Feed" href="http://themeatelier.net/wp-plugins/idonate-plugin/comments/feed/">
        <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/api2/v1552285980763/recaptcha__en.js"></script><script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/themeatelier.net\/wp-plugins\/idonate-plugin\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.10"}};
            !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
        </script><script src="http://themeatelier.net/wp-plugins/idonate-plugin/wp-includes/js/wp-emoji-release.min.js?ver=4.9.10" type="text/javascript" defer=""></script>
        <style type="text/css">

</style>
<link rel="stylesheet" id="bdonate-google-font-css" href="//fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700|Work+Sans:300,400,500,600" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-css" href="http://themeatelier.net/wp-plugins/idonate-plugin/wp-content/themes/bdonate/css/bootstrap.min.css?ver=4.1.3" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="http://themeatelier.net/wp-plugins/idonate-plugin/wp-content/themes/bdonate/css/font-awesome.min.css?ver=4.6.2" type="text/css" media="all">
<link rel="stylesheet" id="ico-font-css" href="http://themeatelier.net/wp-plugins/idonate-plugin/wp-content/themes/bdonate/css/icofont.min.css?ver=4.6.2" type="text/css" media="all">
<link rel="stylesheet" id="bdonate-css" href="http://themeatelier.net/wp-plugins/idonate-plugin/wp-content/themes/bdonate/css/bdonate.css?ver=1.0" type="text/css" media="all">
<link rel="stylesheet" id="bdonate-responsive-css" href="http://themeatelier.net/wp-plugins/idonate-plugin/wp-content/themes/bdonate/css/bdonate-responsive.css?ver=1.0" type="text/css" media="all">
<link rel="stylesheet" id="bdonate-style-css" href="http://themeatelier.net/wp-plugins/idonate-plugin/wp-content/themes/bdonate/style.css?ver=4.9.10" type="text/css" media="all">
<link rel="stylesheet" id="color-schemes-css" href="http://themeatelier.net/wp-plugins/idonate-plugin/wp-content/themes/bdonate/css/color-schemes.css?ver=4.9.10" type="text/css" media="all">
<style id="color-schemes-inline-css" type="text/css">

        a, 
        .section-title h2 span, 
        .typed-cursor, 
        .media-icon i, 
        .featured-package .primary-btn, 
        .header .navbar-nav>li.active>a, 
        .header .navbar-nav>li>a:hover, 
        .header .navbar-nav>li>a:focus, 
        .how-works-item .icon-outer {
          color: ;
        }
        

       
<script typotica="" type="text/javascript">( function($){
                $("head").append( "<style>.request-form,.request-form .form-control,.request-form .submit-info h2,.request-form .form-control::-moz-placeholder{color:;}.request-form{background-color:red;};</style></script>    <section class="request-form-page  ptb-80">
                
        <div class="container-fluid" style="background-image: url(./img/78.jpg);">            <div class="row">
                <div class="col-sm-6 offset-md-3">
                    <div class="request-form">
                        <div class="submit-info text-center"><h2>Doner Registrtion</h2><p>Please field marked with * are required .</p></div>                     
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" class="form-control" name="Name" id="requesttitle" placeholder="Enter your name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input type="text" class="form-control" id="Address" name="Address" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="bloodgroup">blood group</label>
                                        <select class="form-control" name="Blood_Group">
                                            <option value="Select">-----Select-----</option>
                                            <option value="A+">A+</option><option value="A-">A-</option><option value="B+">B+</option><option value="B-">B-</option><option value="O+">O+</option><option value="O-">O-</option><option value="AB+">AB+</option><option value="AB-">AB-</option><option value="A1+">A1+</option><option value="A1-">A1-</option><option value="A1B+">A1B+</option><option value="A1B-">A1B-</option><option value="A2+">A2+</option><option value="A2-">A2-</option><option value="A2B+">A2B+</option><option value="A2B-">A2B-</option>                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" class="form-control" id="patientage" name="Age" placeholder=" Age">
                                    </div>
                                    <div class="form-group">
                                        <label for="When_Need_Blood">When Need Blood ?</label>
                                        <input type="text" class="form-control date-picker hasDatepicker" id="needblood" name="When_Need_Blood" placeholder="When Need Blood ?">
                                    </div>
                                                                    </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bloodunits">Blood Unit / Bag (S)</label>
                                        <input type="number" class="form-control" id="bloodunits" name="Blood_Unit" placeholder="Blood Units">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" class="form-control" id="Email" name="Email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="Mobile_Number">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobilenumber" name="Mobile_Number" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="hospitalname">Hospital Name</label>
                                        <input type="text" class="form-control" id="hospitalname" name="Hospital_Name" placeholder="Hospital Name">
                                    </div>
                                                                        <div class="form-group">
                                        <label for="location">City</label>
                                        <input type="text" class="form-control" id="city" name="City" placeholder="City">
                                    </div>  
                                    
                                   

                                </div>
                                
                                   
                                    <br><br>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" name="request_submit" class="btn mt-30 btn-default btn-center btn-info">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div></body><?php include'layout/footer.php';?>
    </section></head></html></body></html>
    