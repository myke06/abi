<?php
require('presentation/ABIEntete.vue.php');
require('presentation/ABITitrePrinc.vue.php');




function AfficheListeClients($clients)
{
    afficheEntete(); ?>
</head>
<body>

<!-- 1° ligne de titre -->
<header>
	<?php  afficheTitrePrinc(); ?> 
</header>



</html>

          <table id="listClientTable" class="display nowrap" >

       <thead>
            <tr>
                <th class="text-center">RAISON SOCIALE</th>
                <th class="text-center">TELEPHONE</th>
                <th class="text-center">CHIFFRE D'AFFAIRE</th>
                <th class="text-center">NATURE</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($clients as $row) {
                ?>

            <tr>
                <td class="text-center"><a href="ABIClient.php?idClient=<?php echo $row['ID_CLIENT']; ?>"><?php echo $row['RAISON_SOCIALE']?></a></td>
                <td class="text-center"><?php echo $row['TELEPHONE']?></td>
                <td class="text-center"><?php echo $row['CA']?></td>
                <td class="text-center"><?php echo $row['NOM_NATURE']?></td>
            </tr>

            <?php
            } ?>
        </tbody>

    </table>
    </body>
<?php
} ?>
