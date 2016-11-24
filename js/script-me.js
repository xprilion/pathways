$(function(){
	
	var now=window.location.hash;
	
	if(!now){
		now='home';
	}
	else{
		now=now.substring(1);
	}
	
	$("[name="+now+"]").parent().addClass('cd-selected');
	
	toport(now);
	
	$('.cd-3d-nav li a').click(function(){
		var port=$(this).attr('name');
		toport(port);
	});	
	
	$('#god').show();
	
	$('#overlay').fadeOut(1000);
});

function toport(p){
	window.history.pushState('',"Pathways", "#"+p);
	document.title ="Pathways | "+p;
	
	$('.port').each(function(){
		$(this).hide();
	});
	$('#port-'+p).fadeIn(500);
	
	if(p=='gallery'){
		$('#port-gallery').snapGallery({
			minWidth: 100,
			maxCols: 3,
			margin: 10
		});
	}
	
	if(p=='event'){
		var eve=$('#eve').val();
		if(eve==0){
			var slides = [
			{src: 'img/t/skj2.jpg'},
			{src: 'img/t/at2.jpg'},
			{src: 'img/t/ng2.jpg'},
			{src: 'img/t/sn2.jpg'},
			{src: 'img/t/mp2.jpg'},
			{src: 'img/t/ps2.jpg'},
			];
			
			$('.jRCG1').jRCarousel({
			width: 480, 				/* largest allowed width */
			height: 640, 				/* largest allowed height */
			slides: slides, 			/* array of images source or gets slides by 'slide' class */
			slideLayout : 'contain',  	/* "contain"-fit as per to aspect ratio | "fill"-stretches to fill |  "cover"-overflows but maintains ratio */
			animation: 'slide', 		/* slide | scroll | fade | zoomInSlide | zoomInScroll */
			animationSpeed: 400,    	/* animation speed in milliseconds */
			animationInterval: 1000,	/* Interval between transitions or per slide show time in milliseconds */
			autoplay: true,         	/* start playing Carousel continuously, pauses when slide is hovered */
			navigation: 'circles'		/* circles | squares */
			});
			$('#eve').val(5);
		}
	}
}