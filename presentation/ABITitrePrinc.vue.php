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
<table >
    <tr>
      <td><a href="ABIEcranPrinc.php"><img src="images/VCLogo.gif" border="0"/></a></td>
      <td class="centrer">
			<div class="titrevideo">Vidéo-Club</div>
			<div class="soustitrevideo">... et si on se faisait une toile, à la maison ?</div>
	  </td>
      <td><?php  echo $cejour['mday'] . ' ' . $libmois[$cejour['mon']] . ' ' . $cejour['year']; ?> <br /><a href="ABIAccueil.php">Logout</a></font></td>
    </tr>
</table>

<?php
}
?>
