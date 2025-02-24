<?php
session_start();
include 'db_config.php';
if (isset($_SESSION['username']) && isset($_SESSION['id']))
 {?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
   
    <title>Home</title>
</head>
<body>
<div class="container  d-flex justify-content-center align-items-center">

   <?php if ($_SESSION['role'] == 'admin') {?>
    <!---For Admin-->

                        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light " >
                                <div class="container-md ">
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
<br>
<br>
                    <div class="container d-flex justify-content-start p-5">
                          <div class="card" style="width: 12rem;">
                                 <img src="./img/600x600.jpg"class="card-img-top" alt="admin icon">
                                      <div class="card-body text-center">
                                           <h5 class="card-title"><?=$_SESSION['name']?></h5>
                                            <a href="logout.php" class="btn btn-dark">Logout</a>
                                     </div>
                             </div>
                    </div>

        
  


   <?php }else{ ?>
   <!---FOR USER --->
       <div class="card" style="width: 18rem;">
                <img src="./img/600x600.jpg"class="card-img-top" alt="admin icon">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?=$_SESSION['name']?></h5>
                        <a href="logout.php" class="btn btn-dark">Logout</a>
                    </div>
        </div>
   <?php }?>
</div>
</body>
</html>
<?php
}else{
    header("Location:index.php?");
}
?>
