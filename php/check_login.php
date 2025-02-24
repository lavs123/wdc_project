<?php
session_start();
include "../db_config.php";

if(isset($_POST['btn_submit'])){
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    # code...
    //filtro para protecao contra injecao MYSQL
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $username = test_input($_POST['username']);
      $password = test_input($_POST['password']);
      $role = test_input($_POST['role']);

    if (empty($username)) {
       
        header("Location:../login.php?error=username is Required");
    }elseif(empty($password)){
        header("Location:../login.php?error=Password is Required");
       
    }else{
        $password = $password;
        $sql = "SELECT * FROM users WHERE username ='$username' AND password='$password' ";
        
        $result = mysqli_query($connection,$sql);

        if (mysqli_num_rows($result) === 1) {
          
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] === $password && $row['role'] == $role) {
                $_SESSION['name']= $row['name'];
                $_SESSION['id']= $row['id'];
                $_SESSION['role']= $row['role'];
                $_SESSION['username']= $row['username'];
             
              header("Location:../home.php");
            
                

            }else{
                header("Location:../index.php?error= Incorect user name or password");

            }
               
       

        }else{
           
            header("Location:../index.php?error= Incorect user name or password");
            
        }
    }

}else {
    header("Location:../index.php");
}
}



?>