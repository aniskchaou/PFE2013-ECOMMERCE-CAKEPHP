<table width="700">
<tr>
<td bgcolor="orange"><b>produit</b></td>
<td bgcolor="orange"><b>email</b></td>
<td bgcolor="orange"><b> nom </b></td>
<td bgcolor="orange"><b> action </b></td>
</tr>
<?php

foreach($devi as $d)
{
?>
<tr><td><?php echo $d['Devi']['nom']; ?></td><td><?php echo $d['Devi']['email']; ?></td>
<td><?php echo $d['Devi']['produit']; ?></td>

<td><?php echo $this->Html->link('retourner devis',array('action'=>'retounercmd',$d['Devi']['nom']));  ?> </td>                  


</tr>
<?php
}












?>
</table>