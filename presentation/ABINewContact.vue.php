<?php
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitre.vue.php');



    
afficheEntete(); ?>
</head>
<body>

<!-- 1° ligne de titre -->
<header>
	<?php  afficheTitre();?> 
</header>



</html>
<?php
function NewContact($idClient)
{
    ?>
	
<body class="admin">

<h1>Saisie d'un nouveau film</h1>

<form name="frmNewContact" action="ABIAjouterContact2.php?idClient=<?php echo $idClient ?>" method="post">
<table>

	<tr>
		<td>Nom :</td><td><input type = "text" name="NOM_CONTACT" required/></td>
	</tr>
	<tr>
		<td>Prenom:</td><td><input type = "text" name="PRENOM_CONTACT" required/></td>
	</tr>

	<tr>
		<td id="tel1">Telefone :</td><td><input type = "text" id="tel" name="TEL_CONTACT" required/></td><td><span id="aideTel"></span></td>
	</tr>
	<tr>
		<td>Fonction:</td><td><input type = "text" name="FONCTION_CONTACT" required /></td>
	</tr>
<input type="hidden" name="idClient" value="<?php echo $idClient; ?>">
	<tr>
		<td><input type="submit" value="Créer" /></td><td><input type="reset" value="Recommencer"/ ></td>
	</tr>
</table>
</form>
<script type="text/javascript" src="../ABI-MASTER/js/verif_contact.js"></script>
</body>
</html>

<?php
}
?>
