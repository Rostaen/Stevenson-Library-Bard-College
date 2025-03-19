<?php
require_once("template.php");

$page = new Template();
$page->setTitle('Policies | Steven Library | Bard College');
$page->setMetaDesc('');

// print page header
$page->open();

?>
</header>

<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="text-center">Policies</h1>

	<hr>

	<div class="row">
		<div class=""><!-- col-md-9 -->
			<h2>Bard College Copyright Policy</h2>
			<p><a href="https://www.bard.edu/wwwmedia/files/99971503/1/Bard%20College%20Copyright%20Policy%208%2028%202024.pdf" target="_blank">Bard College Copyright and Fair Use Policy</a></p>
			<p><a href="https://tools.bard.edu/wwwmedia/files/1513181/2/Bard_College_Copyright_Notification_and_Potential_Penalties_for_Infringement.pdf" target="_blank">Bard College Copyright Notification and Potential Penalties for Infringement</a></p>

			<hr>

			<h2>Bard College Computing Policies</h2>
			<p><a href="https://www.bard.edu/it/computing-policies/" target="_blank">Bard College IT Policies</a></p>
		</div>
	</div>
</div>

<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);


$page->close();
?>
