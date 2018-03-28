<?php

require("presentation/ListeClient.vue.php");
require('DAO/dao.php');

  
$afficheClients = array();
$afficheClients = cnsDAO::ListeClients();
AfficheListeClients($afficheClients);