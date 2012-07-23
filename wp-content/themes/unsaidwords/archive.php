<?php get_header(); ?>
<div id="wrapper">
	<div id="main">
	<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
	  
		<h2 class="pagetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category','vivathemes'), single_cat_title('',false));?></h2>
		
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	  
		<h2 class="pagetitle"><?php printf(__('Posts Tagged &#8216;%s&#8217;','vivathemes'), single_tag_title('',false)); ?></h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php printf(__('Archive for %s','vivathemes'), get_the_time('F jS, Y')); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php printf(__('Archive for %s','vivathemes'), get_the_time('F, Y')); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php printf(__('Archive for %s','vivathemes'), get_the_time('Y')); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle"><?php _e('Author Archive','vivathemes'); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle"><?php _e('Blog Archives','vivathemes'); ?></h2>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','vivathemes'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
				<div id="audata"> <?php the_author_posts_link(); ?> <?php the_time(' F jS, Y') ?> <?php comments_popup_link(__('No Comments','vivathemes'), __('1 Comment','vivathemes'), __('% Comments','vivathemes')); ?> </div>

				<div class="entry">				
					<div class="post-thumbnail"><?php	if ( has_post_thumbnail() )	the_post_thumbnail( 'thumbnail' ); ?></div>
					<?php the_excerpt(__('read more...','vivathemes')) ?>
					<a class="more-link" href="<?php the_permalink() ?>" > <?php printf(__('read more...','vivathemes')) ; ?></a>
				</div>

				<div class="postmetadata"> <?php printf(__('Posted in: %s','vivathemes'), get_the_category_list(', ')); ?> <?php edit_post_link(__('Edit','vivathemes'), '', '  '); ?>  </div>
			

			</div>

		<?php endwhile; ?>

		<?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

	<?php else : ?>

		<h2 class="center"><?php _e('Not Found','vivathemes'); ?></h2>

	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
