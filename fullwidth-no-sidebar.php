<?php
/*
Template Name: Full-width No Sidebar [forum]
*/
get_header(); ?>

	<div id="content">

		<div id="inner-content" class="full-width clearfix">

				<div id="main" class="twelvecol first clearfix" role="main">

					<div class="inner-bg">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="article-header">

							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>


						</header> <?php // end article header ?>

						<section class="entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					</section> <?php // end article section ?>

						<footer class="article-footer">
							<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>

						</footer> <?php // end article footer ?>

						<?php // comments_template(); ?>

					</article> <?php // end article ?>

					<?php endwhile; else : ?>

							<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>

					<?php endif; ?>

					</div> <?php //end .inner-bg ?>

					<div class="creepy-content-border creepy-3d-border"><span class="border-left"></span><span class="border-middle"><span></span></span><span class="border-right"></span></div>

				</div> <?php // end #main ?>

		</div> <?php // end #inner-content ?>

		<div class='creepy-main-border creepy-3d-border full-width'>
			<span class="border-left"></span><span class="border-middle"><span></span></span><span class="border-right"></span>
		</div> 

	</div> <?php // end #content ?>

<?php get_footer(); ?>
