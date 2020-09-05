<table >
<tr>
<th>image</th>
<th>nom</th>
<th>action</th>
</tr>

<?php
foreach($medias as $k=>$v)
?>
<tr>
<td><?php echo $this->Html->image($v['Media']['url'],array('style'=>'max-width:250px; max-height:200px'));       ?></td>
<td><?php  echo $v['Media']['name'];      ?></td>
<td> <?php echo $this->Html->link('supprimer', array('action'=>'delete',$v['Media']['id']),null,'voulez vous supprimer cette image');?> </td>
</tr>
<?php
?>
</table>
