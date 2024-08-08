<?php
require_once("template.php");
$page = new Template();
$page->setTitle('Hours | Steven Library | Bard College');
$page->setMetaDesc('View the operating hours of Bard College Library. Find the library\'s opening and closing times, including weekend hours and holiday schedules, to plan your visit for research, studying, or accessing library resources.');
// print page header
$page->open();
function printHoursInfo($item)
{
	echo '<div class="col-6">' . $item . '</div>';
}
function printHoursBlock($title, $hoursArray)
{
	echo '<div class="mb-4"><h2>' . $title . '</h2><div class="row">';
	for ($x = 0; $x < count($hoursArray); $x++)
		printHoursInfo($hoursArray[$x]);
	echo '</div></div>';
}
$regularHours = ["Sunday", "10a - 1a", "Monday", "8a - 1a", "Tuesday", "8a - 1a", "Wednesday", "8a - 1a", "Thursday", "8a - 1a", "Friday", "8a - 10p", "Saturday", "10a - 10p"];
$referenceHours = ["Sunday", "12p - 5p", "Monday", "10a - 6p", "Tuesday", "10a - 6p", "Wednesday", "10a - 6p", "Thursday", "10a - 6p", "Friday", "10a - 4p", "Saturday", "N/A"];
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
			<?php
			printHoursBlock("Regular Semester Hours", $regularHours);
			printHoursBlock("Reference Desk Hours", $referenceHours);
			?>
		</div>
	</div>
</div>
<?php
$page->close();
?>
