<?php
    require_once("template.php");
	require_once("rss/rsslib.php");

	$page = new Template();
	$page->setTitle('Hours | Steven Library | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>
</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="text-center">Hours</h1>
	<hr>
	<div class="row">
		<div class="col-md-8">
			<div class="" style="padding-bottom: 10px;">
				<?php
					$today = date("Ymd");
					print "
					<iframe 
						src=\"https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showNav=1&amp;showDate=0&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;dates=$today/$today&amp;height=400&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=bard.edu_d6g5jdl83neg9b1vglrfcm61as%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York\" 
						style=\"border:0px solid #333; width: 100%; height: 380px;\" 
						width=\"\" height=\"\" 
						frameborder=\"0\" 
						scrolling=\"no\" 
						id=\"calendarIframe\" 
						name=\"calendarIframe\">
					</iframe>						
					";
				?>
			</div>
			<div class="info-block">
				<p>Library materials can also be returned at any time using the 24-hour book drop just inside the main entrance to the Stevenson library.</p>
				<img src="https://www.bard.edu/library/images/hours/book depository.jpg" alt="Drop Box Location" style="width: 60% !important;">			
			</div>
		</div>
		<div class="col-md-4">
			<div class="mb-4">
				<h2>Regular Semester Hours</h2>
				<div class="row">
					<div class="col-6">Sunday</div>
					<div class="col-6">10a - 1a</div>
					<div class="col-6">Monday</div>
					<div class="col-6">8a - 1a</div>
					<div class="col-6">Tuesday</div>
					<div class="col-6">8a - 1a</div>
					<div class="col-6">Wednesday</div>
					<div class="col-6">8a - 1a</div>
					<div class="col-6">Thursday</div>
					<div class="col-6">8a - 1a</div>
					<div class="col-6">Friday</div>
					<div class="col-6">8a - 10p</div>
					<div class="col-6">Saturday</div>
					<div class="col-6">10a - 10p</div>
				</div>
			</div>
			
			<div class="mb-4">
				<h2>Reference Desk Hours</h2>
				<div class="row">
					<div class="col-6">Sunday</div>
					<div class="col-6">12p - 5p</div>
					<div class="col-6">Monday</div>
					<div class="col-6">10a - 6p</div>
					<div class="col-6">Tuesday</div>
					<div class="col-6">10a - 6p</div>
					<div class="col-6">Wednesday</div>
					<div class="col-6">10a - 6p</div>
					<div class="col-6">Thursday</div>
					<div class="col-6">10a - 6p</div>
					<div class="col-6">Friday</div>
					<div class="col-6">10a - 4p</div>
					<div class="col-6">Saturday</div>
					<div class="col-6">N/A</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
	$page->close();
?>