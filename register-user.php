<?php 
    require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-1 m-5">Register</h1>

    <form action="" method="post" class="m-3">
        <div class="w-25">
            <label for="fNameInput" class="form-label">First name</label>
            <input type="text" class="form-control" id="fNameInput" placeholder="First name" name="fname">
        </div>

        <div class="w-25">
            <label for="lNameInput" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lNameInput" placeholder="Last name" name="lname">
        </div>

        <div class="w-25">
            <label for="phonenumberInput" class="form-label">Phonenumber</label>
            <input type="text" class="form-control" id="phonenumberInput" placeholder="0123456789" name="phonenumber">
        </div>

        <div class="w-25">
            <label for="emailInput" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" name="email">
        </div>

        <div class="w-25">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="Password">
        </div>

        <div class="w-25 mt-3">
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="" onclick="history.back()" style="float: right;">Back</a>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>