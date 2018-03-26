
<?php

function AfficheListeContacts($contacts)
{
    ?>
          <table >
              <thead>
                <tr>

                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Téléphone</th>
                  <th>Fonction</th>
                  <th hidden>idContact</th>

              </tr>
            </thead>
            <tbody>

                <?php
                foreach ($contacts as $row) {
                    ?>
                <tr>

                    <td><?php echo $row['NOM_CONTACT']?></td>
                    <td><?php echo $row['PRENOM_CONTACT']?></td>
                    <td><?php echo $row['TEL_CONTACT']?></td>
                    <td><?php echo $row['FONCTION_CONTACT']?></td>
                    <td hidden><?php echo $row['ID_CONTACT_CLIENT']; ?></td>

              </tr>
              <?php
                } ?>
            </tbody>

          </table>


<?php
} ?>
