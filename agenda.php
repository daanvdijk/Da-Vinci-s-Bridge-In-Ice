<?php require_once( 'couch/cms.php' ); 
//$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8";
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8");

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>
<cms:template title='Agenda' clonable='0' hidden='1' order='9' />

<!DOCTYPE HTML>
<html>
	<head>
		<cms:embed 'head.html' />
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<cms:embed 'menu.html' />

				<!-- Main -->
					<article id="main">

						<header>
							<div id="ContentPost">
							<h2>DA VINCI'S BRIDGE <span class="bold">IN ICE</span></h2>
							<p>Join <span class="bold">now</span></p>
							</div>
							<div id="timer"><img src="images/temp.png" width="20"><p><?php echo round($celcius) . "<i>ºC</i>";?><br><b>Juuka, FI</b></p></div>
						</header>
					<section class="chapter chapterblue">
							<header>
								<h1>Our agenda</h1>
							</header>
					</section>				
					<section class="wrapper" style="background-color: #f5f5f5;">
							<center><iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showDate=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;hl=en_GB&amp;bgcolor=%23f5f5f5&amp;src=nl.dutch%23holiday%40group.v.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FBrussels"  width="100%" style="max-width: 800px" height="600" frameborder="0" scrolling="no"></iframe></center>
					</section>
												</article>

				<!-- Footer -->
					<footer id="footer">
						<cms:embed 'footer.html' />
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/parallaxtext.js"></script>

	</body>
</html>
<?php COUCH::invoke(); ?>