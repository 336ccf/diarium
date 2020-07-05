let m = 47, dol = 65.20; 
let projectprogress = 90;
let nonwork = 4650;

let programming = 80;
let design = 8;
let management = 12;

let tm = 100;

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
let mon = (m / dol).toFixed(2);
function money() {
  document.getElementById("money").innerHTML = mon+'$';
  var score = (mon-tm);
  document.querySelector('.progress').style.width = tm*3 + 'px';
  document.querySelector('.progress').style.height = tm*3 + 'px';
  document.querySelector('.target').style.width = mon*3 + 'px';
  document.querySelector('.target').style.height = mon*3 + 'px';
  document.getElementById("percent").innerHTML = score+'$';
}

function getRealDisplay(elem) {
	if (elem.currentStyle) {
		return elem.currentStyle.display
	} else if (window.getComputedStyle) {
		var computedStyle = window.getComputedStyle(elem, null )

		return computedStyle.getPropertyValue('display')
	}
}

function hide(el) {
	if (!el.getAttribute('displayOld')) {
		el.setAttribute("displayOld", el.style.display)
	}

	el.style.display = "none"
}

displayCache = {}

function isHidden(el) {
	var width = el.offsetWidth, height = el.offsetHeight,
		tr = el.nodeName.toLowerCase() === "tr"

	return width === 0 && height === 0 && !tr ?
		true : width > 0 && height > 0 && !tr ? false :	getRealDisplay(el)
}

function toggle(el) {
	isHidden(el) ? show(el) : hide(el)
}


function show(el) {

	if (getRealDisplay(el) != 'none') return

	var old = el.getAttribute("displayOld");
	el.style.display = old || "";

	if ( getRealDisplay(el) === "none" ) {
		var nodeName = el.nodeName, body = document.body, display

		if ( displayCache[nodeName] ) {
			display = displayCache[nodeName]
		} else {
			var testElem = document.createElement(nodeName)
			body.appendChild(testElem)
			display = getRealDisplay(testElem)

			if (display === "none" ) {
				display = "block"
			}

			body.removeChild(testElem)
			displayCache[nodeName] = display
		}

		el.setAttribute('displayOld', display)
		el.style.display = display
	}
}
function copyToClipboard() {
	var copytext = document.createElement('input')
	copytext.value = window.location.href 
	document.body.appendChild(copytext)
	copytext.select()
	document.execCommand('copy')
	document.body.removeChild(copytext)
}

function nowproject() {
	let now = new Date();  
	let sec = (now-start_date)/1000;
	sec = sec.toFixed();
	let min = sec/60;
	min = min.toFixed();
	let hour = min/60;
	hour = hour.toFixed();
	let day = hour/24;
	day = day.toFixed();
	let artt=3.3*18;
	let arts=92.87*18;
	let arms=3456;
	let arme=3000;
	let arse=358;
	let ards=12;
	let mitt=3.63*may;
	let mits=85.65*may;
	let mims=12996.76;
	let mime=14500;
	let mise=416;
	let mids=3.4;
	let jntt=2.096*june;
	let jnts=126.2*june;
	let jnms=18343;
	let jnme=15500;
	let jnse=321;
	let jnds=7.6;
	let jltt=1*july;
	let jlts=26.9*july;
	let jlms=2038;
	let jlme=1200;
	let jlse=403;
	let jlds=2.4;
	let agtt=8.612*august;
	let agts=31.38*august;
	let agms=2446;
	let agme=2200;
	let agse=398;
	let agds=3.25;
	let sptt=33.3*september;
	let spts=300*september;
	let spms=2417;
	let spme=116;
	let spse=386;
	let spds=2.8;
	let target = (artt+mitt+jntt+jltt+agtt+sptt).toFixed();
	let task = (arts+mits+jnts+jlts+agts+spts).toFixed();
	let money_s = (arms+mims+jnms+jlms+agms+spms);
	let money_e = (arme+mime+jnme+jlme+agme+spme);
	let sleep = ((arse+mise+jnse+jlse+agse+spse)/6).toFixed(2);
	let disciplines = ((ards+mids+jnds+jlds+agds+spds)/6).toFixed(2); 
	document.getElementById("ce").innerHTML = (task/target).toFixed(2) + ' efficiency coefficient';
	document.getElementById("profit").innerHTML = ((money_e-money_s)/dol).toFixed(2) + '$ profit';
	document.getElementById("work_time").innerHTML = ((min*(((24*60-sleep)*0.85)/(24*60)))-nonwork).toFixed() + ' work time in minutes';
	document.getElementById("project_start").innerHTML = 'Project start date:' + start_date.getDate() + ' April ' + start_date.getFullYear();
	document.getElementById('project_progress').value = projectprogress;
	document.getElementById("prjct").innerHTML = 'Complete to ' + projectprogress + '%';
}

function project(){
	document.getElementById('programming').value = programming;
	document.getElementById('design').value = design;
	document.getElementById('management').value = management;
	document.getElementById('progr').innerHTML = programming + '%';
	document.getElementById('desig').innerHTML = design + '%';
	document.getElementById('manage').innerHTML = management + '%';
}
let start_date = new Date(2019,4,12,19,31,12,33);
console.log(start_date); 
function settitle(){
	document.title = projectprogress+'%';
}