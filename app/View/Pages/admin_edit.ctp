<h1>ajouter au remise </h1>


<?php echo $this->Form->create('Page') ;?>

<?php echo $this->Form->input('name',array('label'=>'titre')) ;?>
<?php echo $this->Form->input('id');?>
<?php echo $this->Form->input('content',array('label','contenu')) ;?>




<?php echo $this->Form->end('envoyer') ;?>

<?php  //echo $this->Html->script('tiny_mce/tiny_mce.js',array('inline',false)); 

//echo $this->Html->script('tiny.js',array('inline',false));

   ?>
