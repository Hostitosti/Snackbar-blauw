<?php 
    require "connection.php";
    require "session.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snackbar blauw</title>
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Logout</a>
        </li>
    </ul>

  </div>

</nav>
<div class="grid-container">
  <div class="grid-item grid-item-1 text-center mt-3"><h1>Welkom <mark><?php echo $_SESSION['firstname'] ?></mark> bij Snackbar Blauw</h1></div>
  <div class="grid-item grid-item-2">
      <h1>Over ons</h1>
      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda non eligendi error sapiente corporis nesciunt nemo vel reprehenderit at, dolorem architecto recusandae maxime illum voluptates, ullam fugiat neque iure illo? Dolores ad consequuntur quis ea, expedita totam a itaque dignissimos quibusdam fugit voluptatum officia officiis eos eveniet accusantium, odit non, suscipit laudantium unde perspiciatis vero omnis in. Dicta, reprehenderit amet!</span>
  </div>

  <div class="grid-item grid-item-3">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://deolliemolle.nl/wp-content/uploads/2019/05/Snackbar-1038x576.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Snackbar_automatiek.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.rtlnieuws.nl/sites/default/files/content/images/2021/04/08/WhatsApp%20Image%202021-04-08%20at%2014.33.15.jpeg?itok=u1OWGo16&offsetX=0&offsetY=162&cropWidth=1600&cropHeight=900&width=1024&height=576&impolicy=dynamic" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></div>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>