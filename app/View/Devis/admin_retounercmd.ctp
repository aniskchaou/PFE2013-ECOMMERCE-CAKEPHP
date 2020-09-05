<table width="300">
<tr bgcolor="orange"><td>produit</td><td>email</td></tr>
<?php
foreach($devi as $d)
{
echo "<tr><td>";
echo $d['Devi']['produit'];
echo "</td><td>";
echo $d['Devi']['email'];
echo "</td></tr>";




}


?>
</table>

<table width="600">
<tr bgcolor="orange"><td>produit</td><td>prix</td></tr>
<?php
echo $this->Form->create('Devi');
foreach($produit as $p)
{
echo "<tr><td>";
echo $this->Form->checkbox('nom', array('value' => $p['Produit']['nom'] ,'hiddenField' => false)).$p['Produit']['nom'];
echo "<br>";
echo "</td><td>".$p['Produit']['prix']."$".$this->Form->hidden('prix', array('value' => $p['Produit']['prix']))."</td></tr>";

}
















echo"</table>";
echo"quantite"."<br>";
echo $this->Form->text('qte',array('label'=>'quantite'));

echo $this->Form->input('email',array('label'=>'email')) ;

echo $this->Form->end('retourner devis');
?>