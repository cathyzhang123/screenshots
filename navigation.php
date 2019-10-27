<header>
  <div class="container front-page">
   	<div class="row">
			<div class="col-12"> 
				<h1 class="text-center font-weight-bold"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>                
				<nav class="justify-content-center navbar navbar-expand-lg navbar-light bg-transparent" id="navbar">             
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>Menu
					</button>                   
					<div class="collapse navbar-collapse d-flex flex-column" id="navbarSupportedContent">
						<?php 
						$args = array(
										'theme_location'    => 'primary',
										'menu'              => 'Primary Menu',
										'container'         => 'div',
										'container_class'   => 'collapse navbar-collapse',
										'container_id'      => 'navbarSupportedContent',
										'menu_class'        => 'navbar',
										'menu_id'           => 'navbar',
										'echo'              => true,
										'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										'before'            => '',
										'after'             => '',
										'link_before'       => '',
										'link_after'        => '',
										'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'             => 5,
										'walker'            => new WP_Bootstrap_Navwalker()
								);
								wp_nav_menu ($args);                       
						?>                                                
					</div><!-- end of navbar collapse -->                
				</nav> 
			</div> <!-- col-12 -->                             
		</div><!-- row --> 
  </div><!--container --> 
</header>
