<table width="200">
<?php

$total=0;
foreach($comm as $c)
{
echo "<tr><td>".$c['Commande']['prod_comm']."  "."</td><td>".$c['Commande']['qte_prod_comm']."   "."</td><td>".$c['Commande']['prix_prod_comm']."  "."$</td></tr>";




$total+= $c['Commande']['prix_prod_comm'];



}

echo"<tr><td><h3>".$total."$</h3></td></td>";

?>

</table>

<form  action="https://www.sandbox.paypal.com/tn/cgi-bin/webscr" method="post">

<input  name="amount" type="hidden"  value="<?php echo $total ;  ?>"/>
<input  name="currency_code" type="hidden"  value="USD"/>
<input  name="shipping" type="hidden"  value="0.00"/>
<input  name="tax" type="hidden"  value="0.00"/>
<input  name="return" type="hidden"  value="http://localhost/pfe2013/panier/success"/>
<input  name="cancel_return" type="hidden"  value="http://localhost/pfe2013/panier/cancel"/>
<input  name="notify_url" type="hidden"  value="http://127.0.0.1/pfe2013/panier/ipn"/>
<input  name="cmd" type="hidden"  value="_xclick"/>
<input  name="business" type="hidden"  value="kchaouanis22@yahoo.fr"/>
<input  name="item_name" type="hidden"  value="<?php echo $c['Commande']['prod_comm'];            ?>"/>
<input  name="no_note" type="hidden"  value="1"/>
<input  name="lc" type="hidden"  value="FR"/>
<input  name="bn" type="hidden"  value="PP_BuyNowBF"/>
<input  name="custom" type="hidden"  value="user_id=1"/>
<input    type="submit" value="acheter" class=".acheter"/>
<input    type="reset" value="annuler" class="anuuler"/>










</form>

