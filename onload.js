onload = function() {
   a = document.getElementsByTagName('a')
	a = {
		block: a[0],
		none: a[1]
   }
   h = document.getElementsByTagName('header')
   h = {
		block: h[0],
		none: h[1]
   }
   f = document.getElementsByTagName('footer')
   f = {
		block: f[0],
		none: f[1]
   }
   o = document.getElementsByClassName('open')
   o = {
		block: o[0],
		none: o[1]
   }
   c = document.getElementsByClassName('close')
   c = {
		block: c[0],
		none: c[1]
   }
   am = document.getElementsByClassName('mail')
   am = {
		block: am[0],
		none: am[1]
   }
   document.getElementById("link").innerHTML = window.location.href;
   }
   function hideAllError(str) {return true;}
   window.onerror = hideAllError;