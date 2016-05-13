<?php require_once( 'couch/cms.php' ); 
//$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8";
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8");

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>
<cms:template title='Contact' clonable='0' order='9' />

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

					<section class="chapter">
							<header>
								<h1><cms:editable name='titelchapter1' label='Chapter 1 Titel' desc='Meet the Crew' type='text' /></h1>
							</header>
					</section>

						<section class="contactcontainer">
							<div class="contactperson">
								<img src="<cms:editable name='contactimage1' label='Contact Image 1' desc='Wordt automatisch op maat gemaakt'
    width='500'
    height='500'
    crop='1'
    type='image' />" />
								<div class="contactcard">
									<h2><cms:editable name='contactname1' label='Contact Naam 1' type='text' /></h2>
									<h3><cms:editable name='contactfunction1' label='Contact Functie 1' type='text' /></h3>
									<p>Phone: <cms:editable name='contactphone1' label='Contact Telefoon 1' type='text' /></p>
									<a href="mailto:"><cms:editable name='contactmail1' label='Contact Mail 1' type='text' /></a>
								</div>
							</div>
							<div class="contactperson blue">
								<img src="<cms:editable name='contactimage2' label='Contact Image 2' desc='Wordt automatisch op maat gemaakt'
    width='500'
    height='500'
    crop='1'
    type='image' />" />
								<div class="contactcard">
									<h2><cms:editable name='contactname2' label='Contact Naam 2' type='text' /></h2>
									<h3><cms:editable name='contactfunction2' label='Contact Functie 2' type='text' /></h3>
									<p>Phone: <cms:editable name='contactphone2' label='Contact Telefoon 2' type='text' /></p>
									<a href="mailto:"><cms:editable name='contactmail2' label='Contact Mail 2' type='text' /></a>
								</div>
							</div>
							<div class="contactperson">
								<img src="<cms:editable name='contactimage3' label='Contact Image 3' desc='Wordt automatisch op maat gemaakt'
    width='500'
    height='500'
    crop='1'
    type='image' />" />
								<div class="contactcard">
									<h2><cms:editable name='contactname3' label='Contact Naam 3' type='text' /></h2>
									<h3><cms:editable name='contactfunction3' label='Contact Functie 3' type='text' /></h3>
									<p>Phone: <cms:editable name='contactphone3' label='Contact Telefoon 3' type='text' /></p>
									<a href="mailto:"><cms:editable name='contactmail3' label='Contact Mail 3' type='text' /></a>
								</div>
							</div>
						</section>



					<section class="chapter chapterblue">
							<header>
								<h1><cms:editable name='titelchapter2' label='Chapter 2 Titel' desc='Come Visit Us' type='text' /></h1>
							</header>
					</section>

					<section class="wrapper alt blue">
						<section class="spotlight light">
							<div class="image"><img src="<cms:editable name='block2image' label='Locatie 1' desc='Wordt autoatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content whitecontent">
								<cms:editable name='contentblock2' label='Tekst Locatie 1' type='richtext' />
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<cms:editable name='block3image' label='Locatie 2' desc='Wordt automatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content bluecontent">
								<cms:editable name='contentblock3' label='Tekst Locatie 2' type='richtext' />
							</div>
						</section>
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