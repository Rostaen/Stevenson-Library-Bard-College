<?php

/**
 * Prints the button that links to the proper LibGuides page after being called in by the printSection function
 * @param string $url the URI for the correct LibGuides page
 * @param string $name the readable name for the LibGuides page
 */
function printButton($url, $name)
{
    echo '<a href="https://libguides.bard.edu/' . $url . '" class="col-4">
        <div class="guides-item btn btn-bard p-2 col-12 fs-5 mb-3">
            ' . $name . '
        </div>
    </a>';
}

/**
 * Gets the proper section from the database after being called in the printSection function
 * @param string $guideType passed down by the printSections function
 */
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

/**
 * Prints each section of the reasearch guides page
 * @param string $guideType type of guide to be pulled from the database: subject, course, howto
 * @param string $title The title of the section being created: Subjects, Courses, How-to
 */
function printSection($guideType, $title)
{
    echo '<div class="anchor" id="' . $guideType . '"></div>
    <h2>' . $title;
    if ($title != "Browsing")
        echo ' Guides';
    echo '</h2>
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
