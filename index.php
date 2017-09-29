<?php get_header();?>

			<section id="main-content">
				
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="post resume">
					<header class="post-title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<small class="meta"><?php the_date('F jS, Y'); ?> <?php the_category(', '); ?></small>
					</header>
					<div class="post-content">
						<?php the_excerpt();?>
						<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Read more &rarr;', 'apk'); ?></a>
					</div>
				</article>	<!-- article -->
				
				<?php endwhile; else: ?>

				<article class="post resume">
					<header class="post-title">
						<h2><?php _e('Welp... apparently there is nothing here :(', 'apk'); ?></h2>
					</header>
					<div class="post-content">
					    <?php _e('Sadly, it seems you have hit a bump on the road. Use the search bar to find what you are looking for.', 'apk'); ?>
						<?php get_search_form(); ?>
					</div>
				</article>	<!-- article -->
				
				<?php endif; ?>
				
				<?php if (get_next_posts_link() || get_previous_posts_link()) { ?>

				<div class="posts-nav cf">
					<?php next_posts_link( __('&larr; Previous posts', 'apk')); ?>
					<?php previous_posts_link( __('&larr; Recent posts', 'apk')); ?>
				</div>
			    
				<?php } ?>
				
			</section><!-- /#main-content -->
			
			<?php get_sidebar();?>
			
    <?php get_footer();?>   