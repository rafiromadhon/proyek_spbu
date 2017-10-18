// event pada saat link
$('.page-scroll').on('click', function(){

	//ambil isi href
	var tujuan = $(this).attr('href');
	// tangkap element yang bersangkutan
	var elementujuan = $(tujuan);
	
	// pindahkan scroll
	$('html').animate({
		scrollTop: elementujuan.offset().top -50
	}, 2000, 'easeInOutExpo');

	e.preventDefault();


});

//parallax mamen
$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

	//layanan
	if ( wScroll > $ ('.about').offset().top -250 ) {
		$('.about .kiri').addClass('muncul');
		$('.about .tengah').addClass('muncul');
		$('.about .kanan').addClass('muncul');
	};
	//tentangkami
	if ( wScroll > $ ('.tentangkami').offset().top - 250 ) {
		$('.tentangkami #tentangkami-kanan').addClass('muncul');
		$('.tentangkami #tentangkami-kiri').addClass('muncul');
	};

	//testimonial
	if ( wScroll > $ ('.testi').offset().top - 300 ) {
		$('.testi #testi-content').each(function(i) {
			setTimeout(function() {
				$ ('.testi #testi-content').eq(i).addClass('muncul');
			}, 300 * (i+1));
		});
	};
	

});