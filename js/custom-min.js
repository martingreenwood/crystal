!function(){function n(n){return document.getElementById(n)}function e(){function e(){s+=1;var n=(100/u*s<<0)+"%";if(r.style.width=n,i.innerHTML="Loading "+n,s===u)return o()}function o(){t.style.opacity=0,setTimeout(function(){t.style.display="none"},1200)}var t=n("loader"),r=n("progress"),i=n("progstat"),a=document.images,s=0,u=a.length;if(0==u)return o();for(var c=0;c<u;c++){var d=new Image;d.onload=e,d.onerror=e,d.src=a[c].src}}document.addEventListener("DOMContentLoaded",e,!1)}(jQuery),jQuery(window).on("orientationchange",function($){0==window.orientation?$("#turnme").removeClass("show"):$("#turnme").addClass("show")});var $=jQuery;!function($){var n=$(document),e=$("#masthead"),o="scrolled";n.scroll(function(){e.toggleClass(o,n.scrollTop()>=50)})}(jQuery),function($){function n(){e=$("#slider").innerHeight(),$("#primary").css("padding-top",e)}var e;n(),$(window).resize(function(){n()})}(jQuery);