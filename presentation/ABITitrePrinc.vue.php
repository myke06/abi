<?php

function afficheTitrePrinc()
{
    $cejour = getdate();

    $libmois[1] = 'janvier';
    $libmois[2] = 'février';
    $libmois[3] = 'mars';
    $libmois[4] = 'avril';
    $libmois[5] = 'mai';
    $libmois[6] = 'juin';
    $libmois[7] = 'juillet';
    $libmois[8] = 'aout';
    $libmois[9] = 'septembre';
    $libmois[10] = 'octobre';
    $libmois[11] = 'novembre';
    $libmois[12] = 'décembre'; ?>

<script language="JavaScript">


function goBackSite(){

	document.getElementById("divLogin").style.visibility="hidden";
}
</script>



<div id="bonjour">
<?php
try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT FIRSTNAME, PWD_USER FROM user WHERE MAIL_USER=\'' . $_SESSION['email'] . '\'');

    while ($donnees = $reponse->fetch()) {
        echo  ' Bonjour ' . $donnees['FIRSTNAME'] . ' votre mot de passe est "' . $donnees['PWD_USER'] .'":)<br />';
    }

    $reponse->closeCursor(); ?>

</div>





<a href="ABIEcranPrinc.php"><img src="images/logo2.jpg" alt="logo du site" id = "logoAbi" height="20%" width="20%"border="0" /></a>

		<div class = 'date'>
	  <?php  echo $cejour['mday'] . ' ' . $libmois[$cejour['mon']] . ' ' . $cejour['year']; ?> <br /><a href="ABIAccueil.php">Logout</a></font>

 </div>
<?php
}
?>
