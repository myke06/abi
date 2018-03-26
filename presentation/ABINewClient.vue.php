<?php
function NewClient($dataType, $dataReal)
{
    ?>

<body class="admin">

<h1>Saisie d'un nouveau film</h1>

<form name="frmNewFilm" action="ABIAjouterClient2.php" method="post">
<table>

	<tr>
		<td>Raison Sociale :</td><td><input type = "text" name="RAISON_SOCIALE" /></td>
	</tr>
	<tr>
		<td>Telephone :</td><td><input type = "text" name="TELEPHONE" /></td>
	</tr>
	<tr>
		<td>Nature :</td>
		<td>
			<select name="NOM_NATURE">
				<?php
                foreach ($dataType as $rowType) {
                    ?>
				<option value = "<?php  echo $rowType['NOM_NATURE'] ?>"><?php  echo $rowType['NOM_NATURE']?></option>
				<?php
                } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Type :</td>
		<td>
			<select name="TYPE_SOCIETE" />
				<?php
                foreach ($dataReal as $rowStar) {
                    ?>
				<option value = "<?php  echo $rowStar['TYPE_SOCIETE'] ?>"><?php  echo trim($rowStar['TYPE_SOCIETE']) . " " . trim($rowStar['TYPE_SOCIETE']); ?></option>
				<?php
                } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Effectifs :</td><td><input type = "text" name="EFFECTIF" /></td>
	</tr>
	<tr>
		<td>Code postale:</td><td><input type = "text" name="CODE_POSTAL" /></td>
	</tr>
	<tr>
		<td>Ville:</td><td><input type = "text" name="VILLE" /></td>
	</tr>
	<tr>
		<td>Adresse:</td><td><input type = "text" name="ADRESSE_DU_CLIENT" /></td>
	</tr>
	<tr>
		<td>Commentaire :</td><td><textarea name="COMMENTAIRE"></textarea></td>
	</tr>
	<tr>
		<td>CA:</td><td><input type = "text" name="CA" /></td>
	</tr>
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
