	<?php //debug($liste); ?>



	
	<script type="text/javascript" charset="utf-8">
		SyntaxHighlighter.all();
	</script>


	
	
	<div id="content" style="border:3px black solid; background:white; border-radius:3px;opacity:0.78;"><div id="content_inner" style="position:relative;left:90px;">
  <!-- end intro -->
  <!-- end sidebar_right -->

  
  
  
<ul id="slides1" >
  <?php 
  foreach($remise as $l)
  {
  ?>
			<li>
				<?php echo $this->Html->image($l['Produit']['url'],array('style'=>'max-width:200px;max-height:200px;')); ?>
				<div class="content" >
					<h3><?php echo $l['Produit']['nom']; ?></h3>
					<h4 style="text-decoration:line-through"><?php echo $l['Produit']['prix']; ?> $</h4>
					<h4 style="font-size:20px"><span style="background:red;color:white; border-radius:9px;"><?php echo $l['Produit']['nprix']; ?>$</span></h4>
					<p><b style="color:blue;">Catre graphique</b> <?php echo $l['Produit']['cartegraphique']?> <br>
<b  style="color:blue;">Memoire : </b><?php echo $l['Produit']['memoire']?> GO<br>
<b style="color:blue;">Proccesseur : </b><?php echo $l['Produit']['processeur']?> <br>
<b style="color:blue;">Ecran : </b> <?php echo $l['Produit']['ecran']?> ""<br></p>
				</div>
				<div class="clear"></div>
			
		</li>
		<?php
		}
		?>	
	</ul>
</div>
</div>

	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-7965261-3");
	pageTracker._trackPageview();
	} catch(err) {}</script>
<br>
<br>




<span style="position:relative;left:300px;">


<div class="dropdown"><ul class="result"></ul>
</div>

</span>





<br>
<br>	
   <table  style="border-collapse: separate; border-spacing: 5px 8px; width:942px;" >
<?php
$i=1;
foreach ($produits as $k=>$v)
{
if($i==1 or $i==5 or $i==9 or $i==13)
{




echo "<tr>";
}
?>


<td class="case" style="margin:20px; width:220px; height:200px;   6px;-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); background:white; opacity:0.88;" >

 <div style="position:relative;top:-10px; "><b style="color:green;font-size:17px" ><?php echo $v['Produit']['nom'];?></b></div>
 <div  class="image" style="position:relative; height:100px; ">
<?php  //request action appeler action depuis une vue

echo $this->Html->image($v['Produit']['url'],array('style'=>'max-width:100px;max-height:100px;'));
?>


 </div>
 <input type="hidden" class="nom" value="<?php echo $v['Produit']['nom'];   ?>" />
<div class="panier"style="z-index:1;position:relative;;"align="right"> <table><tr><td><b align="left">
<ul class="rating">
	<li><a href="#" title="1 Star">1</a></li>
    <li><a href="#" title="2 Stars">2</a></li>
    <li><a href="#" title="3 Stars">3</a></li>
    <li><a href="#" title="4 Stars">4</a></li>
    <li><a href="#" title="5 Stars">5</a></li>
</ul></td><td><b style="color:red;font-size:15px;margin-left:0px;"><?php echo $v['Produit']['prix']." ";  ?>$</b></b></td><td>
<?php echo $this->Html->link('+',array('controller'=>'panier','action'=>'commander',$v['Produit']['id']),array('class'=>'btn btn-danger'));?></td></tr></table></div>
 <div class="crac"> 


<b style="color:blue;">catre graphique</b> <?php echo $v['Produit']['cartegraphique']?> <br>
<b  style="color:blue;">memoire</b><?php echo $v['Produit']['memoire']?> GO<br>
<b style="color:blue;">proccesseur</b><?php echo $v['Produit']['processeur']?> <br>
<b style="color:blue;">ecran</b> <?php echo $v['Produit']['ecran']?> ""<br>



</div> 
 </td>
<script type="text/javascript">
$(document).ready(function(){

$('.crac').hide();



$(".case").click(
  function () {
   
   jQuery(".crac", this).fadeIn('slow').show();
  jQuery(".image",this).hide();
  jQuery(".panier",this).hide();
   

   
   
   });
  $(".case").mouseleave( 
function(){

 jQuery(".crac", this).hide();
  jQuery(".image", this).show();
  jQuery(".panier", this).show();


});










});
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<?php
if($i==4 or $i==8 or $i==12 or $i==16)
{
echo "</tr>";
}
$i++;
}

?>
</table>



 