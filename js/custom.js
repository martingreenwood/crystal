/*==============================
=            LOADER            =
==============================*/

(function(){
  function id(v){ return document.getElementById(v); }
  function loadbar() {
    var ovrl = id("loader"),
        prog = id("progress"),
        stat = id("progstat"),
        img = document.images,
        c = 0,
        tot = img.length;
    if(tot == 0) return doneLoading();

    function imgLoaded(){
      c += 1;
      var perc = ((100/tot*c) << 0) +"%";
      prog.style.width = perc;
      stat.innerHTML = "Loading "+ perc;
      if(c===tot) return doneLoading();
    }
    function doneLoading(){
      ovrl.style.opacity = 0;
      setTimeout(function(){ 
        ovrl.style.display = "none";
      }, 1200);
    }
    for(var i=0; i<tot; i++) {
      var tImg     = new Image();
      tImg.onload  = imgLoaded;
      tImg.onerror = imgLoaded;
      tImg.src     = img[i].src;
    }    
  }
  document.addEventListener('DOMContentLoaded', loadbar, false);
})(jQuery);

/*===================================
=            ORIENTATION            =
===================================*/

jQuery(window).on("orientationchange",function($){
	if(window.orientation == 0) // Portrait
	{
		$('#turnme').removeClass('show');
	}
	else // Landscape
	{
		$('#turnme').addClass('show');
	}
});

/*=============================
=            CALLS            =
=============================*/

var $ = jQuery;

(function($){
  var $document = $(document),
      $element = $('#masthead'),
      className = 'scrolled';

  $document.scroll(function() {
  	$element.toggleClass(className, $document.scrollTop() >= 50);
  });
})(jQuery);
/*==============================================
=            HEADER / SLIDER HEIGHT            =
==============================================*/


(function($) {
	var windowHeight;

	function setHeight() {
		windowHeight = $('#slider').innerHeight();
		$('#primary').css('padding-top', windowHeight);
	}

 	//setHeight();
  
  $(window).resize(function() {
    //setHeight();
  });
})(jQuery);