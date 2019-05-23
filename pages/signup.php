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
      <div class="container">
          <div class="row">
            <div class="col-12">
                <div class="formcontainer">
                    <button type="button" name="login" id="login" onclick="showlogin()" class="btn btn-primary" btn-lg btn-block">Login</button>
                    <button type="button" name="register" id="register" onclick="showregister()" class="btn btn-primary" btn-lg btn-block">registreer</button>
                <div class="hidden" id="hide">
                <form action="./functionality/loginscript.php" method="post">
                    <div class="form-group">
                        <label for="email">Email Adres</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Log in!</button>
                    </form>
                </div>
                <div class="hidden2" id="hide2">
                <form action="./functionality/signupscript.php" method="post">
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
  </body>
</html>