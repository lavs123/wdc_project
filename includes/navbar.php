
 <div class="container  " >

   <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light  " style="">
            <div class="container-md ">
                    <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                   
                                   <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                    </li>

                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                    </li>

                                     <li class="nav-item">
                                     <?php if (isset($_SESSION['name'])) { ?>
                                        
                                        <a class="nav-link" href="logout.php">Logout</a>
                                        <?php }else{?>
                                        <a class="nav-link" href="login.php">Login</a>
                                        <?php }?>
                                     </li> 
                                    
                                    <li class="nav-item d-flex justify-content-end">
                                        <?php if (isset($_SESSION['name'])) {?>
                                     <a class="nav-link " href="home.php">Hi ,<?=$_SESSION['name']?></a> 

                                     <?php }else{ ?>
                                    <a class="nav-link " href="home.php"></a> 
                                       <?php }?>
                                    </li>


                            </ul>

                           
                    </div>

            </div>

   </nav>

               
    
        
    </div>