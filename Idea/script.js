function requestFullScreen() {

  var el = document.body;

  var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen 
  || el.mozRequestFullScreen || el.msRequestFullScreen;

  if (requestMethod) {

    requestMethod.call(el);

  } else if (typeof window.ActiveXObject !== "undefined") {

    var wscript = new ActiveXObject("WScript.Shell");

    if (wscript !== null) {
      wscript.SendKeys("{F11}");
    }
  }
}
function clock() {
var d = new Date();
var month_num = d.getMonth()
var day = d.getDate();
var hours = d.getHours();
var minutes = d.getMinutes();
var seconds = d.getSeconds();

month=new Array("Lanuarii", "Februarius", "Martii", "Aprilis", "Maius", "Junius","Julius", "Augustus", "September", "October", "November", "December");

if (day <= 9) day = "0" + day;
if (hours <= 9) hours = "0" + hours;
if (minutes <= 9) minutes = "0" + minutes;
if (seconds <= 9) seconds = "0" + seconds;

date = day + " " + month[month_num] + " " + d.getFullYear();
time = hours + ":" + minutes + ":" + seconds;
if (document.layers) {
 document.layers.doc_time.document.write(date_time);
 document.layers.doc_time.document.close();
}
else document.getElementById("doc_date").innerHTML = date;
document.getElementById("doc_time").innerHTML = time;
 setTimeout("clock()", 1000);
}

function myFunction() {
	document.getElementById("myDd").classList.toggle("show");
	document.getElementById("myO").classList.toggle("shown");
}

window.onclick = function(event) {
	if (!event.target.matches('.mlb')) {
		var dropdowns = document.getElementsByClassName("dd-c");
    	var i;
    for (i = 0; i < dropdowns.length; i++) {
      	var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
  	if (!event.target.matches('.omb')) {
  		var dropdowns = document.getElementsByClassName("op-c");
    	var k;
    for (k = 0; k < dropdowns.length; k++) {
      	var openDropdown = dropdowns[k];
    if (openDropdown.classList.contains('shown')) {
        openDropdown.classList.remove('shown');
  	}
}
}
}