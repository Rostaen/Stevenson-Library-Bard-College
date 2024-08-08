<?php

class Template
{
	var $title = 'Untitled';
	var $keywords = 'keywords';
	var $description = 'description';
	var $script = '';
	var $ogtitle = '';
	function setTitle($title)
	{
		$this->title = $title;
	}
	function setMetaKW($keywords)
	{
		$this->keywords = $keywords;
	}
	function setMetaDesc($description)
	{
		$this->description = $description;
	}
	function setScript($script)
	{
		$this->script = $script;
	}
	function setOGTitle($ogtitle)
	{
		$this->ogtitle = $ogtitle;
	}

	function open()
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		include_once('inc/connect.php');
		include_once('page-functions/template-functions.php');
?>
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
			<meta property="og:title" content="<?php echo $this->ogtitle; ?>">
			<meta property="og:type" content="website">
			<meta property="og:image" content="images/header/square logo.png">
			<meta property="og:url" content="https://www.bard.edu/library">
			<meta property="og:description" content="<?php echo $this->description; ?>">
			<meta property="og:locale" content="en_US">
			<meta property="og:site_name" content="Stevenson Library">
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
				<div class="navbar navbar-expand-xl navbar-dark bg-gray fixed-top navbar-custom ps-2 pe-2 row" aria-label="Main navigation">
					<a class="navbar-brand col-3" href="index.php">
						<img class="logo-style" src="images/logo-stevenson-3.png" alt="Bard Libraries - Home">
					</a>
					<div class="col-8">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#BILnav" aria-controls="BILnav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<nav class="collapse navbar-collapse row" id="BILnav">
							<div class="col-1">&nbsp;</div>
							<ul class="navbar-nav mx-auto col-7">
								<?php
								$results = fetchMenuItems('Search');
								printDropMenu('Search', $results);

								$results = fetchMenuItems('Help');
								printDropMenu('Help', $results);

								$results = fetchMenuItems('Services');
								printDropMenu('Services', $results);

								$results = fetchMenuItems('About');
								printDropMenu('About', $results);

								printMenuItem('https://libguides.bard.edu/fosl', 'Friends');

								$results = fetchMenuItems('Account');
								printDropMenu('Account', $results);

								printSocialMenuItem('https://www.facebook.com/bardlibrary', 'facebook', 'fa-facebook-square');

								printSocialMenuItem('https://www.instagram.com/bardlibrary', 'instagram', 'fa-instagram');
								?>
							</ul>
							<div class="col-3">&nbsp;</div>
						</nav>
					</div>
					<div class="col-1">
						<div class="logo">
							<a target="_blank" href="https://www.bard.edu/" title="Bard Home"><img src="images/logo-bard-sm1.png" alt="Bard Logo" class="img-fluid"></a>
						</div>
					</div>
				</div>
			<? }

		function close()
		{ ?>
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
								<?php
								$results = fetchMenuItems('Quick Links');
								printFooterLinks('Quick Links', $results);

								$results = fetchMenuItems('Other Libraries');
								printFooterLinks('Other Libraries', $results);
								?>
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
							var ga = document.createElement('script');
							ga.type = 'text/javascript';
							ga.async = true;
							ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(ga, s);
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
							var ga = document.createElement('script');
							ga.type = 'text/javascript';
							ga.async = true;
							ga.src = ('https:' == document.location.protocol ? 'https://' : 'https://') + 'stats.g.doubleclick.net/dc.js';
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(ga, s);
						})();
						/*--------------------------------*/
						function getLibrariesLink(sel) {
							window.location = sel.value;
						}
						/*--------------------------------*/
						function getIphoneNav(sel) {
							window.location = sel.value;
						}
					</script>
				</footer>
		</body>

		</html>
<? }
	} ?>
