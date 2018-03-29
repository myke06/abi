<?php

require('DAO/dao.php');
require("presentation/ABIClient.vue.php");
require("presentation/ABIListeContact.vue.php");
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitrePrinc.vue.php');

afficheEntete(); ?>
</head>
<body>

<!-- 1° ligne de titre -->
<header>
	<?php  afficheTitrePrinc();?>
</header>



</html>
<?php
    if (isset($_GET["idClient"]) && !empty($_GET["idClient"])) {
        $idClient = trim(htmlentities($_GET["idClient"]));
        $listContact = cnsDao::getContactsList($idClient);
        $client = cnsDao::getClientById($idClient);
        afficheClient($client);
        AfficheListeContacts($listContact);
    } else {
        $error = urlencode("Une erreur c'est produite sur le client");
        header("location: index.php?erreur=$error");
        exit();
    }


    ?>
