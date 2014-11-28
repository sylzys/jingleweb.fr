jQuery(document).ready(function($) {
	$container = $('#works ul');
	var columns = 2;
	$container.isotope({
        resizable: true,
        itemSelector: '.work',
        layoutMode: 'masonry',
        masonry: {
            columnWidth: $container.width() / columns
        }
    });
     $('#filters').on( 'click', '.button', function(e) {
     	e.preventDefault();
     	e.stopPropagation();
     	$(this).addClass('active').siblings().removeClass('active');
    var filterValue = $( this ).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });
});