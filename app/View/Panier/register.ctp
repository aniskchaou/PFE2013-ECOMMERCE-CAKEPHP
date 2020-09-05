<h2>Creez votre compte</h2>
Entrez votre adresse e-mail pour creer votre compte.
<?php
echo $this->Form->create('Utilisateur');
echo$this->Form->text('email',array('label'=>'nom utilsateur'));
echo $this->Form->end('creer une compte');
?>