<html>
<head>
<title>TP5: Introduction au Framework Bootstrap</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">
 
 <!--link rel="stylesheet"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"-->

<script type="text/javascript" src="myScripts.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


  <header class="header"> 
<div class="container">
 <a class="navbar-brand" href="HomePage.html"><FONT size="5pt">Yénako Mom</FONT> </a>
 <div style="float: right; padding-top: 10px; margin-left: 100px">
      <input type="search" id="site-search" name="q"
       aria-label="Search through site content"
 >
<a href=""> <img src="images/barre_recherche.png" alt="indisponible" width="20" height="30"></a> 

 </div>
</div>
  </header>


  
<nav class="nav">
  <center>
 <table class="dropdown" style="text-align: center;">
 <tr>
  <td class="col-md-2 col-lg-4 col-md-8 ">
 <a class="dropdown-toggle" data-toggle="dropdown">Catégories<span class="caret"></span></a>
<table class="dropdown-menu">
    <tr>
      <td class="col-sm-2"><a href="tresor.html">Ferrailles ou Trésor</a></td>
      <td class="col-sm-2"><a href="bon_musee.html">Bon pour le musée</a></td>
      <td class="col-sm-2"><a href="accessoires.html">Accessoires VIP</a></td>
    </tr>
  </table>
  </td>

    <td class="col-md-2 col-lg-4 col-md-8 ">
 <a class="dropdown-toggle" data-toggle="dropdown">Achat
  <span class="caret"></span></a>
<table class="dropdown-menu">
    <tr>
      <td class="col-sm-2 "><a href="#">Achetez-le Mainetenant</a></td>
      <td class="col-sm-2"><a href="#">Meilleure Offre</a></td>
      <td class="col-sm-2"><a href="#">Enchères</a></td>
    </tr>
  </table>
  </td>

    <td class="col-sm-2 col-lg-4 col-md-8" style="margin-left: 30px;"><a class="nav-link" href="vendre.html">Vendre</a></td>

    <td class="col-sm-2 col-lg-4 col-md-8" style="margin-left: 30px;"><a class="nav-link" href="#">Compte</a></td>
    <td class="col-sm-2 col-lg-4 col-md-8" style="margin-left: 30px;"><a class="nav-link" href="panier.html">Panier</a></td>
    <td class="col-sm-2 col-lg-4 col-md-8" style="margin-left: 30px;"><a class="nav-link" href="#">Admin</a></td>
  </tr>
 </table>
</center>
  </nav>


<?php

//$variable_php = '<script type="text///javascript">document.write('monTexte');</script>';

$var= isset($_POST["nom"])? $_POST["nom"] : ""; 
echo "ckjbsdckkcb".$var;
/*$nom = isset($_POST["nom"])? $_POST["nom"] : "";

 $database = "BDD";
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
    //si le BDD existe, faire le traitement
if ($_POST["button1"]) {
 if ($db_found) {
$sql = "SELECT * FROM membre";
if ($nom!= "") {

$sql .= " WHERE Nom LIKE '%$nom%'";}
$result = mysqli_query($db_handle, $sql); 
while ($data = mysqli_fetch_assoc($result)) {
echo "Votre panier est composé de :";
echo "Nom:" . $data['Nom'] . '<br>';
echo "Prix: " . $data['Prix'] . '<br>';
echo "Montant de la livraison: 7 euros".'<br>';
$prix_livraison=7;
echo "Total: ".$data['Prix']+$prix_livraison;
}
else {
echo "Database not found";
}}
//fermer la connection
mysqli_close($db_handle);*/


?>




 <footer class="page-footer">
 <div class="container">
 <div class="row">
 <div class="col-lg-8 col-md-8 col-sm-12">
 <h6 class="text-uppercase font-weight-bold">Information additionnelle</h6>
 <p>
 Ce site web est destiné à la communauté ECE Paris (Ebay ECE) pour leur permettre d'enchérir, d'acheter ou de négocier pour un item,aux individus de vendre ses items dans le site ou pour le gérant du site d’administrer le site de commerce.
 </p>
 
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 <h6 class="text-uppercase font-weight-bold">Contact</h6>
 <p>
 37, quai de Grenelle, 75015 Paris, France <br>
 youssouph-djilacoune.ndao@edu.ece.fr <br>
 <br>
 oumar.anne@edu.ece.fr <br>
 +33 01 02 03 04 05 <br>
 +33 01 03 02 05 04
 </p>
 </div>
 </div>
 <div class="footer-copyright text-center">&copy; 2020 Copyright | Droit d'auteur: YM</div>
</footer>

 </body>
 <!-- SOURCES: https://www.w3schools.com/bootstrap/bootstrap_dropdowns.asp -->
</html>