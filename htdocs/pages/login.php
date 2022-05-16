<!DOCTYPE html>
<html>
<style>
  .container {
    text-align: center;
  }
  h1 {
    padding-top: 50px;
  }
 
</style> 
<body>
<?php include('../parts/header.php')?>
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
  <main>  
  <form action="../scripts/login_script.php" method="post">
        <div class="container">
          <h1>Prihlasenie</h1>
          <link rel="stylesheet" href="login.css">
          <hr>
          <p><label for="username"><b>Meno</b></label>
          <br><input type="text" placeholder="Zadajte Meno" name="username" id="username" required>
            
          <p><label for="psw"><b>Heslo</b></label>
          <br><input type="password" placeholder="Zadajte Heslo" name="psw" id="psw" required>
      
          <p><button type="submit" class="btn btn-success">Prihlásiť sa</button>
          <p class="text-danger"><?php echo $message ?></p>
          <hr>
          <p style="font-weight: bolder;">Ešte nemáte účet? Vytvorte si ho <p><a href="register.php" class="btn btn-info">TU!</a></p>
        </div>     
      </form>
  </main>
  <?php include('../parts/footer.php')?>  
</body>
</html>