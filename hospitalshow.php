



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


<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> <div id="register-link" class="text-center">
                                <a href="viewrequest.php" class="text-info">Blood Request</a>
                            </div>
                             <div class="card-header"> <div id="register-link" class="text-center">
                                <a href="recordshow.php" class="text-info">Doner Record</a>
                            </div>

                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                               <th>Hospital Name</th>
                                            <th> Address</th>
                                            <th>Blood Group</th>
                                           
                                            <th>Mobile Number</th>
                                           
                                            <th>City </th>
                                           
                                     <th>image</th>
                                            
                                            
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                            include('dataconnect.php');
                                            $q ="select * from hospital";
                                            $query = mysqli_query($con,$q);

                                            while ($result = mysqli_fetch_array($query)) 
                                            {


                                        ?>
                                       
                                        <td><?php echo $result['Hospital_Name'] ?></td>
                                        <td><?php echo $result['Address'] ?></td>
                                        <td><?php echo $result['Blood_Group'] ?></td>
                                       
                                        <td><?php echo $result['Mobile_Number'] ?></td>
                                       
                                        <td><?php echo $result['City'] ?></td>
                                        <td><img src="image/<?php echo $result['file'];?>" width="50" height="50"></td>
                                        
                                        
                                        
                                       
                                        <td><a class="btn btn-danger" href="delete1.php?id=<?php echo $result['id'];?>" class="text-white">delete</a></td>

                                        </tr>
         <?php
                                            }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    






</body>

</html>

