<?php


if (isset($_SESSION['username']) && isset($_SESSION['id']))
 
{
    $sql = "SELECT * FROM users ORDER BY id ASC ";
        
        $res = mysqli_query($connection,$sql);

    
} 
    else{
    header("Location:index.php?");
}
?>