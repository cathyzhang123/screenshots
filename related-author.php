<?php $orig_post = $post;
		global $post;
		$author_id=$post->post_author; 
		$args=	array(
				'author__in' => $author_id,
				'post__not_in' => array($post->ID),
				'posts_per_page'=>3, // Number of related posts that will be shown.
				'category__in' => array(3, 4, 5)
				);
		$my_query = new wp_query( $args );
		if( $my_query->have_posts() ) :  ?>
			<div class="my-5">
				   <h3 class="text-center relatedposts">Most Recent Posts by <?php the_author(); ?></h3>
			</div>
			<div class="row">			
			<?php while( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<div class="col-lg-4 mb-5">						
						<div class="card h-100 relatedpost">
							<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('full', array('class' => 'img-fluid card-img-top rounded shadow fadeIn delay-1s trans-200')); ?>
							</a>
							<div class="card-body">
								<h5 class="card-title text-center mt-3">
									<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h5>
								<p class="card-text">
									<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a>
								</p>								
							</div><!-- card body -->
							<div class="card-footer text-center">						
								<small class="post-meta">
									<?php the_author_posts_link() ?> • <?php the_time('M j, Y'); ?> at <?php the_time('g:i a'); ?>
								</small>
							</div><!-- card footer -->
						</div><!-- card -->								
				</div><!-- col-lg-4 -->
			<?php endwhile; endif; ?>
			</div><!-- row -->
<?php $post = $orig_post;
			wp_reset_query(); ?>