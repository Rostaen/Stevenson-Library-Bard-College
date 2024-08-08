<?php

function librarianCard($name, $room, $number, $email)
{
    $areaCode = "845.";
    $emailURL = "@bard.edu";
    echo "<p><span class=\"fw-bold\">" . $name . "</span><br />" . $room . " <br />" . $areaCode . $number . "<br> " . $email . $emailURL . "</p>";
}

function printInfo($row)
{
    $name = $row['first'] . " " . $row['last'];
    $location = findOffice($row['floor']);
    librarianCard($name, $location, $row['phone'], $row['email']);
}
