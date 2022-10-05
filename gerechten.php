<?php 
    require "connection.php";
    require "session.php";

    $sql = "SELECT * FROM products";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Snackbar Blauw
    </a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
    <li class="nav-item">
          <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Menu</a>
        </li>
    </ul>
    <ul class="navbar-nav mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Logout</a>
        </li>
    </ul>
  </div>
</nav>


<div class="grid-container-menu">
<?php if ( $result = mysqli_query($conn,$sql) )
        {
          while ($row=mysqli_fetch_assoc($result))
            { 
            if($row['category'] == 'food') { ?>
              <div class="grid-item-menu">
                <div class="grid-item-menu-content">
                  <small class="text-muted"><?php echo $row['category']; ?></small>
                    <img src="<?php echo $row['image-link']; ?>" alt="<?php echo $row['name']; ?>">
                <h1><?php echo $row['name']; ?></h1>
                <p><?php echo $row['description']; ?></p>
                <h3>Prijs: € <?php echo $row['selling_price']; ?> </h3>
                </div>
            </div>
            <?php } 
             } 
             }
            mysqli_free_result($result);
         ?>
         <?php if ( $result = mysqli_query($conn,$sql) )
        {
          while ($row=mysqli_fetch_assoc($result))
            { 
            if($row['category'] == 'drinks') { ?>
              <div class="grid-item-menu">
                <div class="grid-item-menu-content">
                  <small class="text-muted"><?php echo $row['category']; ?></small>
                    <img src="<?php echo $row['image-link']; ?>" alt="<?php echo $row['name']; ?>">
                <h1><?php echo $row['name']; ?></h1>
                <p><?php echo $row['description']; ?></p>
                <h3>Prijs: € <?php echo $row['selling_price']; ?> </h3>
                </div>
            </div>
            <?php } 
             } 
             }
            mysqli_free_result($result);
         ?>
          <?php if ($_SESSION['role'] == 'medewerker' || $_SESSION['role'] == 'manager'){
            ?><a href="" class="add-product-btn">+</a><?php

          }?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>