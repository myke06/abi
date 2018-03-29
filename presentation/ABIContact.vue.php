<?php
require("presentation/ABINewContact.vue.php");


if (isset($_GET["idClient"]) && !empty($_GET["idClient"])) {
    $idClient = trim(htmlentities($_GET["idClient"]));
    NewContact($idClient);
}
