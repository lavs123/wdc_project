<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['id']))
 {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Login</title>
</head>
<body>
    
<div class="container d-flex justify-content-center
    align-items-center" style="min-height: 100vh;">
        <form class="border shadow p-3 row"
                style="width: 450px;"
                action="php/check_login.php"
                method="POST">
                <h1 class="text-center p-3">LOGIN</h1>
             
                 <?php if (isset($_GET['error'])) {?>
                 <div class="alert alert-danger" role="alert">
                   <?php echo $_GET['error']?>
                
                </div>
              <?php } ?>
            
            <div class="mb-3">
              <label for="username"
                       class="form-label">Username</label>
              <input type="text"
                     class="form-control"
                     name="username"
                     id="username">
            </div>

            <div class="mb-3">
                <label for="password"
                         class="form-label">Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       id="password">
              </div>
              <div class="mb-3">
              <label for="password"
                         class="form-label">Select user type</label>

              <select class="form-select mb-3"
                       name="role"
                       aria-label="Default select example">
                <option selected value = "user">User</option>
                <option value="admin">Admin</option>

              </select>
            </div>
            <button name="btn_submit" type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>



</body>
</html>
<?php
}else{
    header("Location:index.php?");
}
?>