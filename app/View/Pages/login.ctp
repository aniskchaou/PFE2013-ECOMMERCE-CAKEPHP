<?phpecho$this->Form->create('User');echo$this->Form->input('username',array('label'=>'nom utilsateur'));echo "<br/>";echo$this->Form->input('password',array('label'=>'mot de passe'));echo$this->Form->end('connexion');?>