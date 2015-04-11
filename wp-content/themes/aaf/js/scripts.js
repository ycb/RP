(function($){
    $(function($) {
        //comment submit button
        $('#respond').find('input[type=submit]').addClass('btn theme-btn');

        $("a[rel^='prettyPhoto'], a.thickbox, .gallery-item a").prettyPhoto({
            social_tools: false,
            theme: 'facebook'
        });

        // Find all YouTube videos
        var allVideos =  $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']"),

        // The element that is fluid width
        fluidEl = $("#primary");

        // Figure out and save aspect ratio for each video
        allVideos.each(function() {

          $(this).attr('data-aspectRatio', this.height / this.width)

            // and remove the hard coded width/height
            .removeAttr('height')
            .removeAttr('width');

        });

        // When the window is resized
        $(window).resize(function() {

          var newWidth = fluidEl.width();

          // Resize all videos according to their own aspect ratio
          allVideos.each(function() {

            var el = $(this);
            el.width(newWidth).height(newWidth * el.attr('data-aspectRatio'));

          });

        // Kick off one resize to fix all videos on page load
        }).resize();
        
        $('.videoWrapper p:has(iframe)').css('display', 'block');


        //$('.site-title').html('THE PRESCRIPTION TO<br /> END VIOLENCE AND CHANGE LIVES');
    });

    $(window).resize(function(){
		if ($(window).width() <= 979){	
			// do something here
			$('.entry-content .meta-nav').addClass('btn-large btn-block');
		} else {
			$('.entry-content .meta-nav').removeClass('btn-large btn-block');
		}
	});
})(jQuery);
