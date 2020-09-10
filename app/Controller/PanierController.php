<?php

class PanierController extends AppController

{
    public $uses = array('Post','Page','Produit','Panier','User','Achat','Utilisateur','Historique','Devi','Commande','Notification');
//var $helpers = array('Cache');
    function index()
    {
        $this->Session->write('user',$_SERVER["REMOTE_ADDR"]);
        $username=$this->Session->read('username');
        if(!empty($username))
        {

            $this->Session->delete('user');
        }
        $id=$_POST['id'];
        $qte=$_POST['qte'];
        $produi=$this->Produit->read(null,$id);
        $name=$produi['Produit']['nom'];
        $prix=$produi['Produit']['prix'];

        if(empty($username))
        {
            $user= $_SERVER["REMOTE_ADDR"];
        }else
        {

            $user=$username;
        }




        $this->Panier->save(array('id'=>$id,'user'=>$user,'qte'=>$qte,'name'=>$name,'prix'=>$prix));
        $this->Session->setFlash(" cet produit ajouter au panier ","notif");

        $this->redirect($this->referer());










/*

$this->creationPanier();
if ($this->creationPanier()==true )
{

$_SESSION['panier']['id'] = $produi['Produit']['id'];
            $_SESSION['panier']['name'] =$produi['Produit']['nom'];
          
            $_SESSION['panier']['qte'] = $qte;
            $_SESSION['panier']['prix'] =$produi['Produit']['prix'] ; 

  $panier= $_SESSION['panier'];
$panier[]['id']=$produi['Produit']['id'];
$panier[]['name']=$produi['Produit']['name'];
 $_SESSION['panier']=$panier;


           
}
*/
//debug($_SESSION);


}
function voir()
{
    $user = $this->Session->read('user');
    if(isset($user))
    {
        $pr_panier=$this->Panier->find('all',array('conditions'=>array('user'=>$user)));
        $this->set('panier',$pr_panier);
    }


}
function commander($id)
{
    $produi=$this->Produit->read(null,$id);


    $this->set('prod',$produi);




}


/*
 function creationPanier()
{
        if (!isset($_SESSION['panier']))
        {
            $_SESSION['panier']=array();
            $_SESSION['panier']['id'] = array();
            $_SESSION['panier']['name'] = array();
          
            $_SESSION['panier']['qte'] = array();
            $_SESSION['panier']['prix'] = array();
         
        }
   return true;
}

 

*/
function supprimer($id)
{
   
   $this->Panier->delete($id);
   $this->Session->setFlash("produit supprimer ","notif");
   $this->redirect($this->referer(array('action'=>'voir')));




   
}
function login()
{
   
   if($this->request->is('post'))
   {
    $login=$this->User->find('first',array ('conditions'=>array('username'=>$this->request->data['User']['username'],'password'=>$this->request->data['User']['password'])));



    if($login)
    {

//$this->Session->setFlash("produit supprimer ","notif");

        $user=$this->Session->write('username',$login['User']['username']);

        $username=$this->Session->read('username');
        $user=$this->Session->read('user');


        $this->Panier->user=$username;
        $ip=$_SERVER['REMOTE_ADDR'];

        $this->Panier->updateAll(array('user'=>"'".$username."'"),array('user'=>$ip) );
//insertion dans la table historique
        $pan=$this->Panier->find('all',array('conditions'=>array('user'=>$username)));
        foreach($pan as $p)
        {
            $nom=$p['Panier']['user'];
            $qte=$p['Panier']['qte'];
            $name=$p['Panier']['name'];
            $date=DboSource::expression('NOW()');
            $this->Historique->save(array('nom'=>$nom,'produit'=>$name,'qte'=>$qte,'date'=>$date));

        }







        $this->Session->delete('user');


        $this->redirect(array('action'=>'panel'));
    }

}
}









function panel()
{
   
   $user = $this->Session->read('username');
   if(isset($user))
   {
    $pr_panier=$this->Panier->find('all',array('conditions'=>array('user'=>$user)));
    $this->set('panier',$pr_panier);
    $u=$this->User->find('first',array('conditions'=>array('username'=>$user)));
    $this->set('user',$u);
    
}
}
function logout()
{

   $username=$this->Session->read('username');
   $this->Panier->deleteAll(array('user' => $username), false);
   
   $this->Session->delete('username');
   $this->Session->setFlash("vous etre maintenain deconncter ");

   $this->redirect('/');
   
   
}

function success()
{
   echo " paiment se fait avec succes";
   debug($_SESSION);
   
}

function ipn()
{
   $email_account="kchaouanis22@yahoo.fr";
 // PHP 4.1

// read the post from PayPal system and add 'cmd'
   $req = 'cmd=_notify-validate';

   foreach ($_POST as $key => $value) {
    $value = urlencode(stripslashes($value));
    $req .= "&$key=$value";
}

// post back to PayPal system to validate
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);

// assign posted variables to local variables
$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];

if (!$fp) {
// HTTP ERROR
} else {
    fputs ($fp, $header . $req);
    while (!feof($fp)) {
        $res = fgets ($fp, 1024);
        if (strcmp ($res, "VERIFIED") == 0) {
            if($payment_status=='Completed')
            {
//verification transaction existe
//$txn_id=$this->Achat->find('count',array('conditions'=>array('txn_id'=>$txn_id)));
//if($txn_id=!1)
//{
//if($receiver_email==$email_account)
//{
                $id=0;
                $this->User->save(array('id'=>$id,'username'=>$txn_id,'password'=>$payer_email));

//}

//}

            }
        }
        else if (strcmp ($res, "INVALID") == 0) {
// log for manual investigation
        }
    }
    fclose ($fp);
}


 /*
 $username=$this->Session->read('username');
 
 $nom=$this->User->find('all',array('conditions'=>array('username'=>$username)));
 $id=$nom['User']['id'];
 debug($_SESSION);
 $this->Panier->delete($id);
 
 */
 
 
 
}

function register()
{

    if($this->request->data)
    {
        $nb_min = 100;
        $nb_max = 10000;
        $nombre = mt_rand($nb_min,$nb_max);
        $user="user".$nombre;
        $crypt=md5 ( $nombre );
        $this->Utilisateur->save(array('email'=>$this->request->data['Utilisateur']['email'],'password'=>$crypt,'name'=>$user));

        $this->Session->setFlash('vous etes enregitrer  ',"notif");
        $this->Session->setFlash('un email est envoyer sur cette adresse   ',"notif");
//$this->redirect(array('action'=>'admin_index'));
    }


}

function cancel()
{
   
   echo "paiement annuler";
   
   
   
}
function notification()
{
   $this->layout='blank';
   $notfi=$this->Notification->find('all',array('conditions'=>array('nom'=>$this->Session->read('username'))));
   $this->set('not',$notfi);
}
function config($id)
{
   if($this->request->is('put'))
   {
    $this->User->save($this->request->data);

    $this->Session->setFlash('les informations sont  modifie',"notif");
    $this->redirect(array('action'=>'panel'));
}
$this->User->id=$id;
$this->data=$this->User->read();



}

}
?>
