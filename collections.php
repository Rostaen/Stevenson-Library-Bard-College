<?php
	require_once("template.php");
	require_once("rss/rsslib.php");

	$page = new Template();
	$page->setTitle('Collections | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>
</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="text-center">Collections</h1>
	<hr>
	<div class="row">
		<?php
			function collectionCard ($title, $text, $link){
				echo "
					<div class=\"col-lg-4 col-sm-6 mb-4\">
						<div class=\"card-body\">
							<h2 class=\"card-title\">".$title."</h2>
							<hr>
							<p class=\"card-text\">
								".$text."
							</p>
							<a class=\"btn btn-bard\" href=\"".$link."\">".$title."</a>
						</div>
					</div>
				";
			}

			collectionCard("<!-- Archives &amp;  -->Special Collections", "A selection of physical, digital, and exhibits here at the Stevenson library and around campus.", "https://libguides.bard.edu/collections/special-collections");
			collectionCard("Audio-Visual", "Stevenson Library houses an assortment of CDs, DVDs, videos, cassettes and other media.", "https://libguides.bard.edu/collections/audio-visual");
			collectionCard("Browsing", "The Browsing Collection consists of recreational and popular reading.", "https://libguides.bard.edu/collections/browsing");
			collectionCard("Digital Commons", "Digital Commons provides a platform for publishing and distributing scholarly content generated by the Bard College community.", "https://libguides.bard.edu/collections/digital-commons");
			collectionCard("eBooks", "A variety of sources for any and all eBooks around the web.", "https://libguides.bard.edu/collections/ebooks");
			collectionCard("Journals", "1500 titles in paper and another 20,000+ available online, our collection runs the gamut.", "https://libguides.bard.edu/collections/journals");
			collectionCard("Levy Library", "The Levy Institute Library houses a collection of nearly 13,000 books on economics, finance, and banking.", "https://libguides.bard.edu/collections/levy-library");
			collectionCard("Senior Projects", "The Senior Project is an original, individual, specialized project growing out of the student's cumulative academic experiences.", "https://libguides.bard.edu/collections/senior-projects");
			collectionCard("The James Collection", "A collection of books from the James Collection.", "https://libguides.bard.edu/collections/james-collection");
			// collectionCard("", "", "");

		?>
	</div>
</div>



<?php
	$page->close();
?>