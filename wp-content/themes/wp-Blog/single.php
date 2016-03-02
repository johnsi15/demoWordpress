<?php get_header(); ?>
	<section class="imagen_encabezado">
		<?php if(have_posts()): while (have_posts()): the_post(); ?>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?>
		<?php endwhile; else: ?>
			<h1>No hay articulos.</h1>
		<?php endif; ?>
	</section>
	<section class="articulos container">
		<article class="articulos_principales">
			<article class="row">
				<div class="col-md-11 well well-lg">
				<?php if(have_posts()): the_post(); ?>
						<div class="mini-portada">
							<a href="<?php the_permalink();?>">
							</a>
						</div>
						<div class="articulo">
							<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
							<div><strong class="fecha"><?php print get_the_date();?> - <span class="categorias"><?php the_category();?></span></strong></div>
							<hr>
							<p><?php the_content();?></p>
						</div>
						<hr>
					<section class="comentarios">
						<div class="fb-comments" 
								data-href="<?php the_permalink(); ?>" 
								data-mobile="1"  data-numposts="5">
						</div> 
					</section>
				<?php else:?>
					<h1>No hay articulos.</h1>
				<?php endif?>
				<hr>
					<section class="mas_articulos">
						<h2>Mas Articulos</h2>
					</section>
					<?php get_sidebar(); ?> <!-- Mas Articulos para ver-->
				</div>

			</article>
		</article>
	</section>



<?php get_footer(); ?>