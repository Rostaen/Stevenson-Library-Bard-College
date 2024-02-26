<?php
require_once("template.php");
require_once('inc/connect.php');
require_once('research-guides-functions.php');
// Setting up page information
$page = new Template();
$page->setTitle('Research Guides | Steven Library | Bard College');
$page->setMetaDesc('Explore a curated collection of research guides covering diverse topics at Bard College Library. Access valuable resources and expert guidance to enhance your academic research journey.');
// print page header
$page->open();
?>

</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
    <h1>Research Guides</h1>
    <p>The following are guides to help you find books, articles and other materials for your research in the subjects areas listed below. These guides are intended to give you a place to start. Please remember that sometimes your research will lead you down avenues that are outside the field of your original inquiry. Feel free to contact the librarian listed at the top of each page for further help. Faculty members wishing to have research guides created for their classes or general subject areas should contact their <a href="https://libguides.bard.edu/faculty">divisional liaisons</a>.</p>
    <div>
        <div class="btn-group left">
            <a href="#subject" class="btn btn-bard">Subject</a>
            <a href="#course" class="btn btn-bard">Course</a>
            <a href="#howto" class="btn btn-bard">How-to</a>
            <a href="#general" class="btn btn-bard">General</a>
        </div>
        <div class="right">
            <a href="https://libguides.bard.edu/az.php" class="btn btn-primary col-2" style="display: inline !important; padding: 0.375rem 0.75rem;">A-Z Databases</a>
        </div>
    </div>
    <div class="clear mb-4"></div>

    <?php
    printSection("subject", "Subject");
    printSection("course", "Course");
    printSection("howto", "How-to");
    printSection("general", "General");
    ?>
</div>
<?php
$page->close();
?>
