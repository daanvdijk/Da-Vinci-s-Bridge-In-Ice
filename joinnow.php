<?php require_once( 'couch/cms.php' ); 
//$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8";
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8");

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>
<cms:template title='Join Now' clonable='0' hidden='0' order='7' />
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
							<p><cms:editable name='titeljumbotron' label='Titel Jumbotron' desc='De titel in de jumbotron, bijvoorbeeld: Our Story' type='text' /></p>
							</div>
							<div id="timer"><img src="images/temp.png" width="20"><p><?php echo round($celcius) . "<i>ºC</i>";?><br><b>Juuka, FI</b></p></div>
						</header>

					<section class="wrapper alt blue">
						<section class="spotlight">
							<div class="image"><img src="<cms:editable name='block2image' label='Content Work image' desc='Wordt autoatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content bluecontent2">
								<cms:editable name='contentblock2' label='Tekst Work' type='richtext' />
								<a class="actionblue" target="_BLANK" href="downloads/Juuka in Ice volunteer guide 2016.pdf"><span class="bold">Download</span> volunteer guide <i class="fa fa-long-arrow-right"></i></a>
								<a class="actionblue" target="_BLANK" href="downloads/OFFER TO SAFETY BOOTS AND GLOVES.pdf"><span class="bold">Download</span> shop offers <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</section>
						<section class="spotlight light">
							<div class="image"><img src="<cms:editable name='block3image' label='Activities' desc='Wordt automatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content whitecontent2">
								<cms:editable name='contentblock3' label='Tekst Activities' type='richtext' />
							</div>
						</section>
					</section>

					<section class="chapter chapterblue">
						<header>
							<h1><cms:editable name='titelchapter1' label='Chapter Titel' desc='Help us build a world record' type='text' /></h1>
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

	</body>
</html>
<?php COUCH::invoke(); ?>

