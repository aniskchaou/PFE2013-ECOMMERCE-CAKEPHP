
<table width="500"><tr bgcolor="orange" ><td>nom</td><td> prix</td><td>quantite stock</td></tr>
<?php 
foreach($stock as $s)
{
echo "<tr><td>".$s['Produit']['nom']."</td>";
echo "<td>".$s['Produit']['prix']."</td>";
if($s['Produit']['qte_stock']==0)
{
echo "<td><b>n'est pas disponible</b> </td></tr>";
}else
{
echo "<td>".$s['Produit']['qte_stock']."</td></tr>";

}


}
?>
</table>