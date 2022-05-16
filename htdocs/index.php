<!DOCTYPE html>
<html>

<head>
  <title>Zoznam užívateľov</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <?php include('./parts/header.php') ?>
  <?php include("zoznam.php") ?>
  
  <main class="container">
    <h1 class="m-4 text-uppercase">Zoznam užívateľov</h1>
    <ul class="list-group m-4">
      <li class="list-group-item list-group-item-action active d-flex row">
        <span class="col-1">Id.</span>
        <span class="col-1">Profile picture</span>
        <span class="col-3">Username</span>
        <span class="col-3">Email</span>
        <span class="col-3">Registered at</span>
        <span class="col-1">Delete</span>
      </li>
<br>
<?php foreach($users as $user) : ?>
<li class = "list-group-item list-group-item-action d-flex row align-items-center">
  <span class="text-danger col-1"> <?php echo $user["id"] ?> </span>
  <div class="col-1">
  <img src="ben.png" <?php echo $user ["avatar"]?> alt ="<?php echo $user ["meno"] ?>" style="width: 50px">
    
</div>
<span class="col-3"> <?php echo $user["meno"] ?></span>
<span class="col-3"> <?php echo $user["email"] ?></span>
<span class="col-3"> <?php echo $user["datumreg"] ?></span>
<div class="col-1 d-flex justify-content-cener">
  <a class="btn btn-success" href="profile.php?id=<?php echo $user['id']?>">Profile</a>
</div>
</li>
</ul>
  </main>



<?php endforeach ?>

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="1103164.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="1472028.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="1613355.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
      </div>

</body>
</html>