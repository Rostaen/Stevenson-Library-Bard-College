<?php
require_once("template.php");

$page = new Template();
$page->setTitle('Student Jobs | Steven Library | Bard College');
$page->setMetaDesc('');

// print page header
$page->open();

?>
</header>

<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="text-center">Student Jobs</h1>

	<hr>

	<div class="row">
		<div class=""><!-- col-md-9 -->
			<h2>What kind of student jobs are there in the library?</h2>
			<p>Most of the students in the library work in Circulation; at the circulation or reserves desk, or shelving books. Students are also hired in Inter-Library Loan, Cataloging, Periodicals, and Archives, but this FAQ is mostly geared towards Circulation.</p>

			<hr>

			<h2>How do I get a job in the library?</h2>
			<h3>Applications</h3>
			<p>We usually like to hire students as far in advance as possible, since the library has to be running full steam on the first day of classes. In practice that means we ask for applications at the end of each semester. You can find applications online at <a href="https://bard.joinhandshake.com/login" target="_blank">Handshake</a> for many of the positions open.</p>

			<h3>Interview</h3>
			<p>Once you have submitted an application, we will ask you to stop by for an interview. In the interview, we will discuss the job and our expectations, and answer any questions you might have. In addition, we will get your class schedule and preferences (extremely important for deciding who works when!).</p>

			<h3>Next Steps</h3>
			<p>When we are making the schedule, we give first priority to students who already work here. After that, we will look at your schedule to see if there is a good place to fit you in. If our schedules do match, we send you an email and a draft schedule and go from there! If not, we will send an email explaining why we are unable to hire you. It really depends almost entirely on your schedule!</p>

			<hr>

			<h2>What if there are no jobs posted and the semester has started?</h2>
			<p>While it is somewhat unlikely that we would have any last minute openings, you can always come in and check! We welcome inquiries at all times.</p>
		</div>
	</div>
</div>

<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);


$page->close();
?>
