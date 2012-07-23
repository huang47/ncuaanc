<?php
$themename = "Unsaid Words";
$shortname = "unw";

$options = array (			
				
	array(	"type" => "open"),
		
	array(	"name" => "First slide settings",
			"type" => "title"),
	
	array(	"name" => "Image Location url",
			"desc" => "Please enter here the url of the image to use in the slide.",
			"id" => $shortname."_image1_url",
			"std" => "http://demos.vivathemes.com/unsaid-words/wp-content/themes/unsaidwords/images/slide/img1.jpg",
			"type" => "text"),

	array(	"name" => "Slide Target link",
			"desc" => "Please enter here the url you want the visitor to be taken to when clicked.",
			"id" => $shortname."_slide1_url",
			"std" => "http://www.vivathemes.com",
			"type" => "text"),
	
	array(	"name" => "Caption Title",
			"desc" => "Please enter here the caption title.",
			"id" => $shortname."_caption1_title",
			"std" => "Lorem ipsum dolor",
			"type" => "text"),
			
	array(	"name" => "Slide Caption",
			"desc" => "Please enter here the text you want to display as caption of the slide.",
            	"id" => $shortname."_slide1_caption",
			"std" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            	"type" => "textarea"),	
	
			
	array(	"type" => "open"),
		
	array(	"name" => "Second slide settings",
			"type" => "title"),
	
	array(	"name" => "Image Location url",
			"desc" => "Please enter here the url of the image to use in the slide.",
			"id" => $shortname."_image2_url",
			"std" => "http://demos.vivathemes.com/unsaid-words/wp-content/themes/unsaidwords/images/slide/img2.jpg",
			"type" => "text"),

	array(	"name" => "Slide Target link",
			"desc" => "Please enter here the url you want the visitor to be taken to when clicked.",
			"id" => $shortname."_slide2_url",
			"std" => "http://www.vivathemes.com",
			"type" => "text"),
	
	array(	"name" => "Caption Title",
			"desc" => "Please enter here the caption title.",
			"id" => $shortname."_caption2_title",
			"std" => "Lorem ipsum dolor",
			"type" => "text"),
			
	array(	"name" => "Slide Caption",
			"desc" => "Please enter here the text you want to display as caption of the slide.",
            	"id" => $shortname."_slide2_caption",
			"std" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            	"type" => "textarea"),	
	
			
	array(	"type" => "open"),
		
	array(	"name" => "Third slide settings",
			"type" => "title"),
	
	array(	"name" => "Image Location url",
			"desc" => "Please enter here the url of the image to use in the slide.",
			"id" => $shortname."_image3_url",
			"std" => "http://demos.vivathemes.com/unsaid-words/wp-content/themes/unsaidwords/images/slide/img3.jpg",
			"type" => "text"),

	array(	"name" => "Slide Target link",
			"desc" => "Please enter here the url you want the visitor to be taken to when clicked.",
			"id" => $shortname."_slide3_url",
			"std" => "http://www.vivathemes.com",
			"type" => "text"),
	
	array(	"name" => "Caption Title",
			"desc" => "Please enter here the caption title.",
			"id" => $shortname."_caption3_title",
			"std" => "Lorem ipsum dolor",
			"type" => "text"),
			
	array(	"name" => "Slide Caption",
			"desc" => "Please enter here the text you want to display as caption of the slide.",
            	"id" => $shortname."_slide3_caption",
			"std" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            	"type" => "textarea"),
	
			
	array(	"type" => "open"),
		
	array(	"name" => "Fourth slide settings",
			"type" => "title"),
	
	array(	"name" => "Image Location url",
			"desc" => "Please enter here the url of the image to use in the slide.",
			"id" => $shortname."_image4_url",
			"std" => "http://demos.vivathemes.com/unsaid-words/wp-content/themes/unsaidwords/images/slide/img4.jpg",
			"type" => "text"),

	array(	"name" => "Slide Target link",
			"desc" => "Please enter here the url you want the visitor to be taken to when clicked.",
			"id" => $shortname."_slide4_url",
			"std" => "http://www.vivathemes.com",
			"type" => "text"),
	
	array(	"name" => "Caption Title",
			"desc" => "Please enter here the caption title.",
			"id" => $shortname."_caption4_title",
			"std" => "Lorem ipsum dolor",
			"type" => "text"),
			
	array(	"name" => "Slide Caption",
			"desc" => "Please enter here the text you want to display as caption of the slide.",
            	"id" => $shortname."_slide4_caption",
			"std" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            	"type" => "textarea"),
	

	array( "name" => "Disable Login Panel?",
		"desc" => "Select 'YES' if you would like to disable the login panel.",
            "id" => $shortname."_login_disable",
            "type" => "select",
            "std" => "No",
            "options" => array("No", "Yes")),
	
	array( "name" => "Disable Search Box?",
		"desc" => "Select 'YES' if you would like to disable the search box.",
            "id" => $shortname."_search_disable",
            "type" => "select",
            "std" => "No",
            "options" => array("No", "Yes")),
	
	array( "name" => "Disable Logo Image?",
		"desc" => "Select 'YES' if you want to disable the logo image and enable text.",
            "id" => $shortname."_logo_disable",
            "type" => "select",
            "std" => "No",
            "options" => array("No", "Yes")),

	array(	"name" => "Logo Image Location",		
			"id" => $shortname."_logo_image",
			"std" => "http://demos.vivathemes.com/unsaid-words/wp-content/themes/unsaidwords/images/logo.png",
			"desc" => "Enter here your own custom logo image url",
			"type" => "text4"),

	

	array(	"name" => "Your Twitter Account",		
			"id" => $shortname."_twitter_account",
			"std" => "http://twitter.com/vivathemes",
			"desc" => "Write above your twitter url.",
			"type" => "text4"),

	array(	"name" => "RSS feed url",		
			"id" => $shortname."_rss_url",
			"std" => "",
			"desc" => "Write above the url of your rss feed.",
			"type" => "text4"),

	
	

		
	array(	"type" => "close")



	
);


