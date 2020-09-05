<?php

class HistoriquesController extends AppController
{



function admin_voir($nom)
{
$his=$this->Historique->find('all',array('conditions'=>array('nom'=>$nom)));
$this->set('historique',$his);



}











}
?>