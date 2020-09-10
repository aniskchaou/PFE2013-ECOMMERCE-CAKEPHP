
<!DOCTYPE html >
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo "PFE 2013";    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
	 <link href="<?php echo $this->Html->url('/css/bootstrap.less');?>" rel="stylesheet/less" >
	 <?php echo $this->Html->script('less.js');?>
	 <?php  echo $scripts_for_layout;   
	 ?>

<link rel="stylesheet" href="css/reveal.css">
<link rel="stylesheet" href="css/style.css">



<link rel="stylesheet" type="text/css" href="css/styles.css" />



<script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>

<script src="js/jquery.reveal.js" type="text/javascript"></script>




<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<style>
#container {
	width: 600px;
	margin: 20px auto;
	text-align: center;
}
header {
	margin-bottom: 20px;
}
h1 {
	color: #3E4415;
	font-size: 20px;
	font-weight: normal; 
}
#images {
	width: 400px;
	height: 250px;
	overflow: hidden;
	position: relative;
	
	margin: 20px auto;
}
#images img {
	width: 400px;
	height: 250px;
	
	
	z-index: 1;
	opacity: 0;
	
	transition: all linear 500ms;
	-o-transition: all linear 500ms;
	-moz-transition: all linear 500ms;
	-webkit-transition: all linear 500ms;
}
#images img:target {
	left: 0;
	z-index: 9;
	opacity: 1;
}
#images img:first-child {
	left: 0;
	opacity: 1;
}
#slider a {
	text-decoration: none;
	background: #E3F1FA;
	border: 1px solid #C6E4F2;
	padding: 4px 6px;
	color: #222;
}
#slider a:hover {
	background: #C6E4F2;
}
</style>
</head>





   













    
    <style>
	


    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
	
	
	
	
	
	.autosuggest,.dropdown,.result
{
margin:0px;
border:0px;
padding:0px;
width:250px;
z-index:2000;
}
.autosuggest
{

padding:4px;
border:solid 1px black;
z-index:2000;
}

.result
{
width:260px;
list-style:none;
z-index:2000;
}

.result li
{
padding:5px;
border:solid 1px black;
border-top:0;
cursor:pointer;
z-index:2000;
color:green;
background:orange;

}

.result li:hover
{
background:orange;
color:blue;
z-index:2000;

}
	
	
	

	
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body style="background-image:url('img/c .jpg');">

<div  style="position:absolute;color:orange; left:160px ; opacity:0.95; border-radius:0.5px; margin:10px;  width:362px; ">

<b style="color:orange; a:hover{color:orange;}"><?php echo $this->Html->link('Acceuil ',array('controller'=>'/')); ?></b>

<b style="color:orange;"><?php echo $this->Html->link('Devis ',array('controller'=>'devis','action'=>'devis')); ?></b>
<b style="color:orange;"><?php echo $this->Html->link('Mon compte ',array('controller'=>'panier','action'=>'login')); ?></b>
<b style="color:orange;"><?php echo $this->Html->link('Contact ',array('controller'=>'pages','action'=>'contact')); ?> </b>

</div>
<div style="position:relative;left:730px;width:20px; top:25px;">
<div style="cursor:pointer;width:98px;height:65px;position:relative;left:265px;top:-20px;border-radius:2px;background:orange;border:White 3px solid;"height="45" width="45"  ><span style="margin:15px"><?php echo $this->Html->link(' ',array('controller'=>'panier','action'=>'voir'),array('class'=>'icon-shopping-cart'));     ?></span><br><i align="center"style="font-size:13px;color:white;">Mon Panier( <?php echo $this->element('panier');      ?> )</i></div>
</div>


<style type="text/css">
* {
padding:0;
margin:0;
list-style:none;
}

ul.rating{
background:url(img/star.jpg) bottom;
height:21px;
width:115px;
overflow:hidden;
}

ul.rating li{
display:inline
}

.rating a {
display:block;
width:23px;
height:21px;
float:left;
text-indent:-9999px;
position:relative;
}

.rating a:hover {
background:url(img/star.jpg) center;
width:115px;
margin-left:-92px;
position:static;
}

.rating a:active {
background-position:top;
}

</style>




<script type="text/javascript">
$(document).ready(function (){
$('.rating li').click(function(){

var val=$(this).text();
var nom=$('.nom').val();
$.ajax({
            dataType: "html",
            type: "POST",
            evalScripts: true,
            url: '<?php echo Router::url(array('controller'=>'etoiles','action'=>'vote'));?>',
            data: ({val:val,nom:nom}),
            success: function (data){
               

            }
        })

});





});




</script>

    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
	
	
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div style="margin-top:40px;"class="container">

        <div class="navbar navbar-inverse">
          <div class="">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
           
                <?php echo $this->element('menu');      ?>
                
                 
                
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


	
	
	

    <!-- Carousel
    ================================================== -->

	

	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	

    <div style="height:900px; margin-bottom:0px;">
	
	
	<?php echo $this->Session->flash();  ?>
	
<?php echo $content_for_layout;   ?>

    

	
    </div>  
      <!-- FOOTER -->
      <div style=" position:relative;top:250px;background-image:-webkit-linear-gradient(top, #222222, #111111);background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#222222), to(#111111)); min-width:100%;background-repeat:repeat-x; width:940px;height:80px">
        <p align="middle">Anis KCHAOU - Projet de fin d'études 2013  &middot; </p>
        <p align="middle"> <a href="https://github.com/aniskchaou/PFE2013-ECOMMERCE-CAKEPHP">https://github.com/aniskchaou/PFE2013-ECOMMERCE-CAKEPHP</a></p>
	  
       <br>
      </div>
<!-- /.container -->

<?php



?>
<script src="js/jquery-latest.js" type="text/javascript"></script>
	<script src="js/shBrushXml.js" type="text/javascript"></script>
	<script src="js/jquery.bxslider2.min.js" type="text/javascript"></script>
	<script src="js/scripts.js" type="text/javascript"></script>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </div>
 

 </div>
 
 </body>
</html>
