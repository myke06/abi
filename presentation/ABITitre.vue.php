<?php

function afficheTitre()
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

<a href="ABIAccueil.php">
<img src="images/logo2.jpg" alt="logo du site" id = "logoAbi" height="20%" width="20%"border="0" /></a>

	  
     <div class = 'date'> <?php  echo $cejour['mday'] . ' ' . $libmois[$cejour['mon']] . ' ' . $cejour['year']; ?> 
     <br />
     <a href="ABILogin.php">Login</a></font>
      </div>


<?php
}
?>
