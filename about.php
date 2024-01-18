<?php
    require_once("template.php");
	require_once("rss/rsslib.php");

	$page = new Template();
	$page->setTitle('Stevenson Library | Bard College');
	$page->setMetaKW('stevenson library, library stevenson, bard college library, stevenson bard college library, stevenson college library, stevenson bard library, bard library');
	$page->setMetaDesc('Stevenson library at Bard College serving the students and faculty needs for higher education, seven days a week.');

	// print page header
	$page->open();
?>
</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="text-center">About the Library</h1>
	<hr>
	<div class="row">
		<div class="col-lg-4">
			<p>
				Stevenson Library, built with the generous support and encouragement of Charles P. Stevenson, Jr., is Bard’s main library. Located on the <a href="https://www.bard.edu/campus/maps/">Annandale Campus</a>, it consists of three buildings: Hoffman, built in 1893; Kellogg added in 1973; (read more about the <a href="https://www.bard.edu/library/pdfs/stevenson.pdf" target="_blank">Stevenson addition</a>), designed by Robert Venturi , which opened in 1993.
			</p>
			<ul>
			    <a href="https://www.levyinstitute.org/"><li>The Levy Economics Institute Library (Annandale)</li></a>
			    <a href="https://ccs.bard.edu/research-center"><li>Center for Curatorial Studies Library (Annandale)</li></a>
			    <a href="https://www.bgc.bard.edu/research/library.html"><li>Bard  Graduate Center for Studies in the Decorative Arts, Design and Culture Library (New York City)</li></a>
			</ul>
		</div>
		<div class="col-lg-8">
			<img class="w-100" src="https://www.bard.edu/library/images/about/slide-1.jpg" alt= "library exterior">
		</div>
	</div>
	<div class="row">
		<div class="col-lg-5">
			<img class="w-100" src="https://www.bard.edu/library/images/about/slide-2.jpg" alt= "library sketch">
		</div>
		<div class="col-lg-7">
			<p>
				Our mission is to be an active partner in the intellectual work of Bard's  students, faculty, and staff. We strive to develop collections, services, and  partnerships that help all users become more resourceful, more independent and  more original scholars. We take a campus leadership role in thoughtfully  applying emerging media to the task of turning information into knowledge. Every day we work at  helping students become more skilled and productive. Every day we see students  gain confidence from working with the staff and the Library's powerful  resources. It is our job - and our delight - to actively promote this kind of  collaboration.
			</p>
		</div>
	</div>
	<p>
		We are involved with a variety of resource sharing relationships (<a href="https://www.connectny.info/">ConnectNY</a>, the <a href="https://bard.illiad.oclc.org/illiad/logon.html">Center for Research Libraries</a>, the <a href="http://www.oberlingroup.org/">Oberlin Group  Libraries</a> and <a href="https://www.senylrc.org/member_directory">Southeastern New York  Library Resources Council</a>) with regional and national partners designed to bring considerably expanded collections of books, journals and digital resources to the campus community.
	</p>
</div>



<?php
	$page->close();
?>