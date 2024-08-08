<?php

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

// Hours data
$regularHours = ["Sunday", "10a - 1a", "Monday", "8a - 1a", "Tuesday", "8a - 1a", "Wednesday", "8a - 1a", "Thursday", "8a - 1a", "Friday", "8a - 10p", "Saturday", "10a - 10p"];
$referenceHours = ["Sunday", "12p - 5p", "Monday", "10a - 6p", "Tuesday", "10a - 6p", "Wednesday", "10a - 6p", "Thursday", "10a - 6p", "Friday", "10a - 4p", "Saturday", "N/A"];
