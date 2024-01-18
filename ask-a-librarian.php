<?php
	require_once("template.php");
	require_once("inc/connect.php");

	$page = new Template();
	$page->setTitle('Ask a Librarian | Steven Library | Bard College');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>
</header>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   	function onSubmit1(token) {
   		document.getElementById("emailLibrarian").submit();
   	}
   	function onSubmit2(token) {
   		document.getElementById("researchConsult").submit();
   	}
   	/*function onSubmit3() {
   		//document.getElementById("writingAppointment").submit();
   		window.open("https://forms.gle/ir54Pbeiei6Zw7kL7");
   	}*/
 </script>

<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
	<h1 class="text-center">Ask a Librarian</h1>
	
	<hr>
	
	<div class="row">
		<div class="col-md-9">
			<p>Looking for a book or journal article? Need help getting started on a paper? Have a question about citing a source? We're here to help! Use any of the options below to contact us.</p>
			<div class="btn-group mb-4">
				<a href="#chat" class="btn btn-bard">Chat</a>
				<a href="#email" class="btn btn-bard">Ask a Question</a>
				<a href="#makeAResearch" class="btn btn-bard">Research Appointment</a>
				<a href="https://forms.gle/ir54Pbeiei6Zw7kL7" target="_blank" class="btn btn-bard">Writing Appointment</a>
				<a href="https://goo.gl/forms/6Aulkz1lnZGz6I3C2" target="_blank" class="btn btn-bard">Special Collections Access</a>
			</div>

			<div class="anchor" id="chat"></div>
			<div class="mb-4">
				<h2>Chat</h2>
				<p>
					Chat with the librarian during live help hours. It may take a few moments for us to respond, so please be patient. If you do not require immediate help, please email us below.
				</p>
				<div style="display: flex; justify-content: center; align-items: center;">
					<div class="needs-js"></div>
				</div>
			</div>

			<hr>

			<div class="anchor" id="email"></div>
			<div class="mb-4">
				<h2>Ask a Question</h2>
				<p>(Looking for someone specific? --- Go to <a href="contact.php">Contact Us</a>.)</p>
				<form name="email librarian" id="emailLibrarian" method="post" action="verify.php">
					<input type="hidden" value="order:Comments" name="sort" />
					<input type="hidden" value="Comments" name="print_config" />
					<input type="hidden" value="Contact Us Form - Stevenson Library Web Site" name="subject" />
					<input type="hidden" value="email,name,Comments" name="required" />
					<input type="hidden" name="cc_visitor" value="0" />
					<p><span class="bold">Please submit comments or questions</span>:</p>
					<p><em>Do <span class="bold">not</span> use this form for interlibrary loan or reserve requests</em></p>
					<div class="mb-2">
						<label for="yourName1">Your Name:</label> <input id="yourName1" name="name" size="50" />
					</div>
					<div class="mb-2">
						<label for="yourEmail1">Your Email:</label> <input id="yourEmail1" name="email" size="50" />
					</div>
					<div class="mb-3">
						<label for="quemments">Comments/Questions:</label><br>
						<textarea id="quemments" name="Comments" rows="3" cols="40"></textarea>
					</div>
					<button class="g-recaptcha btn btn-bard" 
				        data-sitekey="6LcJo0saAAAAAKoJGVij8YWYu54YrC44PBC_oAyG" 
				        data-callback='onSubmit1' 
				        data-action='submit' style="cursor: pointer;">Submit</button>
				</form>
			</div>

			<hr>

			<div class="anchor" id="makeAResearch"></div>
			<div class="info info-6">
				<h2>Schedule a Research Appointment</h2>
				<form name="research consultation" id="researchConsult" method="post" action="verify.php">
					<input type="hidden" value="order:name-rc,topic-rc,availability-rc,dateneeded-rc,Comments-rc" name="sort" />
					<input type="hidden" value="name-rc,topic-rc,availability-rc,dateneeded-rc,Comments-rc" name="print_config" />
					<input type="hidden" value="Schedule a Research Consultation Form - Stevenson Library Web Site" name="subject" />
					<input type="hidden" value="email,name-rc" name="required" />
					<input type="hidden" name="cc_visitor" value="0" />
					<em>Do <strong>not</strong> use this form for interlibrary loan or reserve requests</em>
					<div class="mb-2">
						<label for="name-rc">Your Name:</label> <input id="name-rc" name="name-rc" size="50" />
					</div>
					<div class="mb-2">
						<label for="email2">Your Email:</label> <input id="email2" name="email" size="50" />
					</div>
					<p><em>Please indicate the topic or subject which you are interested in researching. Try writing a sentence to describe it.</em></p>
					<div class="mb-2">
						<label for="topic-rc">Your Topic:</label> <input id="topic-rc" name="topic-rc" size="50" />
					</div>
					<p><em>Please provide some times and dates for when you are available to meet with a librarian. Most days from 9am - 5pm are best, although other accommodations can be made.</em></p>
					<div class="mb-2">
						<label for="availability-rc">Your Availability:</label><br><textarea id="availability-rc" name="availability-rc" rows="3" cols="40" ></textarea>
					</div>
					<p><em>Please provide a date by which your research or paper must be completed.</em></p>
					<div class="mb-2">
						<label for="dateneeded-rc">Date Needed By:</label> <input type="date" id="dateneeded-rc" name="dateneeded-rc" size="50" />
					</div>
					<div class="mb-2">
						<label for="bestcontact-rc">What's the best way to contact you?</label> <input id="bestcontact-rc" name="bestcontact-rc" />
					</div>
					<p><em>Provide any additional information or questions you might have in this space.</em></p>
					<div class="mb-2">
						<label for="Comments-rc">Comments/Questions:</label><br><textarea id="Comments-rc" name="Comments-rc" rows="3" cols="40" ></textarea>
					</div>
					<!-- <div id="recaptcha2" class="recaptcha-style"></div>
					<input type="submit" name="Submit" value="Submit" class="recaptcha-style"/> -->
					<button class="g-recaptcha btn btn-bard" 
				        data-sitekey="6LcJo0saAAAAAKoJGVij8YWYu54YrC44PBC_oAyG" 
				        data-callback='onSubmit2' 
				        data-action='submit' style="cursor: pointer;">Submit
				    </button>
				</form>
			</div>

			<hr>

			<div class="anchor" id="requestAWritingAppointment"></div>
			<div class=" info info-7">
				<h2>Schedule a Writing Appointment</h2>
				<p>To schedule a writing appointment with Jane Smith, click the button below to fill out a Writing Appointment request form.</p>
				<a href="https://forms.gle/ir54Pbeiei6Zw7kL7" target="_blank">
					<button class="btn btn-bard">
						Request a Writing Appointment
					</button>
				</a>
			</div>
		</div>

		<!-- Right Side Bar -->

		<div class="col-md-3">
			<h2 class="hide-text">Ask a Lib Sidebar</h2>
			<div>
				<h3>Contact Us</h3>
				<ul>
					<li>Main Number: 845.758.7148</li>
					<li>Reference Desk: 845.758.7281</li>
					<li>Reserves Desk: 845.758.7140</li>
					<li><a href="contact.php">Stevenson Library Staff Directory</a></li>
				</ul>
			</div>
			<hr>
			<div>
				<h3>Writing Support</h3>
				<?php
					$results = fetchStaffData();

					function librarianCard ($name, $room, $number, $email){
						$areaCode = "845.";
						$emailURL = "@bard.edu";
						echo "<p><span class=\"fw-bold\">".$name."</span><br />".$room." <br />".$areaCode.$number."<br> ".$email.$emailURL."</p>";
					}
					foreach ($results as $row) {
						if($row['first'] == "Jane" && $row['last'] == "Smith"){
							$name = $row['first']." ".$row['last'];
							$location = findOffice($row['floor']);
							librarianCard($name, $location, $row['phone'], $row['email']);
						}
					}
				?>
			</div>
			<hr>
			<div>
				<h3>Reference Librarians</h3>
				<?php
					foreach ($results as $row) {
						if($row['ref_librarian'] == 1){
							$name = $row['first']." ".$row['last'];
							$location = findOffice($row['floor']);
							librarianCard($name, $location, $row['phone'], $row['email']);
						}
					}
				?>
			</div>
			<hr>
			<div>
				<h3>Archives</h3>
				<?php 
					foreach ($results as $row) {
						if($row['first'] == "Helene" && $row['last'] == "Tieger"){
							$name = $row['first']." ".$row['last'];
							$location = findOffice($row['floor']);
							librarianCard($name, $location, $row['phone'], $row['email']);
						}
					}
				?>
			</div>
		</div>
	</div>
</div>

<?php
	mysql_close($Link);
	$page->close();
?>
<script type="text/javascript">
 	(function() {
		var x = document.createElement("script"); x.type = "text/javascript"; x.async = true;
		x.src = (document.location.protocol === "https:" ? "https://" : "http://") + "us.libraryh3lp.com/js/libraryh3lp.js?4748";
		var y = document.getElementsByTagName("script")[0]; y.parentNode.insertBefore(x, y);
	})();
	$("#dateneeded-rc").datepicker();
</script>