

	<footer>
		<section class="container menu-footer">
			<article class="row">
				<div class="col-md-4 ">
					<p><h4><a href="https://twitter.com/Jandrey15" class="color" target="_black">@Jandrey </a>- copyright 2016</h4></p>
					<p>Todos los derechos estan reservados por John Serrano.</p>
				</div>
				<div class="col-md-4 col-xs-6">
					<div id="menu-footer">
						<?php wp_nav_menu(
						 array(
						 'container' => false,
						 'items_wrap' => '<ul>%3$s</ul>',
						 'theme_location' => 'menu2'
						)); ?>
					</div>
				</div>
				<div class="col-md-4  col-xs-6 redes_sociales">
					<ul>
						<li><a href="https://www.facebook.com/Jandrey15" target="_blank" class="icon-facebook2"> </a>/Jandrey15</li>
						<li><a href="https://twitter.com/Jandrey15" target="_blank" class="icon-twitter"> </a>/Jandrey15</li>
						<li><a href="https://github.com/johnsi15" target="_blank" class="icon-github2"> </a>/johnsi15</li>
					</ul>
				</div>
			</article>
		</section>
	</footer>

	<!-- scripts -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/bootstrap.js"></script>
	<script>
		$('.carousel').carousel({
		  interval: 2000
		});
		$("[title~='opciones-menu']").addClass("dropdown-toggle");
		$("[title~='opciones-menu']").attr("data-toggle", "dropdown");
		$("[title~='opciones-menu']").attr("role", "button");
		$("[title~='opciones-menu']").attr("aria-haspopup", "true");
		$("[title~='opciones-menu']").attr("aria-expanded", "false");
		$(".sub-menu").addClass("dropdown-menu");
		$(".current-menu-item").addClass("active");	
	</script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=591882320949570";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>