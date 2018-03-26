<?php // ********** code PHP objet en couches ***************
      // script affichage page accueil site Video-club

// chargement des fonctions d'affichage externes
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitre.vue.php');
require('presentation/ABIPass.vue.php');

function AfficheEcranAccueil()
{
    ?>
<head>


<?php afficheEntete(); ?>
</head>
<body>

<!-- 1° ligne de titre -->
<header>
	<?php  afficheTitre(); ?>
</header>
<main>
<h1>
Bienvenue sur le site du Vidéo Club !
</h1>
</main>
<!--colonne menu : VCIMenu.htm -->


<!-- contenu principal de la page -->

<!-- fin de contenu principal de la page -->

</body>
</html>
<?php
}
?>
