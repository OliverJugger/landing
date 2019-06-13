<?php
if(!isset($_SESSION)){session_start();}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

     <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

    <title>Authentification</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

      <!-- Custom styles for this template -->
    <link href="../css/agency.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="connexion.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <!-- Navigation -->
    <!--<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
           <a id="header_connexion" class="navbar-brand js-scroll-trigger" href="#">Laurent Mignot</a>
      </div>
    </nav>-->


     <div id="formUpload" class="container">
    <form class="form-signin" action="post_upload.php" method="post" enctype="multipart/form-data">
    <h1 class="h3 mb-3 font-weight-normal">Selectionnez l'image à télécharger</h1>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Image d'une Oeuvre">
      <p class="mt-5 mb-3 text-muted">&copy;  Site Officiel Laurent Mignot - 2017-2018</p>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="connexion.js"></script>
  </body>
</html>
