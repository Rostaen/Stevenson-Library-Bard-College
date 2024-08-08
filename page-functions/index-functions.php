<?php

function homePageButton($id, $link, $newTab, $fontAwesomeIcon, $title)
{
    $newPage = $newTab ? "target='_blank'" : "";
    echo "
            <a id=\"find-" . $id . "\" class=\"btn btn-secondary hp-button mb-1\" href=\"" . $link . "\" " . $newPage . ">
                <i class=\"fas fa-2x fa-" . $fontAwesomeIcon . "\"></i>
                <div class=\"word\">" . $title . "</div>
            </a>
        ";
}

function getButtons()
{
    $pdo = connectToDatabase();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $table = 'homePageButtons';
    $sql = "SELECT * FROM $table WHERE active = true";

    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
