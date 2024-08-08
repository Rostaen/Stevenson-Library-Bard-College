<?php
require_once("template.php");
require_once("rss/rsslib.php");
require_once("page-functions/index-functions.php");

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
			<!-- WMS Search Bar Begins -->
			<!-- WMS Styles moved to 'wmsStyles.css' and JavaScript moved to 'wmsJS.js' to condense space -->
			<div id="discovery-search-box" style="margin: 1em 0px 2em;">
				<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
				<link rel="stylesheet" type="text/css" href="wmsStyles.css">
				<div style="display: flex; font-size: 1.1em; box-sizing: border-box; text-align: center;"><span class="material-tab active-tab" data-facets="[{&quot;key&quot;:&quot;format&quot;,&quot;value&quot;:&quot;all&quot;}]" tabindex="0">Everything</span><span class="material-tab" data-facets="[{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Book::book_digital&quot;},{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Book::book_printbook&quot;},{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Book::book_largeprint&quot;},{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Book::book_braille&quot;},{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Book::book_continuing&quot;}]" tabindex="0">Books</span><span class="material-tab" data-facets="[{&quot;key&quot;:&quot;format&quot;,&quot;value&quot;:&quot;Jrnl&quot;}]" tabindex="0">Journals</span><span class="material-tab" data-facets="[{&quot;key&quot;:&quot;subformat&quot;,&quot;value&quot;:&quot;Artchap::artchap_artcl&quot;}]" tabindex="0">Articles</span></div>
				<form id="discovery-search-form"><label for="discovery-search" style="display: inline-block; font-size: 1.3em; font-weight: normal; margin-bottom: 0.5em;">Research and Discover</label>
					<div style="display: flex; width: 100%;">
						<div style="display: flex; flex-grow: 1;">
							<div id="discovery-index-container"><select id="discovery-search-select">
									<option value="kw" selected="">Keyword</option>
									<option value="au">Author</option>
									<option value="su">Subject</option>
									<option value="ti">Title</option>
								</select></div><input type="text" id="discovery-search" required="" autocomplete="off" style="display: inline-block; width: 100%; height: 3em; font-size: 1em; padding: 0px 0.5em; margin-bottom: 0.5em; color: black; background-color: white; border: 1px solid rgb(204, 204, 204); box-shadow: none;">
						</div>
						<div><input type="submit" value="Search" style="padding: 0.75em 1.5em; font-size: 1em; width: auto; height: 3em; min-width: 8em; color: rgb(255, 255, 255); background-color: rgb(185, 1, 36); margin: 0px 0px 0px 0.5em; border-radius: 0.25em; border: none; background-image: none; float: none; text-align: center;"></div>
					</div>
					<div style="display: flex; justify-content: space-between;">
						<p style="flex-basis: 50%; flex-grow: 1; font-size: 1.1em;">What are you looking for?</p>
						<p style="flex-basis: 100%; font-size: 0.9em; text-align: right;"><a id="discovery-advanced-search" href="https://bardcollege.on.worldcat.org/advancedsearch" target="_blank" style="text-decoration: underline; color: rgb(51, 51, 51);">Advanced Search</a></p>
					</div>
				</form>
				<script src="wmsJS.js" type="text/javascript"></script>
			</div>
			<!-- WMS Search Bar Ends -->
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
			$results = getButtons();
			foreach ($results as $row)
				homePageButton($row['nameID'], $row['url'], $row['newTab'], $row['icon'], $row['title']);
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
