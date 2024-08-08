<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("template.php");
require_once('inc/connect.php');
require_once('page-functions/contact-functions.php');

$page = new Template();
$page->setTitle('Contact | Stevenson Library | Bard College');
$page->setMetaDesc('Contact Bard College Library for inquiries, assistance, and support. Find contact information for library staff, including phone numbers, email addresses, and office locations, to help you with your research and library-related questions.');

// print page header
$page->open();
?>
</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container contact">
	<h1 class="text-center">Contact Us</h1>
	<hr>
	<div class="row">
		<div class="col-lg-6 col-sm-12">
			<p>
				Looking to speak with someone at the Stevenson Library? Have a first or last name but not sure what their contact information is? Below, you'll find important phone numbers to contact the library directly or you can speak with faculty/staff directly.
			</p>
			<p>
				Main Number: 845.758.7148
			</p>
			<p>
				Reference Desk: 845.758.7281
			</p>
			<p>
				Reserves Desk: 845.758.7140
			</p>
		</div>
		<div class="col-lg-6 col-sm-12">
			<div style="position: relative; width: 100%; overflow: hidden; padding-top: 56.25%;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2963.9597774716417!2d-73.90862618430424!3d42.022595264337795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd0a6e755fdcff%3A0x8b07bdb08ac3d464!2s1+Library+Rd%2C+Annandale-On-Hudson%2C+NY+12504!5e0!3m2!1sen!2sus!4v1524168159670" frameborder="0" style="border: none; position:absolute; top: 0; left: 0; right: 0; bottom: 0; width: 100%; height: 100%;"></iframe>
			</div>
		</div>
	</div>
	<div>
		<h2 class="text-center mt-4 mb-4">Stevenson Library Staff Directory</h2>
		<div class="contact-list row">
			<?php

			try {
				// Setting up database connection
				$result = fetchStaffData();

				// If result is true and connection made, output staff cards
				if ($result) {
					// Looping through database query
					foreach ($result as $row) {
						$name = $row['first'] . " " . $row['last'];
						$title = $row['title'];
						$location = $row['floor'];
						$phone = $row['phone'];
						$email = $row['email'];
						$image = $row['image'];
						$refLib = $row['ref_librarian'];

						// calling staff card function with each database row
						staffIdCard($image, $name, $title, $refLib, $location, $phone, $email);
					}
				}
			} catch (PDOException $e) {
				echo '<p>Database Error: ' . $e->getMessage() . '</p>';
				error_log('PDOException: ' . $e->getMessage());
			}
			?>
		</div>
	</div>
</div>
<?php
$page->close();
?>
