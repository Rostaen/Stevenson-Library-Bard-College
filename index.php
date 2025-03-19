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

include_once("search-box.php");
?>
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
						width=\"300\" height=\"180\"
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
