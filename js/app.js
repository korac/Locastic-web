$('document').ready(function(){
	
	//Home screen animations
	var $heytext = $(".heytext"),
		$logo = $(".logo"),
		$hr = $(".subtitle hr"),
		$subtitle = $(".subtitle h2"),
		$navCont = $("nav .container");
		$nav = $("nav"),

	$heytext.css('opacity', 0);
	$heytext.delay(700).animate({opacity: 1});

	$logo.css('opacity', 0);
	$logo.delay(1200).animate({opacity: 1});

	$hr.css('opacity', 0);
	$hr.delay(1600).animate({opacity: 1});

	$subtitle.css('opacity', 0);
	$subtitle.delay(2000).animate({opacity: 1});

	$navCont.css("opacity", 0);
	$navCont.delay(2200).animate({opacity: 1});

	$nav.css("border-bottom-width", 0);
	$nav.delay(2200).animate({"border-bottom-width": 1});


	//Navigation animations
	$('.navbar-brand').click(function(){
		$('header').animatescroll({easing: 'easeInOutCirc', scrollSpeed: 1000});
	});

	$('.toONama').click(function(){
		$('#intro').animatescroll({easing: 'easeInOutCirc', scrollSpeed: 1000});
	});

	$('.toUpoznajteNas').click(function(){
		$('#upoznajteNas').animatescroll({easing: 'easeInOutCirc', scrollSpeed: 1000});
	});

	$('.toTimelines').click(function(){
		$('#preTimelines').animatescroll({easing: 'easeInOutCirc', scrollSpeed: 1000});
	});

	$('.toForms').click(function(){
		$('#forms').animatescroll({easing: 'easeInOutCirc', scrollSpeed: 1000});
	});


	$('#form1').on('submit', function (e) {

		e.preventDefault();

		$.ajax({
			type: 'POST',
			url: 'contact.php',
			data: $('#form1').serialize(),
			success: function () {
				$("#yes").css("display","block");
				$("#email1").val("");
				$("#textReply1").val("")
			},
			error: function () {
				$("#no").css("display","block");
			}
		});

	});

	$('#form2').on('submit', function (e) {

		e.preventDefault();

		$.ajax({
			type: 'POST',
			url: 'contact.php',
			data: $('#form2').serialize(),
			success: function () {
				$("#yes2").css("display","block");
				$("#email2").val("");
				$("#textReply2").val("")
			},
			error: function () {
				$("#no2").css("display","block");
			}
		});

	});

})