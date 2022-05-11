$(document).ready(function() {
	// preload images
	$("#image_list a").each(function() {
		var swappedImage = new Image();
		swappedImage.src = $(this).attr("href");
	});
	
	
	// set up event handlers for links    
	$("#image_list a").click(function(evt) {

		function updateImage(){ //function updates the old image by setting src and displaying the new image with fade in effect.
			$("#image").attr("src", imageURL).fadeIn(1000)
		}
		// first fade out the current image and then updateImage() function is called.
		$("#image").fadeOut(1000, updateImage);
		var imageURL = $(this).attr("href"); //gets the url of the clicked image
		

		function updateCaption(){
			// then set text and display the new caption with fade in effect
			$("#caption").text(caption).fadeIn(1000)
		}
		// first fade out the current caption
		$("#caption").fadeOut(1000, updateCaption);		
		var caption = $(this).attr("title");


		// cancel the default action of the link
	    evt.preventDefault();
	}); // end click
	
	// move focus to first thumbnail
	$("li:first-child a").focus();
}); // end ready