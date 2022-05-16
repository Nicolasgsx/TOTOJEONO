<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php include('./parts/header.php')?>
    
<form action="script_log.php" method="post">
        <form method="POST" class="formular" method="POST">
          <h1>Login</h1>
          <label for="meno"><b>Meno</b></label>
          <br>
          <input type="text" placeholder="Zadaj meno" id="meno" name="meno" required>
          <p>
          <label for="heslo"><b>Heslo</b></label>
          <br>
          <input type="password" placeholder="Zadaj heslo" id="heslo" name="heslo" required>
          <p>
          <div class = log>
          <button type="submit" class="btn btn-success" id = "log" value="log">Prihlasenie</button>
        </div>
        
        <button><a href="register.php">Registrovať sa!</a></button>
        </form>
        <p>

       
      

      </form>

    </body>
</html>