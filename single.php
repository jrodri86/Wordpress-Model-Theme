<?php get_header();?>
			
			<section id="main-content">
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article class="post">
					<header class="post-title">
					    <h1><?php the_title(); ?></h1>
					    <small class="meta"><?php the_date('F jS, Y'); ?> <?php the_category(', '); ?></small>
					</header>
					<div class="post-content">
					    <?php the_content()?>
					</div>
				</article>	<!-- article -->

				<?php endwhile; endif; ?>
				
                <div id="comments-area">
                
				    <?php comments_template(); ?>			
				
				</div><!-- #comments-area -->
				
				
			</section><!-- /#main-content -->
			
            <?php get_sidebar();?>			
			
<?php get_footer();?>