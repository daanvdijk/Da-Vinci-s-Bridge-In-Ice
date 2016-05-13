<?php require_once( 'couch/cms.php' ); 
//$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8";
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Juuka,fi?id=524901&APPID=b3dae0f37149a3cd4e8103a4e365d3c8");

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;
?>

<cms:template title='Home' clonable='0' hidden='0' order='1' />
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
							<p>Help us build a world <span class="bold">record</span></p>
							<a href="about.php" class="button"><span class="bold">Learn</span> more</a><a href="live.php" class="button special"><span class="bold">Bridge In Ice</span> Live</a>
						</div>
							<div id="timer"><img src="images/temp.png" width="20"><p><?php echo round($celcius) . "<i>ºC</i>";?><br><b>Juuka, FI</b></p></div>
						</header>
					<section id="cta" class="wrapper sponsors">
							<header class='logos'>
<?php $array = array(
	'<div><a href="http://www.groentefruit.eu/Consumenten/Verkooppunten%20_s_%20Dealers/Bekijk%20onze%20winkels/Bakel/$id_142/" target="_blank"><img src="images/logos/logo1.png" /></a></div>',
	'<div><a href="http://www.aon.com/netherlands/" target="_blank"><img src="images/logos/logo2.png" /></a></div>',
	'<div><a href="http://www.easycool.nl/" target="_blank"><img src="images/logos/logo4.png" /></a></div>',
	'<div><a href="http://www.eurofrigo.nl/" target="_blank"><img src="images/logos/logo5.png" /></a></div>',
	'<div><a href="http://www.chrmullertouw.nl/" target="_blank"><img src="images/logos/logo6.png" /></a></div>',
	'<div><a href="http://www.pekkaniska.com/" target="_blank"><img src="images/logos/logo7.png" /></a></div>',
	'<div><a href="http://polyned.nl/" target="_blank"><img src="images/logos/logo8.png" /></a></div>',
	'<div><a href="http://www.sanders-projectadviezen.nl/" target="_blank"><img src="images/logos/logo9.png" /></a></div>',
	'<div><a href="http://www.scantarp.fi/" target="_blank"><img src="images/logos/logo10.png" /></a></div>',
	'<div><a href="http://www.storaenso.com/" target="_blank"><img src="images/logos/logo11.png" /></a></div>',
	'<div><a href="http://www.transfennica.com/" target="_blank"><img src="images/logos/logo12.png" /></a></div>',
	'<div><a href="http://www.tujanranta.com/" target="_blank"><img src="images/logos/logo13.png" /></a></div>',
	'<div><a href="http://www.tulikivi.com/" target="_blank"><img src="images/logos/logo14.png" /></a></div>',
	'<div><a href="https://www.tue.nl/universiteit/alumni/universiteitsfonds-eindhoven/" target="_blank"><img src="images/logos/logo15.png" /></a></div>',
	'<div><a href="http://www.hcme.com/" target="_blank"><img src="images/logos/logo16.png" /></a></div>',
	'<div><a href="http://www.rotator.fi/" target="_blank"><img src="images/logos/logo17.png" /></a></div>',
	'<div><a href="http://www.mammoet.com/" target="_blank"><img src="images/logos/logo18.png" /></a></div>',
	'<div><a href="http://jldinternational.com/" target="_blank"><img src="images/logos/logo19.png" /></a></div>',
	'<div><a href="http://www.metallipalvelu.fi/" target="_blank"><img src="images/logos/logo20.png" /></a></div>',
	'<div><a href="http://www.sioen.com/" target="_blank"><img src="images/logos/logo21.png" /></a></div>',
	'<div><a href="https://www.dbschenker.com/ho-en/start.html" target="_blank"><img src="images/logos/logo22.png" /></a></div>',

	'<div><a href="http://www.ahlsell.com" target="_blank"><img src="images/logos/logo23.png" /></a></div>',
	'<div><img src="images/logos/logo24.png" /></div>',
	'<div><a href="http://www.cofely-gdfsuez.nl" target="_blank"><img src="images/logos/logo25.png" /></a></div>',
	'<div><a href="http://www.hydlub.fika" target="_blank"><img src="images/logos/logo26.png" /></a></div>',
	'<div><a href="http://www.kuvauskallinen.fi" target="_blank"><img src="images/logos/logo27.png" /></a></div>',
	'<div><a href="http://www.josek.fi/fi/" target="_blank"><img src="images/logos/logo28.png" /></a></div>',
	'<div><a href="http://www.juuanlvi.fi" target="_blank"><img src="images/logos/logo29.png" /></a></div>',
	'<div><a href="http://www.hsaoy.com/index_noframes.htm" target="_blank"><img src="images/logos/logo30.png" /></a></div>',
	'<div><a href="http://www.macotechnology.com" target="_blank"><img src="images/logos/logo31.png" /></a></div>',
	'<div><a href="http://www.pielisenmaanrakennus.fi" target="_blank"><img src="images/logos/logo32.png" /></a></div>',
	'<div><a href="http://www.saher.fi/fi/etusivu/" target="_blank"><img src="images/logos/logo33.png" /></a></div>',
	'<div><a href="http://www.sahkojarska.fi" target="_blank"><img src="images/logos/logo34.png" /></a></div>',
	'<div><a href="http://www.sick.com/group/EN/home/Pages/homepage1.aspx" target="_blank"><img src="images/logos/logo35.png" /></a></div>',
	'<div><a href="http://www.detelefoongids.nl/erica-project-advies/18889542/5-1/" target="_blank"><img src="images/logos/logo36.png" /></a></div>',
	'<div><a href="http://www.vaarojensanomat.fi/etusivu/" target="_blank"><img src="images/logos/logo37.png" /></a></div>',
	'<div><a href="http://www.vandoren.nl" target="_blank"><img src="images/logos/logo39.png" /></a></div>',
	'<div><a href="http://www.rikosseuraamus.fi/fi/index/vankilatuotteet.html" target="_blank"><img src="images/logos/logo40.png" /></a></div>',
	'<div><a href="http://global.wago.com/nl/" target="_blank"><img src="images/logos/logo41.png" /></a></div>',
	'<div><a href="http://arcadis.nl/" target="_blank"><img src="images/logos/logo42.png" /></a></div>'
);
shuffle($array);
foreach ($array as $item) {
    echo $item;
}

