<h1 style="color:green">devis</h1><?php$total=0;foreach ($not as $n){echo "<b>produit</b>: ".$n['Notification']['produit']."</br>";echo "<b>quantite</b>: ".$n['Notification']['quantite']."</br>";echo "<b>prix</b>: ".$n['Notification']['prix']."</br>";$total=$total+$n['Notification']['prix'];}echo "<b>demandeur</b>: ".$n['Notification']['nom']."</br>";echo "<b>email</b>: ".$n['Notification']['email']."</br>";echo "<b>total :</b><b>".$total."$</b><br>"; ?><a href="javascript:window.print()">imprimer cette page</a>