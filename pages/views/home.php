{% block main %}

<!-- Sections -->
<?php
include_once('home/slider.php');
include_once('home/introduction.php');
include_once('home/skills.php');
include_once('home/projects.php');
include_once('home/contacts.php');
?>

<!-- Scroller -->
<div id="scroller" class="start">
	<a href="#slider" class="scroll-up line-box txt-cen clickable">
		<div class="scroller-line bgr-e top"></div>
	</a>
	<a href="#skills" class="scroll-down txt-box">
		<h1 id="scroller-txt" class="txt-upp txt-e txt-1rem txt-light txt-vertical clickable load">Scroll</h1>
	</a>
	<a href="#skills" class="scroll-down line-box txt-cen clickable">
		<div class="scroller-line bgr-e bot load"></div>
	</a>
</div>

<!-- Loading -->
<div id="load-pan" class="bgr bgr-c4">

	<input type="hidden" id="load-time" data-time="<?= $_SESSION['loaded'] ? 0 : 1800 ?>">

	<div class="place-cen txt-cen">
		<svg id="logo1" class="index-module--logo--hoo-P svg-logo invert" viewBox="0 0 512 512" fill="currentColor" stroke="#000" xmlns="http://www.w3.org/2000/svg">
			<path d="m 256,30 -137,276.999998 c 10.46329,12.36571 30.91427,17.59735 46.1336,12.36571 15.21934,-5.23165 26.15823,-24.73142 33.7679,-35.67032 13.79252,20.45099 22.82899,40.42636 53.26766,40.42636 12.84131,0 22.829,-3.32924 32.81668,-11.89011 9.03648,-8.08526 15.69494,-17.59735 23.3046,-26.63383 7.60967,11.8901 17.59736,30.43866 32.81669,36.62152 8.56088,3.32923 16.17054,3.32923 24.73141,1.42681 9.03648,-1.90241 14.74373,-6.65845 19.97537,-14.26812 z" id="path6102" class="svg-elem-1"></path>
			<path d="m 345,338 c -18.07296,-3.32922 -28.06065,-13.79251 -37.57272,-28.06064 -15.21933,17.59735 -29.48746,28.53625 -54.69448,28.53625 -24.73141,-0.47561 -39.47514,-10.46329 -53.26766,-29.96306 -9.98769,14.26812 -19.97537,24.25581 -38.52393,26.63383 -15.21934,2.37802 -33.7679,-2.37802 -45.658,-11.89011 -16.17054,85.13314 48.51162,164.08343 135.07157,165.03464 86.55995,1.42681 153.14453,-76.09666 140.30322,-161.2298 -11.89011,10.93889 -30.91427,13.79252 -45.658,10.93889 z" id="path6103" class="svg-elem-2"></path>
		</svg><br>

		<svg id="logo2" class="index-module--logoscritta--VJSqB svg-logo invert" viewBox="0 0 2156 206" fill="currentColor" stroke="#000" xmlns="http://www.w3.org/2000/svg" width="2156" height="206">
			<path d="M 1.1981132,203.37972 V 1.1981132 H 39.537736 L 101.24057,98.544811 165.63915,1.1981132 h 38.33962 L 101.24057,151.56132 36.242925,51.818396 V 203.37972 Z" id="path834" class="svg-elem-1"></path>
			<path d="M 203.97877,55.712264 V 203.37972 h -37.44103 v -97.64623 z" id="path838" class="svg-elem-2"></path>
			<path d="m 310.49659,1.1981132 h 38.54733 L 421.05541,203.37972 h -38.97093 z" id="path840" class="svg-elem-3"></path>
			<path d="m 292.49372,52.949623 18.00287,52.526027 -36.42934,97.90407 h -38.75912 z" id="path842" class="svg-elem-4"></path>
			<path d="M 468.49827,1.1981132 H 633.70109 V 37.276535 H 468.49827 Z" id="path844" class="svg-elem-5"></path>
			<path d="m 531.61422,70.3171 h 35.15855 v 135.97463 h -35.15855 z" id="path846" class="svg-elem-6"></path>
			<path d="M 699.69811,1.1981132 H 850.66038 V 35.943397 H 699.69811 Z" id="path854" class="svg-elem-7"></path>
			<path d="M 698.77655,88.637409 H 836.00646 V 123.42863 H 698.77655 Z" id="path854-9" class="svg-elem-8"></path>
			<path d="m 697.58337,173.6696 h 150.96227 v 32.62213 H 697.58337 Z" id="path854-1" class="svg-elem-9"></path>
			<path d="M 909.96698,35.943397 V 1.1981132 h 95.25002 c 78.5638,0.04088 113.1325,95.1209788 24.5613,126.7004668 l 53.9151,78.39315 h -41.3349 l -51.51888,-73.60069 h -45.22877 v 73.60069 H 909.96698 V 100.29059 h 95.25002 c 56.3067,-1.223734 56.31,-64.421583 0,-64.347193 z" id="path886" class="svg-elem-10"></path>
			<path d="m 1207.6981,1.1981132 h 34.7453 V 203.67924 h -34.7453 z" id="path888" class="svg-elem-11"></path>
			<g id="g915" transform="translate(0,-2.339538)">
				<path d="m 1427.6358,3.5376512 h 38.5473 l 72.0115,202.1816088 h -38.9709 z" id="path840-9" class="svg-elem-12"></path>
				<path d="m 1409.6329,55.289161 18.0029,52.526029 -36.4293,97.90407 h -38.7591 z" id="path842-5" class="svg-elem-13"></path>
			</g>
			<path d="m 1776.8019,1.1981132 h 32.6486 c 156.0994,0.634562 161.7504,203.4438968 0,202.7806568 h -32.6486 v -33.84669 h 30.8514 c 115.3454,1.9591 115.8268,-134.544507 0,-136.884439 h -30.8514 z" id="path919" class="svg-elem-14"></path>
			<g id="g940" transform="translate(0,-10.183962)">
				<path d="m 2155.4057,11.382075 h -34.4458 c -84.6563,0 -127,34.135198 -127,91.356135 v 18.27122 h 36.842 c 0,-57.807983 29.776,-76.97877 79.6745,-76.97877 h 44.9293 z" id="path921" class="svg-elem-15"></path>
				<path d="m 1993.9599,214.16273 h 34.4458 c 84.6563,0 127,-34.1352 127,-91.35614 v -18.27121 h -36.842 c 0,57.80798 -29.776,76.97876 -79.6745,76.97876 h -44.9293 z" id="path921-2" class="svg-elem-16"></path>
			</g>
		</svg>
	</div>
</div>

{% end main %}