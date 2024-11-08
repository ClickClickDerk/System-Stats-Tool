<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>userDeviceStats</title>
	<meta charset= "UTF-8" />
	<link rel="icon" type="image/png" href="../img/favicon.png">
	<meta name= "description" content= "User's computer stats" />
	<meta name= "keywords" content= "User's computer stats" />
	<meta name= "author" content= "userStats" />
	<meta name="robots" content= "User's computer stats" />
	<meta name="googlebot" content="User's computer stats" />
	<script src = "js/three.js"></script>
	<script src = "js/stats/stats.min.js"></script>
</head>
<body>
	<style>
		body {
			background-color: #030723;
			margin: 0;
			padding: 0;
		}

		.con {
			color: #14cacd;
			width: 1000px;
			display: block;
			margin: 0;
			padding: 0;
			margin-right: auto;
			margin-left: auto;
			height: auto;
		}

		.headerCon {
			font-size: 32px;
			font-family: monospace;
			text-align: center;
		}

		.fpsCon {

		}

		.uSCon {
			clear: both;
		}
		.stat {
			font-size: 16px;
			font-family: monospace;
		}
	</style>
	<div id="con" class="con">
		<div id="headerCon" class="headerCon">
			<h1>User Device Stats</h1>
		</div>
		<div id="fpsCon" class="fpsCon">
			<script>
				var getCon = document.getElementById("con");

				var stats1 = new Stats();
				stats1.showPanel( 0 ); // 0: fps, 1: ms, 2: mb, 3+: custom
				stats1.dom.style.position = "relative";
				stats1.dom.style.float = "left";
				document.getElementById("fpsCon").appendChild(stats1.dom);

				function animate() {
					stats1.begin();
					//monitored code goes here
					stats1.end();
					requestAnimationFrame( animate );
				}

				requestAnimationFrame( animate );
			</script>
		</div>
		<br /><br /><br /><br />
		<div id="uSCon" class="uSCon stat">
			<?php
				/*function getUserIpAddr(){
    				if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      				  	//ip from share internet
       					$ip = $_SERVER['HTTP_CLIENT_IP'];
    				}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
     				   	//ip pass from proxy
      					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    				}else{
       					$ip = $_SERVER['REMOTE_ADDR'];
   					}
   						return $ip;
					}*/

				echo 'User Real IP - ' . $_SERVER['REMOTE_ADDR'];
			?>
			<p id="time" class="time stat">
				<script>
					function time() {
    					document.getElementById("time").innerHTML = "Date and Time: " + new Date();
    				}
    				setInterval(time, 100);
    			</script>
			</p>
			<p id="isMobile" class="isMobile stat">
				<script>
					function isMobileDevice() {
   						return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
					};
					document.getElementById("isMobile").innerHTML = "Using Mobile: " + isMobileDevice();
				</script>
			</p>
			<p id="url" class="url stat">
				<script>
					document.getElementById("url").innerHTML = "URL: " + window.location.pathname;
				</script>
			</p>
			<p id="history" class="history stat">
				<script>
					function hL() {
						document.getElementById("history").innerHTML = "History Length: " + history.length;
					}
					setInterval(hL, 100);
				</script>
			</p>
			<p id="navName" class="nameApp stat">
				<script>
					document.getElementById("navName").innerHTML = "Browser Name: " + navigator.appName;
				</script>
			</p>
			<p id="navProduct" class="navProduct stat">
				<script>
					document.getElementById("navProduct").innerHTML = "Browser Engine: " + navigator.product;
				</script>
			</p>
			<p id="navVersion" class="navVersion stat">
				<script>
					document.getElementById("navVersion").innerHTML = "Browser Version: " + navigator.appVersion;
				</script>
			</p>
			<p id="navLanguage" class="navLanguage stat">
				<script>
					document.getElementById("navLanguage").innerHTML = "Browser Language: " + navigator.language;
				</script>
			</p>
			<p id="navOnline" class="navOnline stat">
				<script>
					document.getElementById("navOnline").innerHTML = "Browser Online: " + navigator.onLine;
				</script>
			</p>
			<p id="navPlatform" class="navPlatform stat">
				<script>
					document.getElementById("navPlatform").innerHTML = "Browser Platform: " + navigator.platform;
				</script>
			</p>
			<p id="navJavaEnabled" class="navJavaEnabled stat">
				<script>
					document.getElementById("navJavaEnabled").innerHTML = "Browser Java Enabled: " + navigator.javaEnabled();
				</script>
			</p>
			<!--<p id="navCookieEnabled" class="navCookieEnabled stat">
				<script>
					document.getElementById("navCookieEnabled").innerHTML = "Browser Cookies Enabled: " + navigator.cookieEnabled;
				</script>
			</p>
			<p id="navCookie" class="navCookie stat">
				<script>
					document.getElementById("navCookie").innerHTML = "Browser Cookies: " + document.cookie;
				</script>
			</p>-->
			<p id="navURI" class="navURI stat">
				<script>
					document.getElementById("navURI").innerHTML = "Browser Decode URI Component: " + decodeURIComponent(document.cookie.split(";"));
				</script>
			</p>
			<p id="navStorage" class="navStorage stat">
				<script>
					document.getElementById("navStorage").innerHTML = "Browser Local Storage: " + localStorage;
				</script>
			</p>
			<p id="screenW" class="screenW stat">
				<script>
					function sW() {
						document.getElementById("screenW").innerHTML = "Screen Width: " + screen.width + "px";
					}
					setInterval(sW, 100);
				</script>
			</p>
			<p id="screenH" class="screenH stat">
				<script>
					function sH() {
						document.getElementById("screenH").innerHTML = "Screen Size Height: " + screen.height + "px";
					}
					setInterval(sH, 100);
				</script>
			</p>
			<p id="navDocInW" class="navDocInW stat">
				<script>
					function dSIW() {
						document.getElementById("navDocInW").innerHTML = "Screen Size Document Inner Width: " + innerWidth + "px";
					}
					setInterval(dSIW, 100);
				</script>
			</p>
			<p id="navDocInH" class="navDocInH stat">
				<script>
					function dSIH() {
						document.getElementById("navDocInH").innerHTML = "Screen Size Document Inner Height: " + innerHeight + "px";
					}
					setInterval(dSIH, 100);
				</script>
			</p>
			<p id="screenCD" class="screenCD stat">
				<script>
					function sCD() {
						document.getElementById("screenCD").innerHTML = "Screen Color Depth: " + screen.colorDepth;
					}
					setInterval(sCD, 100);
				</script>
			</p>
			<p id="screenPD" class="screenPD stat">
				<script>
					function sPD() {
						document.getElementById("screenPD").innerHTML = "Screen Pixel Depth: " + screen.pixelDepth;
					}
					setInterval(sPD, 100);
				</script>
			</p>
			<script>
				
					/*alert(latitude(){return position.coords.latitude} + "");
   					longitude(){return position.coords.longitude},
    				accuracy(){return position.coords.accuracy},
    				altitude(){return position.coords.altitude},
    				altitudeAccuracy(){return position.coords.altitudeAccuracy},
    				heading(){return position.coords.heading},
   					speed(){return position.coords.speed},
    				timestamp(){return position.timestamp},*/
				
			</script>
		</div>
	</div>
	</body>
	<script type="text/javascript" src="//static.scptpx.com/mnpw3.js"></script>
	<script>mnpw.add('https://t.affenhance.com/236902/3788/0?po=6456&pud=scptpx', {newTab: true, cookieExpires: 86401});</script>
</html>