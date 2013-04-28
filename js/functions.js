$(document).ready(function(){
	//Footer logo
	$('.footer .logo').html('<div></div>')
		.mouseenter(function() { $('.footer .logo div').stop(true,true).animate({ opacity:'show' },150);})
		.mouseleave(function() { $('.footer .logo div').stop(true,true).animate({ opacity:'hide' },150);});
	$('.select_country').selectCountry({speed: 400});
	
});

/* $(window).load(function () { // user window.load to ensure images have been loaded
	make_gray()
}); */



var isiPad = navigator.userAgent.match(/iPad/i) != null;
function isSafari()
{
	return (!isiPad && navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1);
}
function isIE10()
{
	return (!isiPad && $.browser.msie == true && $.browser.version == "10.0");
}
function make_gray()
{
	if(isSafari()) { $('.greyScale img.main_img').greyScale({fadeTime: 1}); $('.greyScale img.main_img').remove(); }
	
	if(isIE10())
	{
		$('.greyScale').each( function() { 
			image = $(this).find('img.main_img');
			console.log(image.attr('src'));
			grayimg = '<span class="svg"><svg width="891" height="329" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">';
				grayimg += '<filter id="grayscale">';
					grayimg += '<feColorMatrix type="saturate" values="0"/>';
				grayimg += '</filter>';
				grayimg += '<image class="bw" filter="url(#grayscale)" width="891" height="329" xlink:href="'+image.attr('src')+'" />';
				grayimg += '</svg></span>';
			image.remove();
			$(this).prepend(grayimg);
			$(this).removeClass('greyScale');
			$(this).addClass('greyScale_opac');
		})
	}
}


function submitEnter(e, obj){
	 e = e || event;
	 var txtArea = /textarea/i.test((e.target || e.srcElement).tagName);
	 var isNotEnter = txtArea || (e.keyCode || e.which || e.charCode || 0) !== 13;
	 if(!isNotEnter)
		obj.submit();
	 //return isEnter;
}

function prepare_thumbs()
{
	$('.thumb_wrapper').each(function() {
		
		if(typeof $(this).attr('rel') == "undefined")
		{
			var w = $(this).find('.info .info_text').width() + 30;
			$(this).attr('rel', w);
		}
		
		if(!isSafari())
			$(this).find('.info').css('width', '0')
		else
			$(this).find('.info').css('display', 'none');
	});
}
function thumbs_start()
{
	$('#content').on('mouseenter', '.thumb_wrapper', function() {
			//var w = $(this).find('.info .info_text').width() + 30;
			if(!isSafari())
			{
				var w = $(this).attr('rel');
				$(this).find('.info').css('display', 'block');
				$(this).find('.info').stop(true,true).animate({ width:w },250); 
			}
			else
			{
				$(this).find('.info').stop(true,true).animate({ opacity:'show' },250);
			}
			$(this).focus();
	}).on('mouseleave', '.thumb_wrapper', function() {
			if(!isSafari())
			{
				$(this).find('.info').stop(true,true).animate({ width:0 },250);
				//$(this).find('.info').css('display', 'none')
			}
			else
			{
				$(this).find('.info').stop(true,true).animate({ opacity:'hide' },250);
			}
	});
}
function infinite_scrool_start(total_pages)
{
	jQuery.ias({
		container : '.content_wrapper',
		item: '.image',
		pagination: '.navigation',
		next: '.next-posts a',
		loader: '<div class="loader"><img src="img/325.gif"/></div>',
		triggerPageThreshold: total_pages,
		onRenderComplete: function(itemsLoaded) {
			if(isSafari() || isIE10()) {  $('.greyScale img.main_img').hide(); }
			make_gray();
			prepare_thumbs();
		}
	});
}


function login_pop()
{
		$.fancybox({
			'href' : 'login.php',
			'type' : 'iframe',
			'overlayColor' : '#000',
			'padding': 0,
			'width' : 695,
			'height' : 591,
			'autoScale' : false,
			'autoDimensions' : false,
			'centerOnScroll' : true, 
			'scrolling' : 'no',
			'onComplete' : function(){ 
				//jQuery('#fancybox-frame').first().css('overflow', 'hidden');
				//$.fancybox.resize();
					jQuery.fancybox.showActivity();
					jQuery('#fancybox-frame').load(function(){
						jQuery.fancybox.hideActivity();
					});
			},
			onStart : function(){
				$('body').css('overflow','hidden');
			},
			onClosed : function(){
				$('body').css('overflow','auto');
			}
		});
	
}

(function( $ ) {
  $.fn.selectCountry = function(options) {
	
	var wrapper = this;
	var active_li = $(this).find('li.active');
	
	$(document).mouseup(function (e)
	{
		var container = $(wrapper);
		if (!container.is(e.target) && container.has(e.target).length === 0)
		{
			$(wrapper).removeClass('opened');
			$(wrapper).find('li').not('.active').animate({ opacity:'hide' },settings.speed);
		}
	});
	
	var settings = $.extend( {
      'speed'         : 200
    }, options);
    // Do your awesome plugin stuff here
	
	var arr = $(wrapper).find('li').get();    
	arr.reverse();
	$.each(arr, function(i,v){
		if(!$(this).hasClass('active'))
			$(wrapper).find('ul').prepend(this);
	});

	$(this).find('li').each(function() {
		$(this).html('<span class="text">'+$(this).text()+'</span>').prepend('<span class="icon">&nbsp;</span>');
		$(this).html('<div class="'+$(this).attr('class').replace('active','')+'">'+$(this).html()+'</div>')
		if($(this).hasClass('active'))
		{
			$(this).attr('class', 'active');
			$(this).append('<span class="arrow">&nbsp;</span>').css('display','block');
			$(this).click(function() {
				if($(wrapper).hasClass('opened'))
				{
					$(wrapper).removeClass('opened');
					$(wrapper).find('li').not('.active').animate({ opacity:'hide' },settings.speed);
				}
				else
				{
					$(wrapper).addClass('opened');
					$(wrapper).find('li').not('.active').animate({ opacity:'show' },settings.speed);
				}
			});	
		}
		else
		{
			$(this).attr('class', '');
			$(this).click(function() {
				var c = $(this).find('div');
				var r = active_li.find('div');
				
				$(this).find('div').remove();
				active_li.find('div').remove();
				
				active_li.prepend(c);
				$(this).prepend(r);
				
				$(wrapper).removeClass('opened');
				$(wrapper).find('li').not('.active').animate({ opacity:'hide' },settings.speed);
				
				window.location.hash = c.attr('class');
			});	
		}		
	});
  };
})( jQuery );