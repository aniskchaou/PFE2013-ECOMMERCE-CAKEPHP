<?php 

echo  $this->Html->link('',array('action'=>'index','controller'=>'pages'),array('class'=>'icon-home'));
echo" > ";
echo  $this->Html->link('votre panier',array('action'=>'voir','controller'=>'panier'));
echo "<br>";
?>
<?php $s=0;     ?>
<br>
<table class="table" width="930">
	<tr>
		<td>Nom</td>
		<td>Quantité</td>
		<td>Prix</td>
		<td>Action</td>
	</tr>
	<?php
	if(!empty($panier))
	{
		foreach($panier as $pan)
		{

			?>
			<tr>
				<td><?php echo $pan['Panier']['name'];?></td>
				<td><?php echo $pan['Panier']['qte'];?></td>
				<td><?php echo $pan['Panier']['prix'];?></td>
				<td><?php echo  $this->Html->link('',array('action'=>'supprimer',$pan['Panier']['id']),array('class'=>'icon-trash'));?></td>

				<?php $s=$s+$pan['Panier']['prix']; ?>
			</tr>
			<?php
		}

		?>
		<tr BGCOLOR="#99CCFF">
			<td colspan="3">total</td>
			<td> <?php echo $s;  ?></td>
		</tr> 
	</table><br>
	<?php
}
if(empty($panier))
{
	echo "votre panier est vide";
	echo"<br>";
}
echo  $this->Html->link('retour',array('action'=>'index','controller'=>'pages'),array('class'=>'btn'));

echo  $this->Html->link('suivant',array('action'=>'login','controller'=>'panier'),array('class'=>'btn btn-success'));
$user = $this->Session->read('user');


?>
