<?php require_once( 'couch/cms.php' ); 
//$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8";
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8");

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>
<cms:template title='Blog' clonable='0' hidden='1' order='10' />

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
							<p>Blog</p>
							</div>
							<div id="timer"><img src="images/temp.png" width="20"><p><?php echo round($celcius) . "<i>ºC</i>";?><br><b>Juuka, FI</b></p></div>
						</header>
					<section class="chapter chapterblue">
							<header>
								<h1>Our agenda</h1>
							</header>
					</section>				
					<section class="wrapper" style="background-color: #f5f5f5;">
							<center><div class="storify"><iframe src="//storify.com/omroepbrabant/vijf-kilo-afvallen-in-vijf-weken-verslaggever-prob/embed?border=false" width="100%" height="750" frameborder="no" allowtransparency="true"></iframe><script src="//storify.com/omroepbrabant/vijf-kilo-afvallen-in-vijf-weken-verslaggever-prob.js?border=false"></script><noscript>[<a href="//storify.com/omroepbrabant/vijf-kilo-afvallen-in-vijf-weken-verslaggever-prob" target="_blank">View the story "Ik wil dus afvallen. Dat moet van mijn broeken" on Storify</a>]</noscript></div></center>
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