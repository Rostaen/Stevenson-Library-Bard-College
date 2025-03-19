<?php
require_once("template.php");

$page = new Template();
$page->setTitle('Accessibilty | Steven Library | Bard College');
$page->setMetaDesc('');

// print page header
$page->open();

?>
</header>

<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="text-center">Ask a Librarian</h1>

	<hr>

	<div class="row">
		<div class=""><!-- col-md-9 -->
			<p>Looking for a book or journal article? Need help getting started on a paper? Have a question about citing a source? We're here to help! Use any of the options below to contact us.</p>
			<div class="btn-group mb-4">
				<a href="#services" class="btn btn-bard">Providing Services</a>
				<a href="#facilities" class="btn btn-bard">Facilities</a>
				<a href="#collections" class="btn btn-bard">Collections, Resources, and Services</a>
			</div>

			<div class="anchor" id="services"></div>
			<div class="mb-4">
				<h2>Providing Services</h2>
				<p>
					At Stevenson Library we are committed to providing library collections, facilities, tools, resources and services to all members of our community, including people of all abilities. We strive to choose, purchase and develop resources that are accessible and in line with the Americans with Disabilities Act.
				</p>
				<p>
					Our patrons are welcome to <a href="https://www.bard.edu/library/contact.php">contact us</a> with questions regarding access to our building, collection and resources.
				</p>
			</div>

			<hr>

			<div class="anchor" id="facilities"></div>
			<div class="mb-4">
				<h2>Facilities</h2>
				<p>Stevenson Library has two accessible entries:</p>
				<ul>
					<li>The front entrance off Richard D. Griffiths Main Campus Walk, open library hours.</li>
					<li>The back entrance off Library Road, accessible by ringing the doorbell or calling the library's front desk at extension 7148. This entrance provides access through library offices to the elevator. Contact phone numbers are posted by each door.</li>
				</ul>
				<p>Three accessible parking spaces are located near the back entrance of the library.</p>
				<p>Stevenson Library has publicly accessible restrooms on the third floor.</p>
				<p>An elevator that runs from the Lower Level to the top floor is available in the western section of the building, and changes in floor levels on each of our upper four stories are ramped.</p>
				<p>Contact numbers for help are listed on the ends of shelves on every floor.</p>
			</div>

			<hr>

			<div class="anchor" id="collections"></div>
			<div class="info info-6">
				<h2>Collections, Resources, and Services</h2>
				<h3>Website</h3>
				<p>Stevenson Library recognizes the importance of ensuring our website is accessible to everyone. To that end we have incorporated design best practices into the <a href="http://www.bard.edu/library">website</a> so that the pages are accessible to people with physical and visual impairments, including those who need screen readers, those who are color blind and those who cannot use a mouse. We have tested our content with the <a href="https://wave.webaim.org/" target="_blank">WAVE Web Accessibility Evaluation Tool</a> and Google's Accessibility Extensions to ensure ADA compliance. We are committed to making our content accessible to all individuals and are continually working to increase accessibility and usability.</p>
				<p>Some documents on the Stevenson Library and partner websites are in portable document format (PDF). For the best experience viewing these files, please download the latest version of Adobe Acrobat Reader, which is available for free at the <a href="https://acrobat.adobe.com/us/en/acrobat/pdf-reader.html" target="_blank">Adobe</a> website.</p>
				<p><a href="https://www.iii.com/accessibility/" target="_blank">Catalog</a> (from Innovative Interfaces, Inc.)</p>

				<div class="row">
					<div class="col-md-4">
						<h3>E-book Collections</h3>
						<p><a href="https://support.proquest.com/articledetail?id=kA140000000PDsICAW" target="_blank">from ProQuest</a></p>
						<p><a href="https://support.jstor.org/hc/en-us/sections/115001473128-Accessibility" target="_blank">from JSTOR</a></p>
						<p><a href="https://www.humanitiesebook.org/heb-and-accessibility/" target="_blank">from ACLS Humanities E-book Project</a></p>
						<p>From Columbia University Press</p>
						<p><a href="https://www.hathitrust.org/accessibility">HathiTrust</a></p>
						<h3>Services</h3>
						<p><a href="https://policies.oclc.org/en/accessibility.html" target="_blank">ILLiad</a> (OCLC)</p>
						<p><a href="https://www.iii.com/accessibility/" target="_blank">ConnectNY</a> (Innovative Interfaces Inc.)</p>
					</div>
					<div class="col-md-4">
						<h3>Databases</h3>
						<p><a href="https://www.ebsco.com/technology/accessibility" target="_blank">from EBSCO</a></p>
						<p><a href="https://support.jstor.org/hc/en-us/sections/115001473128-Accessibility" target="_blank">from JSTOR</a></p>
						<p><a href="https://support.proquest.com/articledetail?id=kA140000000PDsICAW" target="_blank">from ProQuest</a></p>
						<p><a href="https://muse.jhu.edu/accessibility" target="_blank">from Project Muse</a></p>
						<p><a href="https://www.artstor.org/accessibility/" target="_blank">from Artstor</a></p>
						<p><a href="https://policies.oclc.org/en/accessibility.html" target="_blank">from WorldCat (OCLC)</a></p>
						<p><a href="https://academic.oup.com/journals/pages/about_us/legal/accessibility" target="_blank">from Oxford University Press</a></p>
						<p><a href="https://www.bepress.com/accessibility-statement/" target="_blank">Senior Project Archive / Digital Commons</a> (from BePress)</p>
					</div>
					<div class="col-md-4">
						<h3>Tools</h3>
						<p>The library has a number of desk lamps, magnifying glasses, and stress-busting kits that may be checked out from the Reserves Desk. Folding lawn chairs may be checked out at the Reference Desk.</p>
					</div>
				</div>

				<h3>Scanning</h3>

				<p><b>KIC Scanner</b> from DSLG, located on the first floor of the library, is a self-service digitization station. Users may scan copies of documents, without any charge to their printing allowance, and send a searchable pdf of that document to their email address. Those documents may be uploaded to DSLG's MyDocs app, with its built-in text-to-speech capability for storage and use.</p>

				<p>The library has six<b> Canon ImageRunner Advance 45511 printer/copier/scanners:</b></p>

				<ul>
					<li>four on the first floor</li>
					<li>one on the second floor in Room 206</li>
					<li>one by the elevator on the 3rd floor.</li>
				</ul>

				<p>Documents may be scanned through the feeder or on the glass and scanned at image qualities ranging up to 600dpi for conversion.</p>

				<p>Bard <a href="https://www.sensusaccess.com/web3/bard/" target="_blank">SensusAccess</a> is an on-demand file conversion service that helps <b>Bard students, staff, and faculty</b> convert digital materials into alternate formats, such as audio books, e-books, digital large-print and Braille. This service improves the accessibility and readability of your digital documents.</p>
			</div>
		</div>
	</div>
</div>

<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);


$page->close();
?>
