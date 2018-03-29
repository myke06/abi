<?php

require("presentation/ABINewClient.vue.php");

require("DAO/dao.php");

$dataType = array();
$dataType = cnsDAO::ListeClients();

$dataReal = array();
$dataReal = cnsDAO::ListeClients();

NewClient($dataType, $dataReal);
