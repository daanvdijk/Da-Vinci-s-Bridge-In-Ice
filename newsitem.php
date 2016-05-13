<?php require_once( 'couch/cms.php' ); 
//$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8";
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8");

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>
<cms:template title='Nieuws' clonable='1' order='3' />

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
							<p>Latest <span class="bold">news</span></p>
							</div>
							<div id="timer"><img src="images/temp.png" width="20"><p><?php echo round($celcius) . "<i>ºC</i>";?><br><b>Juuka, FI</b></p></div>
						</header>

					<section class="newscontainer">
						<div class="newsitem">
							<section class="chapter blue">
									<header>
										<h1><cms:editable name='nieuwstitel' label='Titel Nieuwsitem' desc='Titel van het nieuwsitem' type='text' /></h1>
									</header>
							</section>
							<p class="newsintro"><cms:editable name='contentintro' label='Eerste aliena Nieuwsitem' desc='Plaats hier de eerste alinea van het nieuwsitem' type='nicedit' /></p>

							<img class="newsimage" src="<cms:editable name='newsimg' label='News Image' type='image' />" />

							<div class="newstext">
								<cms:editable name='content' label='Tekst Nieuwsitem' desc='Plaats hier het artikel' type='richtext' />
<div class="video-container"><cms:editable
name='embedcode'
label='Embed hier videos'
desc='Video Embed'
height='100'
no_xss_check='1'
type='textarea'/>
							</div>
							</div>
						</div>

						<div class="newssidebar">


<cms:pages masterpage='newsitem.php' paginate='0' limit='20' >


							<div class="sidebaritem">
								<h2><cms:show nieuwstitel /></h2>
								<p><cms:date k_page_date format='j M, 20y' /></p>
								<a class="action" href="<cms:show k_page_link />"><span class="bold">Continue</span> reading <i class="fa fa-long-arrow-right"></i></a>
							</div></cms:pages>



						</div>
					</section>

					</article>

				<!-- Footer -->
				<!--<img src="http://placehold.it/1x1" />TIJDELIJK TIJDELIJK TIJDELIJK -->
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