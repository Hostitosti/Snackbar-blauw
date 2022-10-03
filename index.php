<?php
require "connection.php";

if(isset($_POST["submit"])){
    session_destroy();
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = mysqli_query($conn, "SELECT count(*) as total from user where email='".$email."' and password='".$password."'") or die(mysqli_error($conn));

    $row = mysqli_fetch_array($sql);

    

    if($row['total'] > 0){
        session_start();
        $id = $row['id'];
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        //echo "<script>alert('login succes')</script>";
        header("location: homepage.php");
        die;
    }
    else
    {
        echo "<script>alert('gebruikersnaam en wachtwoord zijn incorrect')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snackbar blauw</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-1 m-5">Login</h1>

    <form action="" method="post" class="m-3">
        <div class="w-25">
            <label for="emailInput" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" name="email">
        </div>
        <div class="w-25">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="password">
        </div>
        <div class="w-25 mt-3">
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
            <a href="register-user.php" style="float: right;">Register +</a>
        </div>
    </form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>