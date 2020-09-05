<?php

class Page extends AppModel
{



var $validate=array(

'name'=>array('name_must_be_not_blank'=>array('rule'=>'notEmpty','message'=>'le nom ne peu pas etre vide') ,'name_must_be_unique'=>array('rule'=>'isUnique','message'=>'existe deja')),
'content'=>array('content_must_be_not_blank'=>array('rule'=>'notEmpty','message'=>'le contenu ne peu pas etre vide'))


);













}

?>