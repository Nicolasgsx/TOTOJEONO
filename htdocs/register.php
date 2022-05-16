<?php include('./parts/header.php')?>
<?php require_once('connection.php');?>

<!DOCTYPE html>
<html>
<head>
<title>Registrácia</title>
<link rel="stylesheet" href="register.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main>
    <form action="script_reg.php" method="POST" class="formular" >          
          <h1>Registrácia</h1>
          <label for="meno"><b>Zadaj svoj nickname</b></label>
          <br>
          <input type="text" placeholder="Tu zadaj nickname" name="meno" id="nickname" required>
          <p>
          <label for="priezvisko"><b>Zadaj svoje priezvisko</b></label>
          <br>
          <input type="text" placeholder="Tu zadaj priezvisko" name="priezvisko" id="priezvisko" required>
          <p>
          <label for="email"><b>Zadaj svoj email</b></label>
          <br>
          <input type="text" placeholder="Tu zadaj email" name="email" id="email" required>
          <p>
          <label for="heslo"><b>Vytvor si heslo</b></label>
          <br>
          <input type="password" placeholder="Tu zadaj heslo" name="heslo" id="heslo" required>
          <p>
          <label for="passwordcheck"><b>Verifikovanie hesla</b></label>
          <br>
          <input type="password" placeholder="Znovu zadaj svoje heslo" name="passwordcheck" id="passwordcheck" required>
 
        <p class="cudlik">
          <button type="submit" class="btn btn-primary">Registrovať</button>
        </p>
        
        <div class="container signin">
          <p>Už máš vytvorený účet? <a href="login.php">Prihlás sa tu</a>.</p>
        </div>
      </form>
</main>
</body>
</html>