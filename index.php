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
			<!-- WMS Search Bar Begins -->
			<div id="discovery-search-box" style="margin: 1em 0px 2em;">
				<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
				<style type="text/css">
					#discovery-search-box,
					#discovery-search-box * {
						box-sizing: border-box !important;
						margin: 0;
						padding: 0;
						text-align: left
					}

					#discovery-search-box .material-tab {
						display: inline-block;
						user-select: none;
						cursor: pointer;
						background-color: #545454;
						color: #fff;
						min-height: 2em;
						min-width: 1.5rem;
						padding: .5em;
						box-sizing: border-box;
						border-radius: .25em .25em 0 0;
						margin-right: .4em;
						z-index: 2
					}

					#discovery-search-form {
						position: 'relative';
						width: auto;
						padding: 1.25em 2em 2em;
						background-color: #f2f2f2 !important;
						color: #333 !important;
						z-index: 1;
						line-height: initial;
						border-radius: 0px 3px 3px 3px;
					}

					#discovery-search-box .material-tab.active-tab {
						background-color: #f2f2f2 !important;
						color: #333 !important
					}

					#discovery-index-container {
						position: relative;
						height: 3em;
						background-color: white;
						color: black
					}

					#discovery-index-container:after {
						content: '\f078';
						display: block;
						font-family: 'FontAwesome', sans-serif;
						position: absolute;
						top: 0;
						right: .5em;
						line-height: 3em;
						z-index: 5
					}

					#discovery-index-container #discovery-search-select {
						position: relative;
						z-index: 10;
						height: 100%;
						min-width: initial;
						font-size: 1em;
						padding: 0 2em 0 1em;
						background-color: transparent;
						border-top: 1px solid #ccc;
						border-right: 0;
						border-bottom: 1px solid #ccc;
						border-left: 1px solid #ccc;
						border-image: initial;
						border-radius: 0;
						-webkit-appearance: none;
						-moz-appearance: none
					}

					select::-ms-expand {
						display: none
					}
				</style>
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
				<script type="text/javascript">
					(function() {
						var d, w, tabList, h, form, input, urlBase, active, facets, v, r, rt, a, f, select, query;
						d = document;
						w = window;
						r = (function() {
							try {
								return w.self !== w.top;
							} catch (e) {
								return true;
							}
						})();
						rt = r ? '_blank' : '_self';
						a = d.getElementById('discovery-advanced-search');
						if (a) a.setAttribute('target', rt);
						tabList = d.querySelectorAll('#discovery-search-box span.material-tab');
						tabList = [].slice.call(tabList);
						h = function(e) {
							if (e.keyCode && e.keyCode !== 13) return;
							tabList.forEach(function(it) {
								it.className = 'material-tab';
							});
							this.className = 'material-tab active-tab';
						};
						tabList.forEach(function(tab) {
							tab.addEventListener('click', h);
							tab.addEventListener('keydown', h);
						});
						form = d.getElementById('discovery-search-form');
						input = d.getElementById('discovery-search');
						select = d.getElementById('discovery-search-select');
						urlBase = 'https://bardcollege.on.worldcat.org/external-search?queryString=#T#&clusterResults=on&groupVariantRecords=off&stickyFacetsChecked=on#F#';
						form.addEventListener('submit', function(e) {
							e.preventDefault();
							e.stopPropagation();
							f = '';
							active = d.querySelector('.material-tab.active-tab');
							if (active) {
								facets = JSON.parse(active.getAttribute('data-facets') || '[]');
								facets.forEach(function(facet) {
									console.log(facet);
									if (facet.key && facet.value && facet.value !== 'all') {
										f += '&' + facet.key + '=' + facet.value;
									}
								})
							}
							query = input.value;
							if (select) {
								var index = select.options[select.selectedIndex].value
								if (index !== 'kw') query = select.options[select.selectedIndex].value + ':' + query;
							}
							w.open(urlBase.replace('#T#', encodeURIComponent(query)).replace('#F#', f), rt);
						});
					})()
				</script>
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
				// ["catalog", "https://library.bard.edu/", true, "book", "Catalog"],
				["borrowing", "https://libguides.bard.edu/ILL", true, "book-open", "Interlibrary Loan"],
				["journals", "https://bardcollege.on.worldcat.org/atoztitles/search#journal", false, "newspaper", "Journals List"],
				["archives", "https://www.bard.edu/archives/", true, "university", "Archives"],
				["commons", "https://digitalcommons.bard.edu", true, "file-invoice", "Digital Commons"],
				["research-guides", "https://www.bard.edu/library/research-guides.php", true, "search", "Research Guides"],
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
