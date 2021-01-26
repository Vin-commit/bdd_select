<?php
try 
{
  //
  $host = 'localhost';
  $dbname = 'test';
  $userDB = 'vincent';
  $password = '';

  $bdd = new PDO('mysql:host=' . $host .';dbname=' . $dbname . ';charset=utf8', $userDB, '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  echo "Connexion à la base de donnée réussie...";
 }
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}

 $reponse = $bdd->query('SELECT nom, commentaires FROM jeux_video');
 
 // On affiche chaque entrée une à une
 while($données = $reponse->fetch())
 {
 ?>
  <p>
    <strong> <?php echo $données['nom']; ?></strong><br />
    <em><?php echo $données['commentaires']; ?></em>
  </p>
<?php
}

$req->closeCursor();
?>
