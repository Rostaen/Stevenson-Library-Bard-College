<?php

function fetchRotation($tableName)
{
    $pdo = connectToDatabase();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $queryTarget = 'name'; // Last name
    $sql = "SELECT * FROM $tableName ORDER BY $queryTarget";

    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function printRowSection($item, $count)
{
    $hold = '';
    $count % 2 === 0 ? $hold = '<div class="col-3 librarian" style="background-color:#ddd;">' . $item . '</div>' : $hold = '<div class="col-3 librarian">' . $item . '</div>';
    echo $hold;
}

function printLibrarianCounts($email, $appointment)
{
    for ($x = 0; $x < count($email); $x++) {
        printRowSection($email[$x]['name'], $x);
        printRowSection($email[$x]['assign_count'], $x);
        $email[$x]['name'] === 'Amy' ? printRowSection("", $x) : printRowSection($appointment[$x]['assign_count'], $x);
        printRowSection($email[$x]['vacation'], $x);
    }
}
