<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						  	<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

				                <header class="article-header entry-header">

				                  	<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

					           		<div class="data-post">
						           		<span class="dia">
						                     <?php printf(__('<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('d', 'bonestheme'))); ?>
							            </span>
							            <span class="mes">.
							                <?php printf(__('<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F', 'bonestheme'))); ?>
							            </span>
							            <span class="ano">.
							                <?php printf(__('<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('Y', 'bonestheme'))); ?>
							            </span>
							        </div>

				                </header> <?php // end article header ?>

				                <section class="entry-content cf" itemprop="articleBody">
					                  <?php the_content(); ?>
				                </section> <?php // end article section ?>

				                <footer class="article-footer">

					                <?php printf( __( 'Categorias', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

					                <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

									<a href="javascript:window.history.go(-1)" class="voltar"> <span class="leia-mais2">« Voltar</span></a> 

				                </footer> <?php // end article footer ?>

				                <?php //comments_template(); ?>

				            </article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
