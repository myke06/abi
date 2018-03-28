<?php
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitrePrinc.vue.php');
require('presentation/ABIPass.vue.php');
require('presentation/ABIMenu.vue.php');
require('presentation/ABIGeolocalisation.vue.php');
?>

    <?php
function AfficheEcranPrinc()
{
    ?>


<?php afficheEntete(); ?>
</head>


<header>

	<?php  afficheTitrePrinc(); ?>
</header>
<body>
<main>
    <?php afficheMenu(); ?>
</main>


<?php afficheCarte(); ?>
</body>
</html>
<?php
}
?>
