<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">


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


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>







<div class="w3-content w3-section" style="max-width:1500px">
  <img class="mySlides" src="./img/1.jpg"style="width:100%">
  <img class="mySlides" src="./img/red3.jpg" style="width:100%">
  <img class="mySlides" src="./img/5.jpg" style="width:100%">
  
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 1000); // Change image every 2 seconds
}
</script>
          
<?php include'layout/footer.php';?>



</body>

  