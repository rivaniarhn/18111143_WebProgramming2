<!-- <?php
// include 'session.php';
?> -->

<html>
    <head>
        <title>Halaman Register</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
    </head>

    <!-- background -->
    <body>
        <style>
            body{
                background-image: url(bg.jpg);
                background-size: cover;
                background-attachment: fixed;
            } 
            </style>
    <!-- end of background -->

    <!-- navbar -->
    <nav class="navbar justify-content-between">
        <div class="navbar-brand">
          <a  href="#">RE:vive</a>
        </div>
  
        <div class="menu">
          <a href="index.php">Home</a>
          <a href="login.php">Sign in</a>
          <a href="register.php" class="active">Sign up</a>
          <a href="about.php">About</a>
        </div>
      </nav>
    <!-- end of navbar -->
    
    <!-- form regist -->
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Sign Up<span class="font-weight-boldtext-secondary">
                            </span>
                            <style></style>
                        </h5>
                        </div>
                        <body>
                            <div class="card-body">
                                <form action="config/register.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" placeholder="Name">
                                    </div> 
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div> 
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div> 
                                    <button type="submit" class="btn"><a href="menuUtama.php">Sign up</a></button>
                                </form>
                            </div>
                        </body>
                    </div>
                </div>
            </div>
        </div>
    <!-- end form regist -->

    <!-- footer -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>&copy; by 18111143_RivaniaRohana_TIFRP18CNSA</p>
            </div>
          </div>
        </div>
      </footer>
    <!-- end of footer -->
    </body>
</html>