function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> Theme Options</h2><form method="post">

<?php foreach ($options as $value) {  
	switch ( $value['type'] ) {	
		case "open":
		?> 

        <div style="width:90%; margin:0; padding: 10px; padding-top:0; background:#eeeeee; float:left; margin-right:80px; margin-bottom:20px; border:solid 1px #ccc; -moz-border-radius: 10px; -webkit-border-radius: 10px; overflow:hidden;" >   
        
		<?php break;
		
		case "close":
		?>
   </div>	

	      <?php break;
		
		case "title":
		?>
		<div class style="margin:0; width:100% ; float:left; margin-bottom:5px;">
        	<h2 style="padding:0; margin:0; font-size:14px; text-transform: uppercase; font-style: normal; font-weight:normal;"><?php echo $value['name']; ?></h2>              
        	</div>
		<?php break;

		case 'text':
		?>
 
            <div style="width:100%; clear:left; float:left; font-size:11px; margin:0; margin-bottom: 20px;">
            <h2 style="width:15%; float:left; font-size:12px; text-transform:none; font-style:italic; margin:0; line-height:100%;"><?php echo $value['name']; ?></h2>
            <div style=" width:530px; float:left; margin-top: 7px;"><input style="width:500px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /> </div>  <div style="float:left; width:25%; font-style:italic;"><?php echo $value['desc']; ?></div></div>
		<?php 
		break;
		
		case 'textarea':
		?>           
            <div style="width:100%; float:left; font-size:11px;"><h2 style="width:15%; float:left; font-size:12px; text-transform:none; font-style:italic; margin:0; line-height:100%;"><?php echo $value['name']; ?></h2>
            <div style="float:left; width:530px;"><textarea name="<?php echo $value['id']; ?>" style="width:500px;" type="<?php echo $value['type']; ?>" cols="" rows="1"><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?></textarea></div> <div style="float:left; width:25%; font-style:italic;"><?php echo $value['desc']; ?></div> </div>
</div>
<?php break;

		case 'text2':
		?>
 
            <div style="width:90%; clear:left; float:left; font-size:11px; margin:0; margin-bottom: 20px; background: #eee; border:solid 1px #ccc; -moz-border-radius: 10px; -webkit-border-radius: 10px; padding: 10px;">
            <h2 style="width:15%; float:left; font-size:12px; text-transform:none; font-style:italic; margin:0; line-height:100%;"><?php echo $value['name']; ?></h2>
            <div style=" width:530px; float:left; margin-top: 7px;"><input style="width:500px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /> </div>  <div style="float:left; width:25%; font-style:italic;"><?php echo $value['desc']; ?></div></div>
		<?php break;

		case 'text4':
		?>
 
            <div style="width:460px; float:left; font-size:11px; margin:0; margin-bottom: 20px; background: #eee; border:solid 1px #ccc; -moz-border-radius: 10px; -webkit-border-radius: 10px; padding: 10px; margin-right:20px;">
            <h2 style="width:100%; float:left; font-size:13px; padding:0; text-transform:none; margin-left:4px; font-style:italic; margin-top:5px; line-height:120%;"><?php echo $value['name']; ?></h2>
            <div style=" width:420px; float:left; margin-top: 7px; clear:left;"><input style="width:400px; border:solid 1px #dfdfdf; -moz-border-radius: 4px; -webkit-border-radius: 4px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /> </div>  <div style="float:left; width:100%; margin-left: 4px; margin-top:14px; clear:left; font-style:italic;"><?php echo $value['desc']; ?></div></div>
		<?php 
		break;
		
		case 'select':
		?>
 <div style="float:left; width:208px; background:#eeeeee; padding:10px; margin-right:20px; margin-bottom:20px;  border:solid 1px #ccc; -moz-border-radius: 10px; -webkit-border-radius: 10px;">

             <h2 style="width:100%; padding: 0; padding-bottom:10px; float:left; font-size:14px; text-transform:none; font-style:italic; margin:0; line-height:100%;"><?php echo $value['name']; ?></h2> 
            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select><div style="float:left; font-size:11px; clear:left; font-style:italic;"><?php echo $value['desc']; ?></div>
      
	</div>	
<?php break;

		case 'textinput':
		?>
 
            <div style="float:left; width:205px; background:#eeeeee; padding:10px; margin-right:80px; margin-bottom:20px;">
<strong><?php echo $value['name']; ?></strong>
            <input style="width:30px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /> <div style="clear:left;"> <small><?php echo $value['desc']; ?></small></div>
</div>     
        <?php 		break;
} 
}
?>
<div style="clear:left">
<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>

