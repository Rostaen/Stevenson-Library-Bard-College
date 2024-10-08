<?php
require_once("template.php");
require_once("rss/rsslib.php");
$page = new Template();
$page->setTitle('Stevenson Library | Bard College');
$page->setMetaDesc('Explore the resources and services offered by the Bard College Library. Discover academic databases, research guides, and helpful tools to support your studies and scholarly pursuits at Bard College.');
$page->setOGTitle('Stevenson Library at Bard home page');
// print page header
$page->open();
?>
<div class="container">
	<div class="row">
		<div class="home-page-splash">
			<h1 id="home-page-motto">Research and Discover</h1>
			<!-- EBSCO Search Box Begins -->
			<form id="edsSearchForm" class="ebscohostCustomSearchBox" action="" onsubmit="return ebscoHostSearchGo(this);" method="post">
				<input id="ebscohostwindow" name="ebscohostwindow" value="1" type="hidden">
				<input id="ebscohosturl" name="ebscohosturl" value="https://search.ebscohost.com/login.aspx?direct=true&authtype=ip,guest&site=eds-live&scope=site&type=0&custid=s8999806&groupid=main&profid=eds&mode=and&lang=en" type="hidden">
				<input id="ebscohostsearchsrc" name="ebscohostsearchsrc" value="db" type="hidden">
				<input id="ebscohostsearchmode" name="ebscohostsearchmode" value="+" type="hidden">
				<input id="ebscohostkeywords" name="ebscohostkeywords" value="" type="hidden">
				<div class="input-group input-group-lg">
					<label class="title dn" for="ebscohostsearchtext">Search</label>
					<input class="form-control py=2 shadow search-bar" type="search" data-type="search" id="ebscohostsearchtext" name="ebscohostsearchtext" placeholder="What are you searching for?">
					<input type="submit" class="search-button ps-4 pe-4 fs-4" value="Search">
				</div>
				<div class="search-radio-container">
					<fieldset style="border:0; padding:0px;">
						<legend style="font-size:0px;">Search Everything Choices</legend>
						<div class="row">
							<div class="col-12 search-radio-item everything">
								<a href="https://search.ebscohost.com/login.aspx?direct=true&authtype=ip,guest&custid=s8999806&setup=1&groupid=main&profile=eds" target="_blank">Advanced Search ►</a>
							</div>
						</div>
					</fieldset>
				</div>
			</form>
		</div>
	</div>
</div>
</header>
<div class="bard-tp-boarder"></div>
<div class="container mt-5 home">
	<div class="row">
		<h2 class="hide-text">Attributes</h2>
		<div class="col-xl-9 col-md-7 col-sm-12 mb-12">
			<h3 class="hide-text">Find Resources</h3>
			<?php
			function homePageButton($id, $link, $newTab, $fontAwesomeIcon, $title)
			{
				$newPage = $newTab ? "target='_blank'" : "";
				echo "
						<a id=\"find-" . $id . "\" class=\"btn btn-secondary hp-button mb-1\" href=\"" . $link . "\" " . $newPage . ">
							<i class=\"fas fa-2x fa-" . $fontAwesomeIcon . "\"></i>
							<div class=\"word\">" . $title . "</div>
						</a>
					";
			}
			$homePageData = [
				["databases", "https://libguides.bard.edu/az.php", false, "database", "Databases"],
				["catalog", "https://library.bard.edu/", true, "book", "Catalog"],
				["borrowing", "https://libguides.bard.edu/ILL", true, "book-open", "Interlibrary Loan"],
				["journals", "http://ezprox.bard.edu/login?url=https://search.ebscohost.com/login.aspx?authtype=ip,guest&custid=s8999806&groupid=main&direct=true&db=edspub&profile=eds&plp=1", false, "newspaper", "Journals List"],
				["research-guides", "https://www.bard.edu/library/research-guides.php", true, "search", "Research Guides"],
				["archives", "https://www.bard.edu/archives/", true, "university", "Archives"],
				["commons", "https://digitalcommons.bard.edu/communities.html", true, "file-invoice", "Digital Commons"],
				["senior-projects", "https://digitalcommons.bard.edu/undergrad/", true, "graduation-cap", "Senior Projects"],
			];
			for ($x = 0; $x < count($homePageData); $x++)
				homePageButton($homePageData[$x][0], $homePageData[$x][1], $homePageData[$x][2], $homePageData[$x][3], $homePageData[$x][4]);
			?>
		</div>
		<div class="col-xl-3 col-md-5">
			<h4 class="card-title">Library Hours &amp; Events</h4>
			<div class="flex-center" style="padding-bottom: 10px;">
				<?php
				$today = date("Ymd");
				print "
					<iframe
						src=\"https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;dates=$today/$today&amp;height=400&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=bard.edu_d6g5jdl83neg9b1vglrfcm61as%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York\"
						style=\"border:0px solid #333;\"
						width=\"95%\" height=\"173\"
						frameborder=\"0\"
						scrolling=\"no\"
						id=\"calendarIframe\"
						name=\"calendarIframe\"
						title=\"Calendar of activities and hours for Stevenson Library\"
						allow=\"camera 'none'; microphone 'none';\">
					</iframe>
					";
				?>
			</div>
		</div>
	</div>
</div>
<div class="container mt-5">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-center">Stevenson News</h2>
			<hr>
			<div class="row">
				<?php
				$url = "https://blogs.bard.edu/library/feed/";
				echo RSS_Display($url, 8, false, true);
				?>
			</div>
		</div>
	</div>
	<div class="center-container mt-2">
		<a href="https://blogs.bard.edu/library/" target="_blank">
			<div class="btn btn-bard">
				Read More Stevenson Library News...
			</div>
		</a>
	</div>
</div>

<?php
$page->close();
?>

<script type="text/javascript">
	$(document).ready(function($) {
		var rssArt = $(".rss-article");

		//function checkEachRssArticl(){
		rssArt.each(function() {
			var pos = $(this).inlineStyle("left");
			console.log("Position RSS Article: " + parseInt(pos) + "\n");
			if (parseInt(pos) > parseInt(0)) {
				$(this).addClass("rss-article-left");
			} else {
				$(this).addClass("rss-article-right");
			}
		});
	});
</script>
<script src="https://support.ebsco.com/eit/scripts/ebscohostsearch.js" type="text/javascript"></script>
