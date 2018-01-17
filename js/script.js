// munculkan tombol pojok kanan bawah
$(window).scroll(function(){
	if ($(this).scrollTop() > 900) {
		$('.page-scroll').fadeIn();
	}
	else {
		$('.page-scroll').fadeOut();	
	}
	console.log(this);
});

// event pada saat link
$('.page-scroll').on('click', function(e){

	//ambil isi href
	//var tujuan = $(this).attr('href');
	// tangkap element yang bersangkutan
	//var elementujuan = $(tujuan);
	
	// pindahkan scroll
	$('html, body').animate({ 
		scrollTop: 0
	}, 2000, 'easeInOutExpo');

	e.preventDefault();

});

//navbar background
$(window).scroll(function(){
	if ($(this).scrollTop() > 400) {
		$('.navbar-inverse').addClass('muncul');
	}
	else if ($(this).scrollTop() < 400) {
		$('.navbar-inverse').removeClass('muncul');
	}
	console.log(this);
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

//
$(window).on('load', function() {
	$('.gallery #item').each(function(i) {
			setTimeout(function() {
				$ ('.gallery #item').eq(i).addClass('muncul');
			}, 300 * (i+1));
		});
});