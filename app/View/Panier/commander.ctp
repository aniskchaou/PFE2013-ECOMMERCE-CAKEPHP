


  
 <b style="font-size:25px;color:green;"> <?php echo $prod['Produit']['nom'] ;?> </b>
  
<table width="940">
  <tr><td>
 <?php echo $this->Html->image($prod['Produit']['url'],array('style'=>'max-width:300px;max-height:300px;'));?>
  
  
  </td>
  
  <td bgcolor="orange">
 <b style="font-size:10px;color:green;"> caracteristques</b><br>
  <b style="color:blue;">catre graphique</b> <?php echo $prod['Produit']['cartegraphique']?> <br>
<b  style="color:blue;">memoire</b><?php echo $prod['Produit']['memoire']?> GO<br>
<b style="color:blue;">proccesseur</b><?php echo $prod['Produit']['processeur']?> <br>
<b style="color:blue;">ecran</b> <?php echo $prod['Produit']['ecran']?> ""<br>
  		<form action="../index" method="post">  
   quantite
   <input  type="text" name="qte"/>
   <input type="hidden" name="id"  value="<?php echo $prod['Produit']['id'] ;   ?>"/><br>
   <input type="submit" class="btn btn-success" value="ajouter panier"/>
   
   </form>
	 <?php echo  $this->Html->link('voir panier',array('action'=>'voir'),array('class'=>'btn btn-primary'));
	 
	 
	 ?>     
  
  </td>
  
  
  </tr>
  
  
  
  
</table>
			
		

   

  