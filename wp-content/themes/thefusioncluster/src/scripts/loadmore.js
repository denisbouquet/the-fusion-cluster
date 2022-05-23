jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	$('.hc_loadmore').on('click', function(e){
		
		e.preventDefault();

		var posts_latest = $(this).attr('data-posts');
		var currentpage = $(this).attr('data-currentpage');
		var maxpage = $(this).attr('data-maxpage');

		$(this).attr('data-currentpage', parseInt(currentpage)+1);

		var button = $(this),
			data = {
			'action': 'loadmore',
			'query': posts_latest, // that's how we get params from wp_localize_script() function
			'page' : currentpage
		};

		$.ajax({ // you can also use $.post here
			url : hc_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.find('a strong').text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
					button.find('a strong').text( 'Load more NEWS' );
					// insert new posts
					$('.js-wrapper').find('a:last-of-type').after(data); 
					// .prev().before(data); 
					currentpage++;

					if ( currentpage == maxpage ) 
						button.parents('.container').remove(); // if last page, remove the button

					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.parents('.container').remove(); // if no data, remove the button as well
				}
			}
		});
	});
});