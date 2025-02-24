<?php
session_start();
include 'db_config.php';
include './includes/header.php'
?>


<div class="container ">
    
    <?php include 'php/menbers.php';
        if (mysqli_num_rows($res) > 0 ) {?>
          
    
  
      <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light " >
            <div class="container-md  ">
                    <a class="navbar-brand" href="#">Renda di BO</a>
                           
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                   
                                   <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="menbersresult.php">Members</a>
                                    </li>

                                    <li class="nav-item">
                                    <a class="nav-link" href="housereg.php">House Registration</a>
                                    </li>

                                     
                                    
                                    <li class="nav-item d-flex justify-content-end">
                                        <?php if (isset($_SESSION['role'])) {?>
                                     <a class="nav-link active" href="home.php">Hi ,<?=$_SESSION['role']?></a> 

                                     <?php }else{ ?>
                                    <a class="nav-link " href="home.php"></a> 
                                       <?php }?>
                                    </li>


                            </ul>

                           
                    </div>

            </div>

   </nav>
  
         <h3>Members Table</h3>  

            
                <div class="row p-5">
                                     <div class="col"></div>
                                <div class="col-6 ">
                                    
                                        <h1 class="display-4 fs-1">Usuarios</h1>
                                            <table class="table"style= "">
                                    
                                                <thead class="table">
                                                    
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">User name</th>
                                                        <th scope="col">Role</th>
                                                    </tr>  
                                                        <tbody>
                                                            <?php 
                                                            $i =1;
                                                            while ($row = mysqli_fetch_assoc($res)) {?>
                                                            
                                                            <tr>
                                                                <th scope="row"><?=$i?></th>
                                                                <td><?=$row['name']?></td>
                                                                <td><?=$row['username']?></td>
                                                                <td><?=$row['role']?></td>
                                                            </tr>
                                                            <?php $i++; }?>
                                                        </tbody>
                                                </thead>
                                        </table>
                                        <?php }?>
                                    
                                </div>
               
                                      <div class="col"></div>
               

        </div>
        <!--fim row-content--> 
    
     
 </div>
 <!--fim container principal--> 

 <?php
 include './includes/footer.php'
 ?>