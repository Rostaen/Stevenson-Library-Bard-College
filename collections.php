<?php
require_once("template.php");
require_once("rss/rsslib.php");
require_once("page-functions/collections-functions.php");

$page = new Template();
$page->setTitle('Collections | Bard College');
$page->setMetaDesc('Explore the diverse collections at Bard College Library, spanning various subjects, formats, and disciplines. Discover rare books, manuscripts, digital archives, and more, curated to support academic research and intellectual inquiry.');

// print page header
$page->open();

// Collections data array moved to collections-functions.php

?>

</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="text-center">Collections</h1>
	<hr>
	<div class="row">
		<?php
		for ($x = 0; $x < count($collectionData); $x++)
			collectionCard($collectionData[$x][0], $collectionData[$x][1], $collectionData[$x][2]);
		?>
	</div>
</div>

<?php
$page->close();
?>
