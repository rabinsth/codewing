<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Codewing Theme</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$codewing_classes = array( 'codewimg-class', 'my-class' );
		else:
			$codweing_classes = array( 'no-codewing-class' );
		endif;
		
	?>
	
	<body <?php body_class( $codewing_classes ); ?> style="margin: 0px auto; padding: 0px auto;">
		
<div class="container" style="background-color: #f9f4f4">

<div class="row">

<div class="col-xs-12">


<nav class="navbar navbar-default">

<div class="navbar-header">

<a class="navbar-brand" href="#"><h1>Codewing Theme</h1></a>
</div>
<div id="navmenu">
<ul>
<li class="nav-item">

<?php 
wp_nav_menu(array(
'theme_location' => 'primary',
'container' => false,

)
);
?>
</li>
</ul>
</div>
</nav>
</div>
</div>
<hr>
							
			
			
			
<style>
#navmenu ul {
margin: 0;
padding: 0; 
list-style-type: none;
list-style-image: none;
float: right; }
#navmenu li { display: inline; }
#navmenu ul li a { text-decoration:none;  margin: 4px;
padding: 5px 20px 5px 20px; color: blue;
background: pink; }
#navmenu ul li a:hover { color: black;
background:#f9f4f4; }
</style>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
 width="<?php echo get_custom_header()->width; ?>" alt="" />