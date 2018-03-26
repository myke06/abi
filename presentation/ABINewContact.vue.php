<?php
function NewContact($idClient)
{
    ?>
	
<body class="admin">

<h1>Saisie d'un nouveau film</h1>

<form name="frmNewContact" action="ABIAjouterContact2.php?idClient=<?php echo $idClient ?>" method="post">
<table>

	<tr>
		<td>Nom :</td><td><input type = "text" name="NOM_CONTACT" /></td>
	</tr>
	<tr>
		<td>Prenom:</td><td><input type = "text" name="PRENOM_CONTACT" /></td>
	</tr>

	<tr>
		<td>Telefone :</td><td><input type = "text" name="TEL_CONTACT" /></td>
	</tr>
	<tr>
		<td>Fonction:</td><td><input type = "text" name="FONCTION_CONTACT" /></td>
	</tr>
<input type="hidden" name="idClient" value="<?php echo $idClient; ?>">
	<tr>
		<td><input type="submit" value="Créer" /></td><td><input type="reset" value="Recommencer"/ ></td>
	</tr>
</table>
</form>

</body>
</html>

<?php
}
?>
