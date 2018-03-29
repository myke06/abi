<?php
require("presentation/ABINewContact.vue.php");
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitrePrinc.vue.php');


if (isset($_GET["idClient"]) && !empty($_GET["idClient"])) {
    $idClient = trim(htmlentities($_GET["idClient"]));
    NewContact($idClient);
}
afficheEntete(); ?>
</head>
<body>

<!-- 1° ligne de titre -->
<header>
	<?php  afficheTitrePrinc();?>
</header>



</html>
