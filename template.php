<?php
class Template {
	var $title = 'Untitled';
	var $keywords = 'keywords';
	var $description = 'description';
	var $script = '';
	function setTitle($title){ $this->title = $title; }
	function setMetaKW($keywords){ $this->keywords = $keywords; }
	function setMetaDesc($description){ $this->description = $description; }
	function setScript($script){ $this->script = $script; }
	function setOGTitle($ogtitle){ $this->ogtitle = $ogtitle; }
	function open() { ?>
		<!DOCTYPE HTML>
		<html lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<meta name="description" content="<?php echo $this->description; ?>" />
				<meta name="author" content="Stevenson Library" />
				<meta name="language" content="english" />
				<meta name="format-detection" content="telephone=yes" />
				<meta name="HandHeldFriendly" content="true" />

				<!-- Open Graph Properties (OGP) for Social Links -->
				<meta property="og:title" content="<?php echo $this->ogtitle; ?>" >
				<meta property="og:type" content="website" >
				<meta property="og:image" content="images/header/square logo.png" >
				<meta property="og:url" content="https://www.bard.edu/library" >
				<meta property="og:description" content="<?php echo $this->description; ?>" >
				<meta property="og:locale" content="en_US" >
				<meta property="og:site_name" content="Stevenson Library" >
				<!-- END OGP -->

				<title><?php echo $this->title; ?></title>
				
				<link rel="icon" type="image/x-icon" href="https://www.bard.edu/images/favicon.ico">
				<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow'>
				<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans:400,700'>
				<!-- Font Awesome CSS -->
				<script src="https://kit.fontawesome.com/97160afdb9.js" crossorigin="anonymous"></script>
				<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> -->
				<!-- Custom CSS -->
				<link rel="stylesheet" type="text/css" href="main.css">
				<!-- Bootstrap CSS, JS -->
				<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
				<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
				<script src="https://www.bard.edu/library/js/Old JS/jquery-3.3.1.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
				<script src="https://www.bard.edu/library/js/jquery-ui-1.12.1/jquery-ui.js"></script>
			</head>
			
			<body>
				<header class="featured-image">
					<nav class="navbar navbar-expand-lg navbar-dark bg-gray fixed-top navbar-custom ps-2 pe-2" aria-label="Main navigation">
						<a class="navbar-brand mr-auto" href="index.php">
							<img class="logo-style" src="images/logo-stevenson-3.png" alt="Bard Libraries - Home">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#BILnav" aria-controls="BILnav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="BILnav">
							<ul class="navbar-nav mx-auto">
								<li class="nav-item me-2 dropdown">
									<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Search</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="https://libguides.bard.edu/az.php">Databases</a>
										<a class="dropdown-item" href="http://ezprox.bard.edu/login?url=https://search.ebscohost.com/login.aspx?authtype=ip,guest&custid=s8999806&groupid=main&direct=true&db=edspub&profile=eds&plp=1">Journals by Title</a>
										<a class="dropdown-item" href="https://library.bard.edu/">Catalog</a>
										<!-- <a class="dropdown-item" href="https://cny.reshare.indexdata.com/">Connect NY</a> -->
										<a class="dropdown-item" href="http://ezprox.bard.edu/login?url=https://www.worldcat.org/">Worldcat</a>
										<a class="dropdown-item" href="https://digitalcommons.bard.edu/">Digital Commons</a>
									</div>
								</li>
								<li class="nav-item me-2 dropdown">
									<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Help</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="ask-a-librarian.php">Ask a Librarian</a>
										<a class="dropdown-item" href="ask-a-librarian.php#makeAResearch">Make a Research Appointment</a>
										<a class="dropdown-item" href="off-campus-help.php">Off Campus Access Help</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/?b=s">Research Guides</a>
										<a class="dropdown-item" href="ask-a-librarian.php#requestAWritingAppointment">Request a Writing Appointment</a>
										<a class="dropdown-item" href="https://goo.gl/forms/6Aulkz1lnZGz6I3C2" target="_blank">Special Collections Request Form</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/find-it">Find It in the Library</a>
										<!-- <a class="dropdown-item" href="https://libguides.bard.edu/helping-videos">Help Videos</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/how-to-guide">How to Guides</a> -->
									</div>
								</li>
								<li class="nav-item me-2 dropdown">
									<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="https://libguides.bard.edu/faculty">For Faculty</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/senior-project-support">Senior Project Support</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/borrowrenew">Borrow &amp; Renew Books</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/reserves">Reserves</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/ILL">Interlibrary Loan</a>
										<a class="dropdown-item" href="https://www.sensusaccess.com/web3/bard/" target="_blank">Bard Accessibility Converter (SensusAccess)</a>
										<a class="dropdown-item" href="https://space.bard.edu/">Reserve Library Rooms</a>
										<a class="dropdown-item" href="writing-support.php">Writing Support</a>
										<!-- <a class="dropdown-item" href="http://ezprox.bard.edu/login?url=https://www.noodletools.com/login.php?group=2665&code=2318" target="_blank">NoodleTools</a> -->
										<!-- <a class="dropdown-item" href="https://digitalcommons.bard.edu/" target="_blank">Digital Commons</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/c.php?g=1125434&p=8209136">Borrowing</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/my-books-fines">Renew Books</a> -->
									</div>
								</li>
								<li class="nav-item me-2 dropdown">
									<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="contact.php">Contact</a>
										<a class="dropdown-item" href="hours.php">Hours</a>
										<!-- <a class="dropdown-item" href="about.php">Welcome</a> -->
										<a class="dropdown-item" href="collections.php">Collections</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/accessibility">Accessibility</a>
										<a class="dropdown-item" href="https://libguides.bard.edu/student-jobs">Student Jobs FAQ</a>
									</div>
								</li>
								<li class="nav-item me-2">
									<a class="nav-link" href="https://libguides.bard.edu/fosl" target="_blank">Friends</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Account</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="https://librarysso.bard.edu/patroninfo">See My Library Account</a>
										<a class="dropdown-item" href="https://bard.illiad.oclc.org/illiad/logon.html">Interlibrary Loan Account</a>
									</div>
								</li>
								<li class="nav-item">
									<a href="https://www.facebook.com/bardlibrary" class="facebook nav-link" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
								</li>
								<li class="nav-item">
									<a href="https://www.instagram.com/bardlibrary" class="instagram nav-link" target="_blank"><i class="fa-brands fa-instagram"></i></a>
								</li>
							</ul>
							<ul class="navbar-nav">
								<li class="nav-item">
									<div class="logo">
										<a target="_blank" href="https://www.bard.edu/" title="Bard Home"><img src="images/logo-bard-sm1.png" alt="Bard Logo" class="img-fluid"></a>
									</div>
								</li>
							</ul>
						</div>
					</nav>
	<? }