?>
							</header>
					</section>
					<section class="wrapper alt style2 light">
						<section class="spotlight blue">
							<div class="image"><img src="<cms:editable name='block1image' label='Content Block 1 image' desc='Wordt autoatisch op maat gemaakt'
    width='812'
    height='450'
    crop='1'
    type='image' />" alt="" /></div><div class="content bluecontent">
<cms:editable name='contentblock1' label='Tekst Content Block 1' type='richtext' />
								<a class="action" href="about.php"><span class="bold">learn</span> more <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</section>

<cms:pages masterpage='newsitem.php' paginate='0' limit='1' >
						<section class="spotlight">
							<div class="image"><img src="<cms:thumbnail newsimg width='784' height='529' />" alt="" /></div><div class="content whitecontent">
								<h2>Latest News: <cms:show nieuwstitel /></h2>
<p><cms:date k_page_date format='j M, 20y' />  <cms:excerptHTML count='25' ignore='img'><cms:show contentintro /></cms:excerptHTML></p>
								<a class="actionblue" href="<cms:show k_page_link />"><span class="bold">Continue</span> reading <i class="fa fa-long-arrow-right"></i></a>
								<a class="actionblue" href="news.php"><span class="bold">More</span> news <i class="fa fa-long-arrow-right"></i></a>
							
							</div>
						</section>
</cms:pages>


					</section>
					<section class="wrapper alt blue">
						<section class="spotlight">
							<div class="image"><img src="<cms:editable name='block2image' label='Content Block 2 image' desc='Wordt autoatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content bluecontent">
								<cms:editable name='contentblock2' label='Tekst Content Block 2' type='richtext' />
								<a class="action" href="contact.php"><span class="bold">say</span> hello <i class="fa fa-long-arrow-right"></i></a>								
							</div>
						</section>
						<section class="spotlight light">
							<div class="joinnowhomepage">
								<cms:editable name='contentblock3' label='Tekst Content Block 3' type='richtext' />
								<a href="joinnow.php" class="button special">Join <span class="bold">now</span></a>
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

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/slick/slick.min.js"></script>

<script>

$('.logos').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 8,
  slidesToScroll: 8,
  autoplay: true,
  speed: 750,
  autoplaySpeed: 4000,
  arrows: false,
  accessibility: false,
  responsive: [
    {
      breakpoint: 1750,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 6,
        infinite: true,
        dots: false,
  		speed: 300,
  autoplaySpeed: 3500,
		accessibility: false,
      }
    },
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
        dots: false,
  		speed: 300,
  autoplaySpeed: 3000,
		accessibility: false,
      }
    },
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
  autoplaySpeed: 2500,
        dots: false,
  		speed: 300,
  autoplaySpeed: 4000,
		accessibility: false,
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
  autoplaySpeed: 2000,
  		speed: 300,
		accessibility: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
  		speed: 300,
  autoplaySpeed: 1500,
        dots: false,
		accessibility: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>


	</body>
</html>
<?php COUCH::invoke(); ?>


