<?php
require_once("template.php");
require_once('inc/connect.php');
$page = new Template();
$page->setTitle('Research Guides | Steven Library | Bard College');
$page->setMetaKW('');
$page->setMetaDesc('');
// print page header
$page->open();
function printButton($url, $name)
{
    echo '<a href="https://libguides.bard.edu/' . $url . '" class="col-4">
        <div class="guides-item btn btn-bard p-2 col-12 fs-5 mb-3">
            ' . $name . '
        </div>
    </a>';
}
function fetchSection($guideType)
{
    $pdo = connectToDatabase();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $table = 'research_guides';
    $queryTarget = 'name';
    $sql = "SELECT url, name FROM $table WHERE course_type = '$guideType' ORDER BY $queryTarget";

    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function printSection($guideType, $title)
{
    echo '<div class="anchor" id="' . $guideType . '"></div>
    <h2>' . $title . '</h2>
    <div class="row mb-4">';
    try {
        $results = fetchSection($guideType);
        if ($results)
            foreach ($results as $item)
                printButton($item['url'], $item['name']);
        else
            echo "<h3><b>This section is coming soon!</b></h3>";
    } catch (PDOException $e) {
        echo '<p>Database Error: ' . $e->getMessage() . '</p>';
        error_log('PDOException: ' . $e->getMessage());
    }
    echo '</div>';
}
?>

</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
    <h1>Research Guides</h1>
    <p>The following are guides to help you find books, articles and other materials for your research in the subjects areas listed below. These guides are intended to give you a place to start. Please remember that sometimes your research will lead you down avenues that are outside the field of your original inquiry. Feel free to contact the librarian listed at the top of each page for further help. Faculty members wishing to have research guides created for their classes or general subject areas should contact their <a href="https://libguides.bard.edu/faculty">divisional liaisons</a>.</p>
    <div class="row mb-4">
        <div class="btn-group col-6">
            <a href="#subject" class="btn btn-bard">Subject Guides</a>
            <a href="#course" class="btn btn-bard">Course Guides</a>
            <a href="#howto" class="btn btn-bard">How-to Guides</a>
        </div>
        <div class="col-4">&nbsp;</div>
        <a href="https://libguides.bard.edu/az.php" class="btn btn-primary col-2">A-Z Databases</a>
    </div>

    <?php
    printSection("subject", "Subject");
    printSection("course", "Course");
    printSection("howto", "How-to");
    ?>
</div>
<?php
$page->close();
?>
