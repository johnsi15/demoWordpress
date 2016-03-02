<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title><?php bloginfo(' name'); wp_title('|',true,RIGHT); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
</head>
<body>

	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
		     <div class="navbar-header">
		      <a class="navbar-brand" href="<?php wp_title();?>">
		        <img alt="Brand" src="<?php bloginfo('template_url'); ?>/img/logo.png" width="70"/>
		      </a>
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand espacio" href="<?php wp_title();?>"><?php bloginfo(' name');?></a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <?php wp_nav_menu(
				 array(
				 'container' => false,
				 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
				 'theme_location' => 'menu'
				 )); ?>
		    </div><!-- /.navbar-collapse -->
		  </div>
		</nav>
	</header>