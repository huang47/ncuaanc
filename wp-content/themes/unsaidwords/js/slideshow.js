function slideShow() {

	//Set the opacity of all images to 0
	jQuery('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	jQuery('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	jQuery('#gallery .caption').css({opacity: 0.6});

	//Resize the width of the caption according to the image width
	jQuery('#gallery .caption').css({width: jQuery('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	jQuery('#gallery .content').html(jQuery('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.6}, 400);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',6000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = (jQuery('#gallery a.show')?  jQuery('#gallery a.show') : jQuery('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? jQuery('#gallery a:first') :current.next()) : jQuery('#gallery a:first'));	
	
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	jQuery('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	jQuery('#gallery .caption').animate({opacity: 0.6},60 ).animate({height: '60px'},500 );
	
	//Display the content
	jQuery('#gallery .content').html(caption);
	
	
}