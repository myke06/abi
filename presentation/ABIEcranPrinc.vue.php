<?php // ********** code PHP objet en couches ***************
      // script affichage page accueil site Video-club

// chargement des fonctions d'affichage externes
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitrePrinc.vue.php');
require('presentation/ABIPass.vue.php');
require('presentation/ABIMenu.vue.php');

function AfficheEcranPrinc()
{
    ?>
<head>


<?php afficheEntete(); ?>
</head>
<body>

<!-- 1° ligne de titre -->
<header>
	<?php  afficheTitrePrinc(); ?>
</header>

<!--colonne menu : VCIMenu.htm -->
<!--  menu  -->
<nav>
<?php afficheMenu(); ?>
</nav>

<!-- contenu principal de la page -->

<!-- fin de contenu principal de la page -->

</body>
</html>
<?php
}
?>
