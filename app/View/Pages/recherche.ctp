<table>
<?php

foreach($pc as $p)
{
?>
<tr>
<td>
<?php echo $this->Html->image($p['Produit']['url'],array('style'=>'max-width:100px;max-height:100px;')); ?>

</td>
<td>

<?php echo $p['Produit']['nom']; echo "<br>";
 echo $p['Produit']['cartegraphique']; echo "<br>";
echo  $p['Produit']['memoire'] ; echo "<br>";
 echo $p['Produit']['processeur'] ; echo "<br>";
 echo $p['Produit']['ecran']; echo "<br>";

?>














</td>
</tr>
<?php
}

?>
</table>



