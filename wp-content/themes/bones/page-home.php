<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="m-all t-all d-all cf " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<div id="inner-slider" class="slider-home">
						        <ul class="bxslider" >
						        <?php
					                $args = array(
					                    'post_type' => 'post',
					                    'category_name' => 'slider',
					                    'order' => DESC
					                );
					                            
					                $query = new WP_Query( $args );
					                while( $query->have_posts() ) :
					                   
					                    $query->the_post();
					                    echo '<li>';
				                    	echo '<div class="wrap">';  
				                    	echo '<div class="titulo-slider">';
										echo the_content();
										echo '<div class="area-link">';
										echo '<a class="link-banner-home" href="'. get_field("link") .'">';
										echo get_field("texto_link");
										echo '</a>';
										echo '</div>';
										echo '</div>';	
										echo '</div>';
					                    the_post_thumbnail('thumb-slider');
					                    echo '</li>';
					                    endwhile;
				            	?>
					        	</ul>
							</div> <!-- end #inner-slider -->

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<section class="entry-content cf" itemprop="articleBody">

									<div class="wrap">
										<div class="clearfix">
											<?php the_content(); ?>
										</div>
									</div>

								</section>
							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
