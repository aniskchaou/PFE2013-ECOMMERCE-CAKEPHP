<?php echo $this->Form->create('Devi'); 
$s=0;
echo $this->Form->input('email',array('label'=>'Email :'));
echo $this->Form->input('nom',array('label'=>'Nom :'));
echo $this->Form->input('accepte',array('value'=>'false','type'=>'hidden'));
echo "message"."<br>";
echo $this->Form->textarea('produit',array('label'=>'Message :'));
echo $this->Form->submit('Demander devis');

     ?>
<!--
<table width="700">
<tr>
<td bgcolor="orange"></td>
<td bgcolor="orange"><b>nom</b></td>
<td bgcolor="orange"><b>prix</b></td>
<td bgcolor="orange"><b>image</b></td>
</tr>
-->

<?php
/*
foreach($produit as $prod)
{
?>
<tr>
<td>
<?php
echo $this->Form->checkbox("nom", array('hiddenField' => false ,'value'=>$prod['Produit']['nom'],'multiple'=>true));
?>
</td>
<td><?php echo $prod['Produit']['nom'];   ?></td>
<td><?php echo $prod['Produit']['prix'];   ?></td>
<td><?php echo $this->Html->image($prod['Produit']['url'],array('style'=>'max-width:100px;max-height:100px;'));?></td>
<?php  
$s=$s+$prod['Produit']['prix'];


$this->Form->hidden( 'prix', array( 'value' => $s ) ); ?>
</tr>
<?php
}




?>

</table>
<?php

echo $this->Form->submit('commander');
debug($_POST);


?>
<div class="pagination pagination-centered">

<ul><?php  echo $this->Paginator->numbers(array('separator'=>false,'tag'=>'li')); ?></ul>

</div> 
*/
