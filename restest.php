<html>
<head>
  <title>BTS MUC ou NRC ?</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <link rel="stylesheet" media="screen" type="text/css" href="css/style.css"/>
</head>
<header>
  <center><h1 class="h1"><font color="white"><b>BTS MUC ou NRC</b>, Lequel choisir ?</font></h1><br />
  <a href="index.php"><button type="button" class="btn btn-danger">Accueil</button></a></center>
</header>
<body style="background-image: url(img/fond.jpg);background-position:center;">
    <div class="container">
      <center><h3> - Résultat - </h3></center>
      <hr class="hr" />
      <?php
      try{
      	$connect = new PDO('mysql:host=tpereiramjbdd.mysql.db;dbname=tpereiramjbdd','tpereiramjbdd','TAP2406ovh');
      }catch(PDOException $e){
      	echo "Erreur de connexion";
      }
      $muc = 0;
      $nrc = 0;
      for($i=1; $i<14; $i++){
      	$req = "select * from reponses where id = ".$_POST["$i"];
      	$res = $connect->query($req);
      	$l = $res->fetch(PDO::FETCH_OBJ);
      }
        if($l->id_type == 1) {
          $muc = $muc + 1;
        }elseif ($l->id_type == 2) {
          $nrc = $nrc + 1;
        }
        if ($muc > $nrc) {
          echo "Votre profil correspond mieux au <b>BTS Management des Unités Commerciales (MUC).</b><br /><br />Sans avoir nécessairement la bosse du commerce, ton sens du service, ta disponibilité feront de toi un bon vendeur sédentaire. ton univers, c'est l'espace de vente (magasin, grande surface...) que tu prendras plaisir à aménager. tes qualités relationnelles te serviront tant dans ton approche avec les clients qu'en interne avec tes collègues. vendeur, chef de rayon, directeur de magasin, merchandiser... tant de métiers qui pourraient te correspondre et te plaire. pas de doute le BTS MUC est fait pour toi ! Maintenant, il faut réfléchir à ces 2 points :<br />
- dans quels types d'univers souhaites-tu évoluer ? magasin de détail, grande surface...<br />
- quels types de produits/services t'attirent le plus ?<br /><br />";
        }else {
          echo "Votre profil correspond mieux au <b>BTS Négociation et Relation Client (NRC).</b><br /><br />Ton point fort c'est l'oral, ta prestance et ton envie d'aller vers les autres. Les métiers de commercial terrain, télévendeur, technico-commercial, chargé de clientèle... sont autant de voies à explorer. En clair, c'est le BTS NRC qui te conviendra le mieux. Ce qui compte, c'est le challenge individuel ; Tu es prêt(e) à prendre des risques du moment que tu peux mesurer ta performance et... gagner plus d'argent. Mais attention, même si ta réactivité et tes facilités à communiquer sont des atouts, il ne faut pas croire qu'un bon vendeur est un beau parleur : l'écoute est toute aussi importante.
En fonction de ton degré de mobilité, tu choisiras un poste de télévendeur (sédentaire) ou d'itinérant. Ces métiers commerciaux offrent de belles possibilités de progression vers des postes de management : chef des ventes, chef de secteur...<br /><br />";
        }
      ?>
    </div>
    <br />
    <img class="campus" src="img/campus.jpg" />
</body>
</html>
