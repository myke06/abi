<?php
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitre.vue.php');
require('presentation/ABIPass.vue.php');

function AfficheLogin()
{
    ?>
<head>

<?php afficheEntete(); ?>
</head>
<body>

<header>
	<?php  afficheTitre(); ?>
</header>

<nav>
	<?php  displayLogin(); ?>
</nav>

</body>
</html>
<?php
}
?>
