<section class="articulos container">
		<article class="articulos_principales">
			<?php $b=0; query_posts("paged=$paged");	?>
			<?php $a = 0; if(have_posts()): while (have_posts()): the_post(); ?>
				<?php 
				$a++;
				if($a==1){
					?>
					<article class="row">
				<?php
				}
				  if($b<=1){
				  	?>
					<div class="col-md-4 well well-lg">
						
						<div class="articulo">
							<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
							<p><?php the_excerpt();?></p>
							<div><strong class="fecha"><?php print get_the_date();?> - <span class="categorias"><?php the_category();?></span></strong></div>
						</div>
					</div>
					<?php
					$b++;
				  } 	
				?>
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