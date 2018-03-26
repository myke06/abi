<?php //************** code PHP procédural classique **************
      // insertion en BDD d'un nouveau film

// se connecter à la BDD
$user = 'root';
$password = '';
$host = 'localhost';
$bdd =  'test';
$link = mysqli_connect($host, $user, $password, $bdd) or die('Erreur de connexion au serveur MySQL');
mysqli_set_charset($link, 'utf8');

// requete insert SQL
$requete = 'insert into contact(NOM_CONTACT,PRENOM_CONTACT,TEL_CONTACT,FONCTION_CONTACT) values (';
//$requete .= $_POST['ID_CLIENT'] . ', ';
$requete .= '\'' . strtoupper(trim($_POST['NOM_CONTACT'])) . '\', '; // avec conversion titre en MAJ
$requete .= $_POST['PRENOM_CONTACT'] . ', ';
$requete .= '\'' . $_POST['TEL_CONTACT'] . '\', ';
$requete .= $_POST['FONCTION_CONTACT'] . ', ';

// echo $requete; // pour test
mysqli_query($link, $requete) or die('Requête SQL invalide');


 //header("location: ABIClientClient.php?idClient=$idClient");

//facultatif, pour faire propre…
//mysqli_free_result($result);
//mysqli_close($link);

exit();
