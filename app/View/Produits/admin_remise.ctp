
<table width="300"><tr bgcolor="orange" ><td>nom</td><td>ancien prix</td><td>nouveau prix</td></tr>
<?php 
foreach($remise as $r)
{
echo "<tr><td>".$r['Produit']['nom']."</td>";
echo "<td>".$r['Produit']['prix']."</td>";
echo "<td>".$r['Produit']['nprix']."</td></tr>";



}
?>
</table>