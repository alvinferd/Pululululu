<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Silivent - Sistem Informasi Lomba dan Event</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Silivent</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="signUp.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logIn.php">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Sign Up</h1>
      </div>
    </div>
    <br><br><br><br><br>
    <form action="signUpProc.php" method="post">
    <h2 class="masthead-subheading mb-0">E-Mail :</h2>
    <input type="email" name="email" required>
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagalemail"){
        echo "<br>E-mail sudah terdaftar !";
      }
    }
    ?>
    <br><br>
    <h2 class="masthead-subheading mb-0">Username : </h2>
    <input type="text" name="username" width="600px" required>
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagaluser"){
        echo "<br>Username tidak tersedia, gunakan username lain !";
      }
    }
    ?>
    <br><br>
    <h2 class="masthead-subheading mb-0">Password : </h2>
    <input type="password" name="password" required>
    <br><br>
    <h2 class="masthead-subheading mb-0">Ulangi Password :</h2>
    <input type="password" name="ulangPass" required>
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "passgagal"){
        echo "<br>Password tidak sama!";
      }
    }
    ?>
    <br>
    <input type="submit" name="tambah" value="Sign Up" class="btn btn-primary btn-xl rounded-pill mt-5">
  </form>

      <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Silivent 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>