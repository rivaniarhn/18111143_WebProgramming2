<!-- <?php
// include "index.php";
?> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Halaman Utama</title>
  </head>
  <body>
    <style>
        body{
            background-image: url(bg.jpg);
            background-size: cover;
            background-attachment: fixed;
        } 
        </style>

    <!-- navbar -->
    <nav class="navbar justify-content-between">
        <div class="navbar-brand">
            <a  href="#">RE:vive</a>
        </div>

        <div class="menu">
            <a href="index.php">Home</a>
            <a href="login.php">Sign in</a>
            <a href="register.php">Sign up</a>
            <a href="about.php">About</a>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- jumbotron -->
    <div class="jumbotron text-center" id="jumbotron">
        <h1>RE:vive</h1>
        <p>Rivania R. | TIF RP 18 CNS A</p>
        <p>Chances are your friends are review and discussing their favorite (and least favorite) books on RE:vive.</p>
    </div>
    <!-- akhir jumbotron -->

    <!-- content -->
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 text-justify">
        <a href="https://bookpage.com/reviews/25754-caz-frear-shed-no-tears-mystery-suspense" class="thumbnail">
          <img src="image/book1.jpg" alt="">
        </a>
        <h1>Shed No Tears</h1>
        <b>Caz Frear</b>
        <p>It’s possible to read this book without having read the rest of the series, but you’ll just end up wanting to start from the beginning because these characters are a pleasure to discover; even incidental roles are fleshed out enough to feel real.</p>
      </div>

      <div class="col-md-4 text-justify">
        <a href="https://bookpage.com/reviews/25741-seb-falk-light-ages-history" class="thumbnail">
          <img src="image/book2.jpg" alt="">
        </a>
        <h2>The Light Ages</h2>
        <b>Seb Falk</b>
        <p>Chances are, if asked about life in the Middle Ages, one might describe a landscape from Monty Python and the Holy Grail, with mud-covered peasants throwing not-quite-dead relatives into plague carts. And if asked about medieval science, one might simply ask, “What’s that?”...</p>
      </div>

      <div class="col-md-4 text-justify">
        <a href="https://bookpage.com/reviews/25740-lisa-feldman-barrett-seven-half-lessons-about-brain-nonfiction#.X8ZmH80zbDc" class="thumbnail">
          <img src="image/book3.jpg" alt="">
        </a>
        <h3>Seven and a Half Lessons About the Brain</h3>
        <b>Lisa Feldman Barrett</b>
        <p>If you think you know all about the brain, think again! According to neuroscientist and Northeastern University professor of psychology Lisa Feldman Barrett (How Emotions Are Made) in her delightful new book Seven and a Half Lessons About the Brain, “your brain is not for...</p>
      </div>
    </div>
    </div>
    <br><br><br>
    <!-- end of content -->

     <!-- footer -->
     <footer class="fixed-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>&copy; by 18111143_RivaniaRohana_TIFRP18CNSA</p>
            </div>
          </div>
        </div>
      </footer>
    <!-- end of footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>