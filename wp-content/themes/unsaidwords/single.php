<?php get_header(); ?>
<div id="wrapper">
<div id="main">
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		

		<div class="post" id="post-<?php the_ID(); ?>">
			<h3><?php the_title(); ?></h3>
			<div id="audata"> <?php the_author_posts_link(); ?> <?php the_time(' F jS, Y') ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> </div>


			<div class="entry">
				<?php the_content('<p class="serif">'.__('Read the rest of this entry &raquo;','vivathemes').'</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','vivathemes').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
				<div class="postmetadata"> <?php printf(__('Posted in %s','vivathemes'),  get_the_category_list(', ')); ?> <?php edit_post_link(__('Edit','vivathemes'), '', '  '); ?>  </div>	


			</div>
			<?php comments_template(); ?>
		</div>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.','vivathemes'); ?></p>

<?php endif; ?>

	
	</div>
<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
