<?php  //request action appeler action depuis une vue

$nb=$this->requestAction(array('controller'=>'pages','action'=>'panier'));
if(empty($nb))
{
echo 0 ;
}else
{
echo $nb ;
}

?>