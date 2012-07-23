<?php get_header(); ?>
<div id="wrapper">
<div id="main">
	<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','vivathemes'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> <?php printf(__('Posted in %s','vivathemes'),  get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit','vivathemes'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments','vivathemes'), __('1 Comment','vivathemes'), __('% Comments','vivathemes')); ?></p>
			</div>

		<?php endwhile; ?>

		<?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

	<?php else : ?>

		<h2 class="center"><?php _e('No posts found.','vivathemes'); ?></h2>
		
	<?php endif; ?>

	</div>
</div>
<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>