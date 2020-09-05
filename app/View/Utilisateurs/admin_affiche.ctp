


<table width="600"><tr bgcolor="orange" ><td>nom</td><td>email</td><td>action</td><td>Historique</td><td>commande</td></tr>
<?php 
foreach($user as $r)
{
echo "<tr><td>".$r['Utilisateur']['name']."</td>";

echo "<td>".$r['Utilisateur']['email']."</td>";

echo "<td>".$this->Html->link("supprimer "  ,array('action'=>'delete',$r['Utilisateur']['id']),null,'voulez vous vraiment supprimer cet utilisateur ?')."</td>";
echo "<td>".$this->Html->link("voir historique",array('action'=>'voir','controller'=>'historiques',$r['Utilisateur']['name']))."</td>";
echo "<td>".$this->Html->link("voir commandes",array('action'=>'recevoir','controller'=>'commandes',$r['Utilisateur']['name']))."</td></tr>";

}
?>
</table>

















