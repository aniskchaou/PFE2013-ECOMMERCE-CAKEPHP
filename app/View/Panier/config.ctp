<h1>modifier les informations </h1>


<?php echo $this->Form->create('User') ;?>

<?php echo $this->Form->input('username',array('label'=>'utilisateur')) ;?>
<?php echo $this->Form->input('id');?>
<?php echo $this->Form->input('password',array('label','mot de passe')) ;?>




<?php echo $this->Form->end('modifier') ;?>