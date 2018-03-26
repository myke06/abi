<?php
require("metier/client.php");

require("DAO/dao.php");

require("presentation/ListeClient.vue.php");

$newClient = new client();

$newClient->setRaisonSociale(htmlentities($_POST["RAISON_SOCIALE"]));
$newClient->setTelephone(htmlentities($_POST["TELEPHONE"]));
$newClient->setCa(htmlentities($_POST["CA"]));
$newClient->setEffectif(htmlentities($_POST["EFFECTIF"]));
$newClient->setVille(htmlentities($_POST["VILLE"]));
$newClient->setNature(htmlentities($_POST["NOM_NATURE"]));
$newClient->setType(htmlentities($_POST["TYPE_SOCIETE"]));
$newClient->setAdresse(htmlentities($_POST["ADRESSE_DU_CLIENT"]));
$newClient->setCommentaire(htmlentities($_POST["COMMENTAIRE"]));
$newClient->setCodePostal(htmlentities($_POST["CODE_POSTAL"]));


cnsDAO::AjouterClient($newClient);

   $chuj = array();
   $chuj = cnsDAO::ListeClients();
   AfficheListeClients($chuj);

exit();
