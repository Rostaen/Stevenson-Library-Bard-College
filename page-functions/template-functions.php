<?php

function fetchMenuItems($menuName)
{
    $pdo = connectToDatabase();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $table = 'websiteMenuItems';
    $sql = "SELECT url, name FROM $table WHERE type = '$menuName' AND active = true";

    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function printDropMenu($menuName, $results)
{
    echo '<li class="nav-item me-2 dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">' . $menuName . '</a>
            <div class="dropdown-menu">';
    foreach ($results as $row)
        echo '<a class="dropdown-item" href="' . $row['url'] . '">' . $row['name'] . '</a>';
    echo '</div></li>';
}

function printMenuItem($url, $name)
{
    echo '<li class="nav-item me-2">
        <a class="nav-link" href="' . $url . '" target="_blank">' . $name . '</a>
    </li>';
}

function printSocialMenuItem($url, $className, $icon)
{
    echo '<li class="nav-item">
        <a href="' . $url . '" class="' . $className . ' nav-link" target="_blank"><i class="fa-brands ' . $icon . '"></i></a>
    </li>';
}

function printFooterLinks($name, $results)
{
    echo '<div class="col-sm-4 mb-4"><h2 class="h4">' . $name . '</h2><ul>';
    foreach ($results as $row)
        echo '<li><a href="' . $row['url'] . '">' . $row['name'] . '</a></li>';
    echo '</ul></div>';
}
