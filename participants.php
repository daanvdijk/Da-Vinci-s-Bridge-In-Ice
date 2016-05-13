<?php require_once( 'couch/cms.php' ); 
//$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8";
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8");

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>
<cms:template title='About' clonable='0' order='2' />

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

					<section class="chapter chapterwhite">
							<header>
								<h1><cms:editable name='titelchapter1' label='Chapter 1 Titel' desc='Graduating on Ice' type='text' /></h1>
							</header>
					</section>

					<section class="wrapper alt style2 light">
						<section class="spotlighteven blue">
							<div class="image"><img src="
								<cms:editable name='block1image' label='Content Block 1 image' desc='Wordt autoatisch op maat gemaakt'
								    width='812'
								    height='450'
								    crop='1'
								    type='image' />
			" alt="" /></div><div class="content bluecontent2">
								<p><cms:editable name='contentblock1' label='Tekst Content Block 1' type='nicedit' /></p>
																<a class="action" target="_BLANK" href="downloads/20150910 sponsorbrochure.pdf"><span class="bold">Download</span> sponsor brochure <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</section>
					</section>

					<section id="cta" class="wrapper sponsors">
							<header>
								<a href="http://www.groentefruit.eu/Consumenten/Verkooppunten%20_s_%20Dealers/Bekijk%20onze%20winkels/Bakel/$id_142/" target="_blank"><img src="images/logos/logo1.png" /></a>
								<a href="http://www.aon.com/netherlands/" target="_blank"><img src="images/logos/logo2.png" /></a>
								<a href="http://www.easycool.nl/" target="_blank"><img src="images/logos/logo4.png" /></a>
								<a href="http://www.eurofrigo.nl/" target="_blank"><img src="images/logos/logo5.png" /></a>
								<a href="http://www.chrmullertouw.nl/" target="_blank"><img src="images/logos/logo6.png" /></a>
								<a href="http://www.pekkaniska.com/" target="_blank"><img src="images/logos/logo7.png" /></a>
								<a href="http://polyned.nl/" target="_blank"><img src="images/logos/logo8.png" /></a>
								<a href="http://www.sanders-projectadviezen.nl/" target="_blank"><img src="images/logos/logo9.png" /></a>
								<a href="http://www.scantarp.fi/" target="_blank"><img src="images/logos/logo10.png" /></a>
								<a href="http://www.storaenso.com/" target="_blank"><img src="images/logos/logo11.png" /></a>
								<a href="http://www.transfennica.com/" target="_blank"><img src="images/logos/logo12.png" /></a>
								<a href="http://www.tujanranta.com/" target="_blank"><img src="images/logos/logo13.png" /></a>
								<a href="http://www.tulikivi.com/" target="_blank"><img src="images/logos/logo14.png" /></a>
								<a href="https://www.tue.nl/universiteit/alumni/universiteitsfonds-eindhoven/" target="_blank"><img src="images/logos/logo15.png" /></a>
								<a href="http://www.hcme.com/" target="_blank"><img src="images/logos/logo16.png" /></a>
								<a href="http://www.rotator.fi/" target="_blank"><img src="images/logos/logo17.png" /></a>
								<a href="http://www.mammoet.com/" target="_blank"><img src="images/logos/logo18.png" /></a>
								<a href="http://jldinternational.com/" target="_blank"><img src="images/logos/logo19.png" /></a>
								<a href="http://www.metallipalvelu.fi/" target="_blank"><img src="images/logos/logo20.png" /></a>
								<a href="http://www.sioen.com/" target="_blank"><img src="images/logos/logo21.png" /></a>
								<a href="https://www.dbschenker.com/ho-en/start.html" target="_blank"><img src="images/logos/logo22.png" /></a>
								<a href="http://www.ahlsell.com" target="_blank"><img src="images/logos/logo23.png" /></a>
								<img src="images/logos/logo24.png" />
								<a href="http://www.cofely-gdfsuez.nl" target="_blank"><img src="images/logos/logo25.png" />
								<a href="http://www.hydlub.fika" target="_blank"><img src="images/logos/logo26.png" />
								<a href="http://www.kuvauskallinen.fi" target="_blank"><img src="images/logos/logo27.png" />
								<a href="http://www.josek.fi/fi/" target="_blank"><img src="images/logos/logo28.png" />
								<a href="http://www.juuanlvi.fi" target="_blank"><img src="images/logos/logo29.png" />
								<a href="http://www.hsaoy.com/index_noframes.htm" target="_blank"><img src="images/logos/logo30.png" />
								<a href="http://www.macotechnology.com" target="_blank"><img src="images/logos/logo31.png" />
								<a href="http://www.pielisenmaanrakennus.fi" target="_blank"><img src="images/logos/logo32.png" />
								<a href="http://www.saher.fi/fi/etusivu/" target="_blank"><img src="images/logos/logo33.png" />
								<a href="http://www.sahkojarska.fi" target="_blank"><img src="images/logos/logo34.png" />
								<a href="http://www.sick.com/group/EN/home/Pages/homepage1.aspx" target="_blank"><img src="images/logos/logo35.png" />
								<a href="http://www.detelefoongids.nl/erica-project-advies/18889542/5-1/" target="_blank"><img src="images/logos/logo36.png" />
								<a href="http://www.vaarojensanomat.fi/etusivu/" target="_blank"><img src="images/logos/logo37.png" />
								<a href="http://www.vandoren.nl" target="_blank"><img src="images/logos/logo39.png" />
								<a href="http://www.rikosseuraamus.fi/fi/index/vankilatuotteet.html" target="_blank"><img src="images/logos/logo40.png" />
								<a href="http://global.wago.com/nl/" target="_blank"><img src="images/logos/logo41.png" />
								<a href="http://arcadis.nl/" target="_blank"><img src="images/logos/logo42.png" />
							</header>
					</section>

					<section class="chapter chapterblue">
							<header>
								<h1><cms:editable name='titelchapter2' label='Chapter 2 Titel' desc='Consortium' type='text' /></h1>
							</header>
					</section>

					<section class="wrapper alt style2 light">
						<section class="spotlighteven">
							<div class="image"><img src="
