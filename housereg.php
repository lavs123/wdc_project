<?php
session_start();
include 'db_config.php';
include './includes/header.php';


//DELETE A HOUSE FROM DATABASE 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM housereg WHERE  id =$id "; 
    $query_run = mysqli_query($connection, $sql);
    
 //if($query_run)
    //             {
    //                 header("Location:../housereg.php?sucsses=Registro eliminado com SUCESSO");
                    
    //             }else{
    //                 header("Location:../housereg.php?error=Registro INVALIDO");

    //             }

}




?>

        <div class="container">
                      
             <?php include 'php/house.php'; ?>
        

                       
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
                                                        <a class="nav-link " href="home.php"> home</a> 
                                                        <?php }?>
                                                        </li>

                                                </ul>

                                            
                                        </div>

                                </div>

                    </nav>
                  <!--Fim nav--->

                <!--INICIO FORMULARIO DE REGISTRO DE CASAS-->
            <div class="row">
                <div class="col">
                      <form class=" border shadow p-3 row"
                                style="margin-top:5rem;width:32rem"
                                action="./php/registration.php"
                                method="POST">
                                <h2 class="text-center p-3">Regitro de Casas e apartamentos</h2>
                                <?php if (isset($_GET['error'])) {?>
                                <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']?>
                                
                                </div>
                            <?php } else if(isset($_GET['sucsses'])){?>    
                                <div class="alert alert-success" role="alert">
                                <?php echo $_GET['sucsses']?>
                                </div>
                            <?php } ?>

                            <div class="mb-3">
                            <label for="owner"
                                    class="form-label">Proprietário</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    name="proprietario">
                            </div>

                                                       
                            <div class="mb-3 ">
                                <label for="partes"
                                            class="form-label">Cozinha</label>
                                <select class="form-select mb-3"
                                        name="cozinha"
                                        aria-label="Default select example">
                                    <option selected value="sim">sim</option>
                                    <option value="nao">Nao</option>
                                </select>
                            </div>
                            <div class="mb-3 ">
                                <label for="partes"
                                            class="form-label">Casa de Banho</label>
                                <select class="form-select mb-3"
                                        name="casadebanho"
                                        aria-label="Default select example">
                                    <option selected value="sim">sim</option>
                                    <option value="nao">Nao</option>
                                </select>
                            </div>
                            <div class="mb-3 ">
                                <label for="partes"
                                            class="form-label">Sala</label>
                                <select class="form-select mb-3"
                                        name="sala"
                                        aria-label="Default select example">
                                    <option selected value="sim">sim</option>
                                    <option value="nao">Nao</option>
                                </select>
                            </div>

                             <div class="mb-3 ">
                                <label for="numero_quarto"
                                            class="form-label">Numero de Quartos</label>

                                <select class="form-select mb-3"
                                        name="numero_quarto"
                                        aria-label="Default select example">
                                    <option selected value= "1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="outros">Outros...</option>

                                </select>

                            </div>
                            
                            <button name="btn_submit" type="submit" class="btn btn-primary">Registrar</button>
                        
                        </form>
                        <!--FIM FORMULARIO DE REGISTRO DE CASAS-->
                       <!--fim form--->
              </div>

                <?php if (mysqli_num_rows($res) > 0 ) { ?> 

                <div class="col">
                    <div style="margin-top:3rem;">
                           <h2 class="text-center p-3 mb-0" >Casas Registradas</h2>
                            <table class="table" >
                            
                                    <thead>
                                        <tr>
                                        <th scope="col">#id</th>
                                        <th scope="col">PROPRIETARIO</th>
                                        <th scope="col">Nº QUARTOS</th>
                                        <th scope="col">COZINHA</th>
                                        <th scope="col">CASA DE BANHO</th>
                                        <th scope="col">SALA</th>
                                        <th scope="col">EDITAR</th>
                                        <th scope="col">ELIMINAR</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                         $i =1;
                                         while ($row = mysqli_fetch_assoc($res)) {?>

                                        <tr>
                                        <th scope="row"><?=$row['id']?></th>
                                         <td><?=$row['proprietario']?></td>
                                         <td><?=$row['quartos']?></td>
                                         <td><?=$row['cozinha']?></td>
                                         <td><?=$row['casadebanho']?></td>
                                         <td><?=$row['sala']?></td>
                                         <td>  <a href= 'housereg.php?id=<?= $row['id']?> '><img src="./img/trash.svg" alt="Imagen de uma lata de lixo"></a> </tr>
                                        <?php $i++; }?>
                                    </tbody>
                                    
                                    </table>
                        </div>
                </div>

          </div>   
                                  <?php }  else { ?>
                          <div class="col" style = " margin-top: 16rem;">
                                        <div class="card" style="margin-top: 16px; ">
                                        
                                            <div class="card-body text-center">
                                                <h5 class="card-title">There is no result to be shown </h5>
                                                
                                        </div>
                            </div>
                  
                        </div>
                    <?php  }?>   
        </div>

 <!--Fim container principal--->

<?php
 include './includes/footer.php'
 ?>