<?php 
    require "connection.php";

    if(isset($_POST["submit"]) && $_POST["fname"] != "" && $_POST['lname'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['phonenumber'] != "")
    {
        
    $fname = $_POST['fname']; 
    $lname = $_POST['lname']; 
    $email = $_POST['email']; 
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber']; 
    $role = $_POST['role']; 
     
    
    
    
    $sql = "INSERT INTO user (firstname, lastname, phonenumber, email, password, role)
    VALUES ('$fname','$lname','$phonenumber','$email','$password','$role')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("location: index.php");
        } else {
            echo "<script>alert('Error')</script>";
        }$conn->close();
    }
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
<body class="bg-primary text-white">
    <h1 class="display-1 m-3">Register gebruiker</h1>

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
            <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="password">
        </div>

        <div class="w-25">
        <labelclass="form-label">Role</label>
        <select class="form-select" aria-label="Default select example" name="role">
            <option value="klant">Klant</option>
            <option value="manager">Manager</option>
            <option value="medewerker">Medewerker</option>
        </select>
        </div>

        <div class="w-25 mt-3">
            <button type="submit" name="submit" class="btn btn-secondary">Register</button>
            <a href="" onclick="history.back()" style="float: right; color: white;">Back</a>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>