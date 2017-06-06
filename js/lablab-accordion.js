(function($){

	$(document).ready(function() {

		function lablabToggleAccordionElement(){

			var accdElem = location.hash;

			if ( accdElem ){

				var accordion = $(accdElem).closest( '.uk-accordion' );

			    if (accordion.length !== 0){

			    	accordion = UIkit.accordion(UIkit.$(accordion), {showfirst:false});

			    	var wrapper = accordion.find(accdElem).siblings('[data-wrapper]');

					accordion.toggleItem(UIkit.$(wrapper), true, true);

					lablabScrollToAccordionElement(accdElem);
			    }

			}
		 	
		}

		function lablabScrollToAccordionElement(accdElem){

			setTimeout(function(){ // wait until accordion element has expanded

				// scroll to active accordion element
				$('html, body').animate( {scrollTop: $(accdElem).offset().top - 15 }, 300 );

			}, 300);

		}

		// maybe expand accordion element on page load (if url has a hash fragment)

		UIkit.on('afterready.uk.dom', function() { 

			lablabToggleAccordionElement(); 

	 	});

		// expand accordion element when history has changed

		$(window).on('popstate', function(){

			lablabToggleAccordionElement();
			
		});

		// change hash fragment (when expanding an accordion element on click)

		$('.uk-accordion-title').on('click', function(){

			if (history.pushState) {
	    		history.pushState(null, null, '#' + $(this).attr('id'));
			} else {
	    		location.hash = $(this).attr('id');
			}

			lablabScrollToAccordionElement( this );
		});
		

	});
	
})(jQuery);