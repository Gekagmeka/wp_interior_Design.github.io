$('li.menu-item-has-children a').on('click', function(e){
	e.preventDefault();
	$('.sub-list, li.menu-item-has-children').toggleClass('active');
});

$('.burger-button, .list li a, .list li ul a').not('.list li.menu-item-has-children > a').on('click', function(e){
	// e.preventDefault();
	$('.navigation, .burger-button').toggleClass('active');
	$('li.menu-item-has-children.active ul li a').closest('.navigation.active').removeClass('active');
	$('body').toggleClass('lock');
});