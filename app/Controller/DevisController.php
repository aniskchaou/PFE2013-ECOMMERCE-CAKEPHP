<?php

Class DevisController extends AppController
{
public $uses=array('Produit','Devi','Notification');

function devis()
{


if($this->request->data)
{
//$this->Devi->saveField('accepte','false');
	
  
$this->Devi->save($this->request->data);
$this->Session->setFlash("devi est envoye ","notif");


}
}



function admin_commandes()
{
$devi=$this->Devi->find('all');
$this->set('devi',$devi);

}

  
function admin_retounercmd($user)
{  
$devis=$this->Devi->find('all',array('conditions'=>array('nom'=>$user)));
$this->set('devi',$devis);
$produit=$this->Produit->find('all');
$this->set('produit',$produit);
if($this->request->data)
{
$email=$this->data['Devi']['email'];
$prix=$this->data['Devi']['prix'];
//$image=$this->data['Devi']['image'];
$quantite=$this->data['Devi']['qte'];
$nom=$this->data['Devi']['nom'];




$this->Notification->save(array('nom'=>$user,'email'=>$email,'prix'=>$prix,'quantite'=>$quantite,'produit'=>$nom));
$this->Session->setFlash("devi a ete envoye","notif");






}


}











}






?>