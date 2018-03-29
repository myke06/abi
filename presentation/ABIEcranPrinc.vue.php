<?php
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

<header>
	<?php  afficheTitrePrinc(); ?>
</header>

<nav>
<?php afficheMenu(); ?>
</nav>

</body>

<?php
}
?>
