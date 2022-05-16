<?php
require_once('../scripts/connection.php');
include('../parts/header.php');
include('../scripts/getUsers.php');
?>
<main class="container">
    <h1 class="m-4 text-uppercase">Zoznam registrovaných užívateľov</h1>
   <ul class="list-group">
       <li class="list-group-item list-group-item-action active d-flex row">
           <span class="col-1"> id</span>
           <span class="col-2"> Avatar</span>
           <span class="col-2"> Meno</span>
           <span class="col-2"> Priezvisko</span>
           <span class="col-2"> Email</span>
           <span class="col-2"> Presmerovanie</span>
       </li>
   </ul>
   <?php foreach ($users as $user) : ?>
    <li class="list-group-item list-group-item-action d-flex row align-items-center">     
            <span class="text-danger col-1"> <?php echo $user["id"] ?></span>
            <div class="col-2">
                <img src="../images/<?php echo $user["avatar"]?>" alt="<?php echo $user["username"]?>" style="width: 30px">
            </div>
            <span class="col-2"> <?php echo $user["username"] ?></span>
            <span class="col-2"> <?php echo $user["surname"] ?></span>
            <span class="col-2"> <?php echo $user["email"] ?></span>
            <div class="col-2 d-flex justify content-center">
                <a style="margin-right: 5px" href="../pages/profile.php<?php echo "?user=".$user["id"]; ?>"class="btn btn-success">Profile</a>
                <a href="../scripts/delete_script.php?id=<?php echo $user["id"];?>" class="btn btn-danger mr-2">Delete</a>
            </div>
        </li>
   
   <?php endforeach ?>
   
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="1651514764228.jpg" class="d-block w-100" alt="...">
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

</main>
<?php include('../parts/footer.php'); ?>