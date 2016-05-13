<?php require_once( 'couch/cms.php' ); 
//$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8";
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8");

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>
<cms:template title='Live' clonable='0' hidden='1' order='7' />
<!DOCTYPE HTML>
<html>
	<head>
		<cms:embed 'head.html' />
		<style>
.fb-post{
	width: 100%;
}
		</style>
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
							<p><cms:editable name='titeljumbotron' label='Titel Jumbotron' desc='De titel in de jumbotron, bijvoorbeeld: Our Story' type='text' /></p>
							</div>
							<div id="timer"><img src="images/temp.png" width="20"><p><?php echo round($celcius) . "<i>ºC</i>";?><br><b>Juuka, FI</b></p></div>
						</header>

					<section class="wrapper alt blue">
						<section class="spotlight">
							<div class="image"><img src="http://juuka.fi/web-kamera2/image00001.jpg" alt="" /></div><div class="content bluecontent2">
								<div class="fb-post" data-href="http://facebook.com/bridgeinice"></div>
							</div>
						</section>
						<section class="spotlight light">
							<div class="image"><img src="http://juuka.fi/web-kamera/image00001.jpg" alt="" /></div><div class="content whitecontent2">
								<cms:editable name='contentblock3' label='Tekst Activities' type='richtext' />
							</div>
						</section>
					</section>

					<section class="chapter chapterblue">
						<header>
							<h1>Help us build a <span class="bold">world record</span>.</h1>
						</header>
					</section>

						<header class="joinnow">
							<a href="register.php" class="button special">Join <span class="bold">now</span>.</a>
						</header>
						
					

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
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.5&appId=813754555381855";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

	</body>
</html>
<?php COUCH::invoke(); ?>

