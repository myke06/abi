<?php

require("metier/contact.php");

require("DAO/dao.php");

require("presentation/ABIClient.vue.php");
require("presentation/ABIListeContact.vue.php");

$newContact = new contact();

$newContact->setNomContact(htmlentities($_POST["NOM_CONTACT"]));
$newContact->setPrenomContact(htmlentities($_POST["PRENOM_CONTACT"]));
$newContact->setTelContact(htmlentities($_POST["TEL_CONTACT"]));
$newContact->setFonctionContact(htmlentities($_POST["FONCTION_CONTACT"]));
$newContact->setIdClient(trim(htmlentities($_POST["idClient"])));

cnsDAO::AjouterContact($newContact);
if (isset($_POST["idClient"]) && !empty($_POST["idClient"])) {
    $idClient = trim(htmlentities($_POST["idClient"]));
    $listContact = cnsDao::getContactsList($idClient);
    $client = cnsDao::getClientById($idClient);
    afficheClient($client);
    AfficheListeContacts($listContact);
} else {
    $error = urlencode("Une erreur c'est produite sur le client");
    header("location: index.php?erreur=$error");
    exit();
}

exit();
