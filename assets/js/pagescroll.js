// event saat link di klik
$('.page-scroll').on('click', function(e) {
	//ambil isi href
	var destination = $(this).attr('href');
	//tangkap elemen
	var elemenDestination = $(destination);
	//pindahkan scroll
	$('body').animate({
		scrollTop: elemenDestination.offset().top - 80
	}, 1250, 'swing');

	e.preventDefault();
});