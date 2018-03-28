<?php // ********** code PHP objet en couches ***************
      // script affichage page accueil site Video-club

// chargement des fonctions d'affichage externes
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitre.vue.php');
require('presentation/ABIPass.vue.php');
require('presentation/ABIGeolocalisation.vue.php');
?>


<?php function AfficheEcranAccueil()
{
    ?>



<?php afficheEntete(); ?>
</head>
<body>

<!-- 1° ligne de titre -->
<header>
	<?php  afficheTitre();?> 
</header>
<main>

</main>
<!--colonne menu : VCIMenu.htm -->

<?php afficheCarte();?> 

</body>
</html>
<?php
}
?>
