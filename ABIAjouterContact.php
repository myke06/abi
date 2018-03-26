<?php 
      require('DAO/dao.php');
      require("presentation/ABIClient.vue.php");
      require("presentation/ABIListeContact.vue.php");
      require("presentation/ABINewContact.vue.php");

          if (isset($_GET["idClient"]) && !empty($_GET["idClient"])) {
              $idClient = trim(htmlentities($_GET["idClient"]));
              $listContact = cnsDao::getContactsList($idClient);
              $client = cnsDao::getClientById($idClient);
              NewContact($idClient);
          }
