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
      <center><h3> - Test - </h3></center>
      <hr class="hr" />
      <?php
      try{
      	$connect = new PDO('mysql:host=localhost;dbname=qcmexpo','root','');
      	$connect->exec("SET NAMES UTF8");
      }catch(PDOException $e){
      	echo "Erreur de connexion";
      }
      $i = 1;
      echo "<form action='restest.php' method='post'>";
      $req = "select * from questions order by rand() limit 13";
      try{
      	$res = $connect->query($req);
      	$j = 0;
      	while($l = $res->fetch(PDO::FETCH_OBJ)){
      		$j++;
      		echo "<br /><p><b>".$i++."-".$l->sentence."</b></p>";
      		$idQ = $l->id;
      		$req2 = "select * from reponses where id_question = ".$idQ;
      		$res2 = $connect->query($req2);
      	while($l2 = $res2->fetch(PDO::FETCH_OBJ)){
      			echo "<input type='radio' name='".$j."' value='".$l2->id."'required />&nbsp;".$l2->sentence."<br />";
          }
      	}
      echo "<center><br /><input type='submit' value='Terminer' /></center>";
      }catch(PDOException $e){
      	echo "Erreur requete";
      }
      ?>
    </div>
    <br />
    <img class="campus" src="img/campus.jpg" />
</body>
</html>
