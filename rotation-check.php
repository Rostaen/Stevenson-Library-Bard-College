<?php
require_once("template.php");
require_once("inc/connect.php");
require_once("page-functions/rotation-functions.php");

$page = new Template();
$page->setTitle('Rotation Checks | Stevenson Library | Bard');

// grabbing librarian rotation info
$emailRotation = fetchRotation("emailrotation");
$appointmentRotation = fetchRotation("appointment_rotation");

// print page header
$page->open();
?>
</header>
<script src='https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit' async defer></script>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container verification">
    <h1 class="text-center">Rotation Checks</h1>
    <div class="content-inner">
        <div class="row">
            <h4 class="col-3 columnHeader">Name</h4>
            <h4 class="col-3 columnHeader">Email Rotation</h4>
            <h4 class="col-3 columnHeader">Appnt. Rotation</h4>
            <h4 class="col-3 columnHeader">Vacation</h4>
            <?php
            printLibrarianCounts($emailRotation, $appointmentRotation);
            ?>
        </div>
    </div>
</div>
<?php
$page->close();
?>