<cms:editable name='block3image' label='Content Block 3 image' desc='Wordt autoatisch op maat gemaakt'
    width='812'
    height='450'
    crop='1'
    type='image' />
			" alt="" /></div><div class="content whitecontent">
								<p><cms:editable name='contentblock3' label='Tekst Content Block 3' type='nicedit' /></p>
							</div>
						</section>
					</section>

					<section id="cta" class="wrapper sponsors">
							<header>
								<a href="http://www.bridgesmathart.org/bridges-2016/" target="_blank"><img src="images/logos/deelnemer1.png" /></a>
								<a href="https://www.jyu.fi/en/" target="_blank"><img src="images/logos/deelnemer2.png" /></a>
								<a href="http://www.uminho.pt/en" target="_blank"><img src="images/logos/deelnemer3.png" /></a>
								<a href="http://www.aalto.fi/en/" target="_blank"><img src="images/logos/deelnemer4.png" /></a>
								<a href="http://www.bath.ac.uk/" target="_blank"><img src="images/logos/deelnemer5.png" /></a>
								<a href="http://www.ed.ac.uk/home" target="_blank"><img src="images/logos/deelnemer6.png" /></a>
								<a href="http://fontys.nl/" target="_blank"><img src="images/logos/deelnemer7.png" /></a>
								<a href="http://www.ugent.be/" target="_blank"><img src="images/logos/deelnemer8.png" /></a>
								<a href="http://www.juuka.fi/fi/" target="_blank"><img src="images/logos/deelnemer9.png" /></a>
								<a href="http://www.karelia.fi/en/" target="_blank"><img src="images/logos/deelnemer10.png" /></a>
								<a href="http://www.kuleuven.be/kuleuven/" target="_blank"><img src="images/logos/deelnemer11.png" /></a>
								<a href="http://www.eng.rushydro.ru/" target="_blank"><img src="images/logos/deelnemer12.png" /></a>
								<a href="http://www.tudelft.nl/" target="_blank"><img src="images/logos/deelnemer13.png" /></a>
								<a href="http://www.tue.nl/" target="_blank"><img src="images/logos/deelnemer14.png" /></a>
								<a href="http://www.sintlucas.nl/" target="_blank"><img src="images/logos/deelnemer16.png" /></a>
								<a href="http://www.support.tue.nl/" target="_blank"><img src="images/logos/deelnemer17.png" /></a>
								<a href="http://www.vtt.fi/" target="_blank"><img src="images/logos/deelnemer18.png" /></a>
								<a href="http://pohjois-karjala.fi/maakuntaliitto" target="_blank"><img src="images/logos/deelnemer19.png" /></a>
								<a href="https://www.ethz.ch/en.html" target="_blank"><img src="images/logos/deelnemer20.png" /></a>
								<a href="http://www.summacollege.nl/" target="_blank"><img src="images/logos/deelnemer21.png" /></a>
							</header>
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