<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
</div>

<?php
}
add_action('admin_menu', 'mytheme_add_admin'); ?>
<?php
if ( function_exists('register_sidebars') )
    

	register_sidebar( array(
		'name' => __('Front Left Bar'),
		'id' => 'leftbar',
		'description' => __('The left widget bar in the front page. Please drag & drop widgets from the left.'),
		'before_widget' => '<div id="%1$s" class="widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );

	register_sidebar( array(
		'name' => __('Right Sidebar'),
		'id' => 'rightbar',
		'description' => __('The widgetized right sidebar. Please drag & drop widgets from the left'),
      	'before_widget' => '<div id="%1$s" class="widgets">',
      	'after_widget' => '</div>',
      	'before_title' => '<h2><span>',
      	'after_title' => '</span></h2>',
    ));

	register_sidebar( array(
		'name' => __('Bottom Bar'),
		'id' => 'bottombar',
		'description' => __('The bottom widget bar. Please drag & drop widgets from the left'),
		'before_widget' => '<div id="%1$s" class="widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );

?>
<?php
function widget_mytheme_search() {
?>
<form id="searchform" method="get" action="<?php bloginfo('home'); ?>/"> <input type="text" value="search this site..." onfocus="if (this.value == 'search this site...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search this site...';}" size="18" maxlength="50" name="s" id="s" /> </form> 
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_mytheme_search');
?>
<?php
add_filter('comments_template', 'legacy_comments');
function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) : // WP 2.7-only check
		$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;
	return $file;
}
?>
<?php add_theme_support( 'post-thumbnails' ); ?>
<?php function new_excerpt_length($length) {
	return 80;
}
add_filter('excerpt_length', 'new_excerpt_length'); 
function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
<?php load_theme_textdomain( 'vivathemes' ); ?>
<?php
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' ),
			'top-menu' => __( 'Top Menu' )
		)
	);
}
?>
<?php add_custom_background(); ?>