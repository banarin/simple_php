<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <form action="./login.php" method="post">
        <center>
        <div class="m-5">
        <h2 class="title">Inscritption</h2>
        <input placeholder="Votre nom" type="text" name="firstName" class="form-control mt-1">
        <?php
        if (empty($name)) {
            echo "<p class='text text-danger'>le nom est requit</p>";
        }
        ?>
        <br>
        <input placeholder="Votre email" type="text" name="email" class="form-control mt-1">
        <?php
        if (empty($email)) {
            echo "<p class='text text-danger'>le email est requit</p>";
        }
        ?>
        <br>
        <input placeholder="Votre mot de passe" type="text" name="password" class="form-control mt-1">
        <?php
        if (empty($password)) {
            echo "<p class='text text-danger'>le mot de passe est requit</p>";
        }
        ?>
        
        <button type="submit" class="btn btn-warning text-light fw-bold">S'incrire</button>
        </div>
        </center>
        
    </form>

    <?php
        $user =  [$_REQUEST['firstName'],$_REQUEST['email'],$_REQUEST['password']];
        $name = $_REQUEST['firstName'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
      
      
    ?>
</body>
</html>