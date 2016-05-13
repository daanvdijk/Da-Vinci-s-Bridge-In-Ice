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
							<header id="graduating">
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
							</div>
						</section>
						<section class="spotlight4060">
							<div class="image"><img src="<cms:editable name='block2image' label='Content Block 2 image' desc='Wordt autoatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content whitecontent2">
								<p class="twocols"><cms:editable name='contentblock2' label='Tekst Content Block 2' type='nicedit' /></p>
							</div>
						</section>

						<section class="spotlighteven blue">
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

					<section class="chapter">
							<header>
								<h1><cms:editable name='titelchapter2' label='Chapter 2 Titel' desc='Building With Ice' type='text' /></h1>
							</header>
					</section>
					
					<section class="bannerimage">
						<img src="<cms:editable name='bigimage' label='Grote afbeelding'
    type='image' />"/>
					</section>

					<section class="chapter chapterblue">
						<header>
							<p class="threecols"><cms:editable name='contentblock5' label='Tekst Content Block 5' type='nicedit' /></p>
						</header>
					</section>

					<section class="wrapper alt style2 light">
						<section class="spotlighteven">
							<div class="image"><img src="<cms:editable name='block6image' label='Content Block 6 image' desc='Wordt automatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content whitecontent2">

    	  <cms:editable name='contentblock6text' label='Content block 6 tekst' desc='' type='richtext' />

							</div>
						</section>
						<section class="spotlight4060 blue">
							<div class="image"><img src="<cms:editable name='block7image' label='Content Block 7 image' desc='Wordt automatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content bluecontent2">
    	  <cms:editable name='contentblock7text' label='Content block 7 tekst' desc='' type='richtext' />							</div>
						</section>
					</section>

					<section class="chapter">
						<header>
							<h1><cms:editable name='titelchapter3' label='Chapter 3 Titel' desc='Building With Ice' type='text' /></h1>
						</header>
					</section>

					<section class="wrapper alt style2 light">
						<section class="spotlighteven blue">
							<div class="image"><img src="<cms:editable name='block8image' label='Content Block 8 image' desc='Wordt automatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content whitecontent2">

    	  <cms:editable name='contentblock8text' label='Content block 8 tekst' desc='' type='richtext' />

							</div>
						</section>

						<section class="spotlight4060">
							<div class="image"><img src="<cms:editable name='block9image' label='Content Block 9 image' desc='Wordt automatisch op maat gemaakt'
    width='748'
    height='529'
    crop='1'
    type='image' />" alt="" /></div><div class="content bluecontent2">
    	  <cms:editable name='contentblock9text' label='Content block 9 tekst' desc='' type='richtext' />
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