	function close() { ?>
				<hr style="margin-bottom: 0px !important; margin-top: 30px;">
				<footer>
					<div style="background-color: #efefef;" class="page-bottom">
						<div class="container pt-4 pb-4">
							<div class="row">
								<div class="col-sm-4 mb-4">
									<h2 class="h4">Bard Library</h2>
									<div>
										Stevenson Library<br>
										1 Library Road<br>
										Annandale-on-Hudson, New York 12504<br>
										845.758.7281
									</div>
								</div>
								<div class="col-sm-4 mb-4">
									<h2 class="h4">Quick Links</h2>
									<ul>
										<li><a href="contact.php">Contact Us</a></li>
										<li><a href="https://inside.bard.edu/">Inside Bard</a></li>
										<li><a href="https://www.bard.edu/arendtcollection/">Arendt Collection</a></li>
										<li><a href="https://inside.bard.edu/learningcommons/">Learning Commons</a></li>
										<li><a href="https://digitalcommons.bard.edu/">Digital Commons</a></li>
										<li><a href="https://space.bard.edu/EMSWebApp/">Space Management</a></li>
									</ul>
								</div>
								<div class="col-sm-4 mb-4">
									<h2 class="h4">Other Libraries</h2>
									<ul>
										<li><a href="https://ccs.bard.edu/research-center/">CCS Bard</a></li>
										<li><a href="https://www.bgc.bard.edu/research/library.html">BGC Library</a></li>
										<li><a href="https://www.levyinstitute.org/">Levy Library</a></li>
										<li><a href="https://www.bard.edu/montgomeryplace/">Montgomery Place</a></li>
									</ul>
								</div>
							</div>					
						</div>
					</div>
					<div style="position: fixed; bottom: 1px; right: 1px; padding: 1em;">
						<a href="ask-a-librarian.php" class="float btn btn-bard" style="box-shadow: none; filter: drop-shadow(2px 2px 2px rgba(0,0,0,0.3)); font-size: 1.5rem;"><!-- <i class="fas fa-question"></i> Ask a Librarian --><img src="https://www.bard.edu/library/images/homepage/ask%20bubble.png" style="width:100px;"></a>
					</div>
					
					<!-- Google Analytics Code -->
					<script type="text/javascript">
						var _gaq = _gaq || [];
						_gaq.push(['_setAccount', 'UA-10462029-4']);
						_gaq.push(['_trackPageview']);
						
						(function() {
							var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
							ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
							})();
					</script>
					
					<!-- RESOLUTE DIGITAL ANALYTICS CODE /-->
					<script type="text/javascript">
						var _gaq = _gaq || [];
						_gaq.push(['_setAccount', 'UA-1929989-2']);
						_gaq.push(['_setDomainName', 'bard.edu']);
						_gaq.push(['_setAllowLinker', true]);
						_gaq.push(['_trackPageview']);
						(function() {
							var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
							ga.src = ('https:' == document.location.protocol ? 'https://' : 'https://') + 'stats.g.doubleclick.net/dc.js';
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(ga, s);
						})();
						/*--------------------------------*/
						function getLibrariesLink(sel) {window.location = sel.value;}
						/*--------------------------------*/
						function getIphoneNav(sel){window.location = sel.value;}
					</script>
				</footer>
			</body>
		</html>
	<? }
} ?>