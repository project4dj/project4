<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ExerciseMe</title>
  </head>
  <body>
  <main class="container">
      <div id="nav" class="row">
          <div class="col-12">
          <!-- import van de navbar -->
              <?php include("./includes/nav.php"); ?>
          </div>
      </div>
      <div id="nav" class="row">
          <div class="col-12">
          <!-- import van de navbar -->
              <?php include("./includes/carousel.php"); ?>
          </div>
      </div>
      <div class="row">
            <div class="col-12 col-md-8">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                    Featured
                    </div>
                <div class="card-body">
                    <h5 class="card-title">Over ExerciseMe</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./images/utrmara.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Utrecht Marathon</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://www.utrechtmarathon.com/" class="btn btn-primary">Naar de website</a>
                </div>
                </div>
            </div>
        </div> 

      <main class="container">
        <div class="row">
          <div class="col-12">
          <!-- import van de navbar -->
              <?php include("./includes/footer.php"); ?>
          </div>
        </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>