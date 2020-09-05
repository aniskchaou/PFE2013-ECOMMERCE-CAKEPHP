<table width="300"><tr bgcolor="orange"><td><b>nom</b></td><td><b>etoiles</b></td></tr> 

<?php

foreach($pro as $p)
{
echo "<tr><td>";


echo $p['Etoile']['nom'];
echo"</td><td>";
echo $p['Etoile']['valeur'];
echo"</td></tr>";







}
?>
</table>