<?php get_header(); ?>


	<section class="articulos container categorias_espacio">
		<h2 id="categori">Categoría - <?php single_cat_title( $prefix = '', $display = true ); ?></h2>
		<article class="articulos_principales">
			<?php $a = 0; if(have_posts()): while (have_posts()): the_post(); ?>
				<?php 
				$a++;
				if($a==1){
					?>
					<article class="row">
				<?php
				}
				   	
				?>
				<div class="col-md-5 well well-lg">
					<div class="mini-portada">
						<a href="<?php the_permalink();?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'img_thumbnail img-thumbnail' ); } ?>
						</a>
					</div>
					<div class="articulo">
						<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
						<p><?php the_excerpt();?></p>
						<div><strong class="fecha"><?php print get_the_date();?> - <span class="categorias"><?php the_category();?></span></strong></div>
					</div>
				</div>
				<?php 
					if($a>=2){ 
						?>
						</article>
					<?php
						$a = 0;
					}
				?>
			<?php endwhile; else: ?>
				<h1>No hay articulos.</h1>
			<?php endif; ?>
		</article>
	</section>

	<section class="paginacion">
		<nav>
		  <ul class="pager">		  	
		    <li class="previous"><?php previous_posts_link('<span aria-hidden="true">&larr;</span> Anteriores') ?></li>
		    <li class="next"><?php next_posts_link('Siguientes <span aria-hidden="true">&rarr;</span>')?> </li>
		  </ul>
		</nav>
	</section>
<!--<?php get_sidebar(); ?>-->


<?php get_footer(); ?>