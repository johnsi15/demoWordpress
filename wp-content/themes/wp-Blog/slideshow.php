		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			  	<?php $a = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			  		<?php 
						if($a == 0){
							?>
						    <li data-target="#carousel-example-generic" data-slide-to="$a" class="active"></li>
						  <?php
						   $a++;
						}else{
							?>
				    		<li data-target="#carousel-example-generic" data-slide-to="$a"></li>
						   <?php
						   $a++;
						}
					?>
				    
			    <?php endwhile; else: ?>
					<h1>No se encontraron articulos</h1>
				<?php endif; ?>
			  </ol>
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  	<?php // query_posts('category_name=slider'); ?>
				<?php $a = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php 
						if($a == 0){
							$a++;
							?>
						    <div class="item active">
						      <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?></a>
						      <div class="carousel-caption">
						      	<h1><?php the_title();?></h1>
						        <p><?php the_excerpt();?></p>
						      </div>
						   </div>
						  <?php
						}else{
							?>
							 <div class="item">
						      <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?></a>
						      <div class="carousel-caption">
						      	<h1><?php the_title();?></h1>
						        <p><?php the_excerpt();?></p>
						      </div>
						   </div>
						   <?php
						}
					?>
				<?php endwhile; else: ?>
					<h1>No se encontraron articulos</h1>
				<?php endif; ?>
				   
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>

		</div>