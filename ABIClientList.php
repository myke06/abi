<?php

require("presentation/ListeClient.vue.php");
require('DAO/dao.php');
require("presentation/ABIEcranPrinc.vue.php");

AfficheEcranPrinc();
   $chuj = array();
   $chuj = cnsDAO::ListeClients();
   AfficheListeClients($chuj);
