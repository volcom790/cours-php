<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>XXX titre XXX</title>
    <meta name="author" content="Mathieu Piton">
    <meta name="description" content="XXX description XXX.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, shrink-to-fit=no">
    <!-- Compatibilité IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- HTML5 shim pour IE 6-8 -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- GoogleFonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <!-- CSS Perso -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styles internes */
    </style>
</head>

<body>
    <!-- debut page -->

      <h1>Mot de passe</h1>

      <?php 
      $password = $_POST["password"];
       ?>

      <?php
      if ($password == "chocolat") {
      ?>
      <form action="page3.php" method="get">
         <label for="prenom">Prénom</label>
         <input type="text" name="prenom" id="prenom">
         <input type="submit" value="Valider">
         </form>
      
      <?php
      }
      
      else{
         echo "Erreur, veuillez revenir sur la page";
         echo "<a href='page1.php'>ici</a>";
      }

      ?>

    <!-- fin page -->

   <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a025539da5.js" crossorigin="anonymous"></script>
</body>
</html>



