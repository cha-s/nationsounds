<?php
try{
	$bdd = new PDO('mysql:host=mysql-super.alwaysdata.net;dbname=super_nationsounds;charset=utf8', 'super_charline', 'Char-line!');
	 }
	 catch (Exception $e){
		 die('Erreur : ' . $e->getMessage());
		 }

session_start();
if (!isset($_SESSION['email'])) {
	header ('Location: connexion.php');
	exit();
}
?>

<html>
<head>
<meta charset="UTF-8">
<title>Espace membre</title>
</head>

<body>
<link rel="stylesheet" href="css/style.css">
<div class="navbar navbar-dark bg-black shadow-sm">
      <div class="container d-flex justify-content">

        <button class="navbar-toggler" type="button" data-toggle="dropdown" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse bg-dark" id="navbarHeader">
          <div class="collapse dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li class="dropdown-item"><a href="programme.html" >Programmes </a></li>
              <li class="dropdown-item"><a href="carte.html">Carte</a></li>
              <li class="dropdown-item"><a href="billeterie.html" >Billeterie</a></li>
              <li class="dropdown-item"><a href="photos.php" >Photos</a></li>
              <li class="dropdown-item"><a href="informations.html" >Informations pratiques</a></li>
              <li class="dropdown-item"><a href="contact.html" >Contact</a></li>
              <li class="dropdown-item"><a href="partenariats.html" >Partenariat</a></li>

        </div>
        </div>
      <a href="index.html" > <img id="logo" src="images/logoemma.png" alt="Logo Nation Sounds" /> </a>
      <!-- <nav class="navbar navbar-dark bg-black"> -->
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
          </form>
        <!-- </nav> -->
    </div>
  </div>
Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>
