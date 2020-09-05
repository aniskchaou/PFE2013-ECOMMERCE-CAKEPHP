<?php

class PagesController extends  AppController
{

public $produit= array();
//var $name = 'Mailer';


//modele utilise au lieu modele par default
public $uses = array('Post','Page','Produit','User','Panier','Etoile');

function index()
{

$username=$this->Session->read('username');
if(!empty($username))
{

$this->Session->delete('user');
}
if(empty($username))
{
$this->Session->write('user',$_SERVER["REMOTE_ADDR"]);

}
//$produit=$this->Produit->find('all',array('limit'=>15));
$this->paginate=array('Produit'=>array('limit'=>12));
$produit=$this->Paginate('Produit');
$this->set('produits',$produit);

/*$plusvendu =$this->Etoile->find('all',array('conditions'=>array('valeur'=>4)));
foreach($plusvendu as $p)
{
//$this->set('plusvendu',$plusvendu);

$aff=$this->Produit->find('all',array('conditions'=>array('nom'=>$p['Etoile']['nom'])));
debug($aff);
$this->set('liste',$aff);



}
*/
$remise=$this->Produit->find('all',array('conditions'=>array('remise'=> 'true')));
$this->set('remise',$remise);
}
function show($id=null)
{


$pagecourante=$this->Page->read(null,$id);

if(empty($pagecourante))
{
throw new NotFoundException('aucune page ne correspond a cette id');

}
$this->set('page',$pagecourante);
}


function admin_index()
{

$this->paginate=array('Page'=>array('limit'=>1));
$page=$this->Paginate('Page');
$this->set('page',$page);


}

function admin_delete($id)
{
//$this->Page->delete($id);
$this->Session->setFlash("page supprimer ","notif");


$this->redirect($this->referer());

}


function admin_edit($id=null)
{
if($this->request->is('put'))
{
$this->Page->save($this->request->data);

$this->Session->setFlash('page a ete modifie',"notif");
$this->redirect(array('action'=>'admin_index'));
}
$this->Page->id=$id;
$this->data=$this->Page->read();
}

function menu()
{
$pages=$this->Page->find('all');
//$this->set('pages',$pages);
return $pages;
}

function admin_menu()
{




}

function display()
{


}



function login()
 {
 
 if($this->request->is('post'))
{
$login=$this->User->find('first',array ('conditions'=>array('username'=>$this->request->data['User']['username'],'password'=>$this->request->data['User']['password'])));
if(!$login)
{
$this->Session->setFlash("erreue login ou  mot de passe ","notif");
}else
{
$this->Session->setFlash("juste ","notif");

$user=$this->Session->write('username',$login['User']['username']);
if($_SERVER['REMOTE_ADDR']==$user)
{
$this->Panier->user=$username;
$this->Panier->updateAll(array('user'=>"'".$username."'"),array('user'=>$user) );
$this->Session->delete('user');
$this->redirect(array('action'=>'panel','controller'=>'panier'));
}





}
}
 
 }

function panier()
{
$user=$this->Session->read('user');
$username=$this->Session->read('username');

if(isset($username))
{
$nb=$this->Panier->find('count',array('conditions'=>array('user'=>$username)));

return $nb;




}else if(isset($user))
{
$nb=$this->Panier->find('count',array('conditions'=>array('user'=>$user)));

return $nb;

}

}

function contact()
{


if(isset($_POST['email'])and isset($_POST['titre']) and isset($_POST['message']) )
{
  
require("mail/class.phpmailer.php");
   $mail = new PHPMailer();  
  
// Set up SMTP  
$mail->IsSMTP();                // Sets up a SMTP connection  
$mail->SMTPDebug  = 2;          // This will print debugging info  
$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization  
$mail->SMTPSecure = "tls";      // Connect using a TLS connection  
$mail->Host = "smtp.gmail.com";  
$mail->Port = 587;  
$mail->Encoding = '7bit';       // SMS uses 7-bit encoding  
  
// Authentication  
$mail->Username   = "kchaouanis22@gmail.com"; // Login  
$mail->Password   = "20486902"; // Password  
  
// Compose  
$mail->Subject = "Testing";     // Subject (which isn't required)  
$mail->Body = "Testing";        // Body of our message  
  
// Send To  
$mail->AddAddress( "kchaouanis22@yahoo.fr" ); // Where to send it  
var_dump( $mail->send() );
  
}



}
function recherche($nom)
{

$nb=$this->Produit->find('all',array('conditions'=>array('nom'=>$nom)));

$this->set('pc',$nb);





}

}
?>