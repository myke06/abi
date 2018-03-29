
<?php
function NewClient($dataType, $dataReal)
{
    ?>

<body class="admin">

<h1>Saisie d'un nouveau film</h1>

<form name="frmNewFilm" action="ABIAjouterClient2.php" onsubmit="return validateForm()" method="post">
<table>

	<tr>
		<td>Raison Sociale :</td><td><input type = "text" name="RAISON_SOCIALE" required /></td>
	</tr>
	<tr>
		<td id="tel1">Telephone :</td><td><input type = "text" id="tel" name="TELEPHONE" required/></td>
<td id="aideTel"></td>
	</tr>
	<tr>
		<td>Nature :</td>
		<td>
			<select name="NOM_NATURE">
				<option value=""></option>
					<option value="ancienne">Ancienne</option>
	                <option value="principale">Principale</option>
					<option value="secondaire">Secondaire</option>
		    </select>
		</td>
	</tr>
	<tr>
		<td>Type :</td>
		<td>
			<select name="TYPE_SOCIETE">
                <option value="prive">Prive</option>
                <option value="public">Public</option>
            </select>
		</td>
	</tr>
	<tr>
		<td id="eff1" >Effectifs :</td><td><input type = "text" id="eff" name="EFFECTIF" /></td><td><span id="aideEff"></span></td>
	</tr>
	<tr>
		<td id="cp1">Code postale:</td><td><input type = "text" id="cp"  name="CODE_POSTAL" required /></td>
			<td>
			<span id="aidePost"></span>
			</td>

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
		<td id="ca1">CA:</td><td><input type = "text" id="ca" name="CA" /></td><td><span id="aideCa"></span></td>
	</tr>
	<tr>
		<td><input type="submit" value="Créer"  /></td><td><input type="reset" value="Recommencer"/ ></td>
	</tr>
</table>
</form>
<script type="text/javascript" src="../Projet ABI/js/verif.js"></script>
</body>
</html>

<?php
}
?>
