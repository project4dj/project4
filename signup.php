<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript">
    function showlogin(){
        document.getElementById('hide').style.cssText = 'display: block;';
    }

    function showregister(){
        document.getElementById('hide2').style.cssText = 'display: block;';
    }
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>ExerciseMe</title>
  </head>
  <body>
  <!--<main class="container">-->
      <div class="row">
          <div class="col-12">
          <!-- import van de navbar -->
              <?php include("./includes/nav.php"); ?>
          </div>
      </div>
      <div class="container">
          <div class="row">
            <div class="col-12">
                <div class="formcontainer">
                    <button type="button" name="login" id="login" onclick="showlogin()" class="btn btn-primary" btn-lg btn-block">Login</button>
                    <button type="button" name="register" id="register" onclick="showregister()" class="btn btn-primary" btn-lg btn-block">registreer</button>
                <div class="hidden" id="hide">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Adres</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Wachtwoord</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Log in!</button>
                    </form>
                </div>
                <div class="hidden2" id="hide2">
                <form action="signupscript.php" method="post">
                    <div class="form-group">
                        <label for="username">Gebruikersnaam</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Adres</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password2">Herhaal Wachtwoord</label>
                        <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Registreer!</button>
                    </form>
                </div>
                </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12">
          <!-- import van de footer -->
              <?php include("./includes/footer.php"); ?>
          </div>
      </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>