<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>
<div id="wrapper">
	<div id="content2">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">'.__('Read the rest of this page &raquo;','vivathemes').'</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','vivathemes').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry.','vivathemes'), '<p>', '</p>'); ?>
	</div>
</div>
<?php get_footer(); ?>