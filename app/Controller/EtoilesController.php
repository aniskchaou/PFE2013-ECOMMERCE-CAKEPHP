<?php

class EtoilesController extends AppController
{


function vote()
{
$valeur=$_POST['val'];
$nom=$_POST['nom'];

$this->Etoile->save(array('nom'=>$nom,'valeur'=>$valeur));


}

function admin_index()
{
$p=$this->Etoile->find('all');
$this->set('pro',$p);

}




}
?>