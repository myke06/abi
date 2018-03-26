<?php
function afficheClient($client)
{
    ?>

<table class="table table-user-information">
  <tbody>
    <tr>
      <td><strong>Téléphone:</strong></td>
      <td><?php echo $client['TELEPHONE']; ?></td>
    </tr>
    <tr>
      <td><strong>Adresse:</strong></td>
      <td><?php echo $client['ADRESSE_DU_CLIENT']; ?></td>
    </tr>
    <tr>
      <td><strong>Ville:</strong></td>
      <td><?php echo $client['VILLE']; ?></td>
    </tr>

       <tr>
           <tr>
      <td><strong>Code Postal:</strong></td>
      <td><?php echo $client['CODE_POSTAL']; ?></td>
    </tr>
      <tr>
      <td><strong>Nature:</strong></td>
      <td><?php echo $client['NOM_NATURE']; ?></td>
    </tr>
    <tr>
      <td><strong>Type:</strong></td>
      <td><?php echo $client['TYPE_SOCIETE']; ?></td>
    </tr>
      <td><strong>Chiffre d'Affaires:</strong></td>
      <td><?php echo $client['CA']; ?></td>
    </tr>
  </tr>
    <td><strong>Effectif:</strong></td>
    <td><?php echo $client['EFFECTIF']; ?></td>
  </tr>
</tr>
  <td><strong>Commentaire:</strong></td>
  <td><?php echo $client['COMMENTAIRE']; ?></td>
</tr>

  </tbody>
</table>
<form class="" action="ABIAjouterContact.php?idClient=<?php echo $client['ID_CLIENT']; ?>" method="post">
    <input type="submit" value="Ajouter Contact">
</form>
<?php
} ?>
