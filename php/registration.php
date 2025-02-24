<?php
session_start();
include "../db_config.php";



if (isset($_POST['btn_submit'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


    $proprietario = test_input($_POST['proprietario']);
    $cozinha = test_input($_POST['cozinha']);
    $quartos = test_input($_POST['numero_quarto']);
    $casadebanho = test_input($_POST['casadebanho']);
    $sala = test_input($_POST['sala']);
    

            if (empty($proprietario)) {
                header("Location:../housereg.php?error=Um dos campos se encontra vazio");

            }else{
                $sql ="INSERT INTO housereg (proprietario,cozinha,casadebanho,sala,quartos) VALUES ('$proprietario','$cozinha', '$casadebanho','$sala','$quartos')"; 
                $query_run = mysqli_query($connection, $sql);

                if($query_run)
                {
                    header("Location:../housereg.php?sucsses=Registro feito com SUCESSO");
                    
                }else{
                    header("Location:../housereg.php?error=Registro INVALIDO");

                }



            }
   
}
//CRIANDO A FUNCAO DE ELIMINAR REGISTRO 
         
if (isset($_GET['btn_editar'])) {
    $sql = "DELETE FROM housereg WHERE  ID === id "; 
    $query_run = mysqli_query($connection, $sql);
   
    if($query_run)
                {
                    header("Location:../housereg.php?sucsses=Registro eliminado com SUCESSO");
                    
                }else{
                    header("Location:../housereg.php?error=Registro INVALIDO");

                }

}

?>
