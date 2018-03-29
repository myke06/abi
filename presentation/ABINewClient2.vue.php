<?php

$user = 'root';
$password = '';
$host = 'localhost';
$bdd =  'test';
$link = mysqli_connect($host, $user, $password, $bdd) or die('Erreur de connexion au serveur MySQL');
mysqli_set_charset($link, 'utf8');

$requete = 'insert into client(RAISON_SOCIALE,TELEPHONE,CA,EFFECTIF,VILLE,CODE_POSTAL,NOM_NATURE,TYPE_SOCIETE,ADRESSE_DU_CLIENT,COMMENTAIRE) values (';

$requete .= '\'' . strtoupper(trim($_POST['RAISON_SOCIALE'])) . '\', ';
$requete .= $_POST['TELEPHONE'] . ', ';
$requete .= '\'' . $_POST['CA'] . '\', ';
$requete .= $_POST['EFFECTIF'] . ', ';
$requete .= '\'' . $_POST['VILLE'] . '\', ';
$requete .= '\'' . ucfirst(trim($_POST['CODE_POSTAL'])) . '\' );';
$requete .= '\'' . $_POST['NOM_NATURE'] . '\', ';
$requete .= '\'' . $_POST['TYPE_SOCIETE'] . '\', ';
$requete .= '\'' . $_POST['ADRESSE_DU_CLIENT'] . '\', ';
$requete .= '\'' . $_POST['COMMENTAIRE'] . '\', ';

mysqli_query($link, $requete) or die('Requête SQL invalide');


exit();
