<?php
require_once("template.php");
require_once("rss/rsslib.php");
include_once("page-functions/about-functions.php");

$page = new Template();
$page->setTitle('Stevenson Library | Bard College');
$page->setMetaDesc('Learn about the Bard College Library, its mission, history, and commitment to supporting academic excellence. Discover our dedicated staff, innovative programs, and the role of the library within the Bard College community.');

// print page header
$page->open();

include_once("search-box.php");
?>
</header>
<div class="mt-4 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="fs-2 text-uppercase">Our Mission</h1>
	<hr>
	<img src="https://www.bard.edu/library/images/about/slide-2.jpg" alt="library sketch" style="float:right; width: 500px;">
	<p>We advance inquiry, creativity, collaboration, and a love of reading and learning in the Bard community through our diverse collections, expert staff, inclusive programs, and welcoming spaces. We invite you to engage with the library in ways that help you thrive, learn, and grow as thinkers, writers, researchers, and citizens.</p>
	<p>As partners in the intellectual life of the college, we</p>
	<ul>
		<li>Develop accessible, relevant, and inclusive collections that advance teaching, learning, and research.</li>
		<li>Embrace an organizational culture that encourages collaboration, staff development, and experimentation.</li>
		<li>Offer robust programs and services that foster inclusivity, belonging, and student success.</li>
		<li>Maintain accessible, flexible, and user-friendly spaces and technology.</li>
	</ul>

	<div class="btn-group" style="display: flex;">
		<?php
		for ($x = 0; $x < count($buttonLinks); $x++) {
			printButtons($buttonLinks[$x][0], $buttonLinks[$x][1]);
		}
		?>
	</div>

	<h1 class="fs-2 text-uppercase mt-4">Bard Network Libraries</h1>
	<hr>
	<?php
	for ($x = 0; $x < count($networkLibrariesData); $x++) {
		printNetworkLibrariesInfo($networkLibrariesData[$x][0], $networkLibrariesData[$x][1]);
	}
	?>
</div>

<?php
$page->close();
?>
