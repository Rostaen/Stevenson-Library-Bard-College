<?php
function printButtons($link, $title)
{
    echo '<a href="' . $link . '" class="btn btn-bard" target="_blank">' . $title . '</a>';
}
function printNetworkLibrariesInfo($title, $info)
{
    echo '<h2 class="fs-3">' . $title . '</h2><div class="ps-5">' . $info . '</div>';
}

$buttonLinks = [
    ["https://libguides.bard.edu/contact", "Visiting the Library"],
    ["https://www.bard.edu/library/hours.php", "Hours"],
    ["https://libguides.bard.edu/borrowrenew", "Policies"],
    ["https://libguides.bard.edu/staff", "Staff Directory"],
    ["https://www.bard.edu/library/student-jobs.php", "Student Jobs FAQ"],
    ["https://libguides.bard.edu/donations", "Donating Materials"],
    ["https://docs.google.com/forms/d/e/1FAIpQLSc9MZBTZAe1kKEGov1ZejPGFeEo9Yj6j5fy0Ljmc24ZcGsrZQ/viewform", "Suggest a Purchase"]
];

$networkLibrariesData = [
    ["Charles P. Stevenson Library", "<p>Stevenson Library, built with the generous support and encouragement of Charles P. Stevenson, Jr., is Bard's main library. The library houses 400,000 volumes and provide access to more than 80 databases and 50,000+ online journals. Resource-sharing consortiums provide access to six million additional volumes. The Sussman Rare Book Collection, which is housed at the Stevenson Library, contains more than 1,200 items, including the 1493 Liber Chronicarum history of the world, two editions (1556 and 1680) of Magna Carta, and a 1792 first edition of Mary Wollstonecraft's Vindication of the Rights of Women.</p><p>The original library, Hoffman, was built in 1893, and includes two additions: the Kellogg wing added in 1973, and the Charles P. Stevenson addition. The <a href=\"https://www.bard.edu/library/pdfs/stevenson.pdf\" target=\"_blank\">Stevenson addition</a> was designed by Robert Venturi opened in 1993.</p>"],
    ["The Levy Economics Institute Library", "<p><a target=\"_blank\" href=\"https://www.levyinstitute.org/\">The Levy Economics Institute</a> of Bard College, founded in 1986 through the generous support of Bard College trustee Leon Levy, is a nonprofit, nonpartisan, public policy research organization. The Levy Institute is independent of any political or other affiliation and encourages diversity of opinion in the examination of economic policy issues while striving to transform ideological arguments into informed debate.</p><p>*Books from the Levy Library can be found and requested through the <a href=\"https://bardcollege.on.worldcat.org/discovery\" target=\"_blank\">Stevenson Library catalog</a>.</p>"],
    ["Center for Curatorial Studies Library", "<p><a target=\"_blank\" href=\"https://ccs.bard.edu/research-center\">The CCS Bard Library</a> is one of the foremost contemporary art research collections in the United States focusing on post-1960s contemporary art, curatorial practice, exhibition histories, theory and criticism. The Library's main collection houses extensive holdings of international exhibition publications and artists' monographs supporting the in-depth study of artists represented in the permanent collection.</p><p>*Materials in this collection are non-circulating and are to be used on-site.</p>"],
    ["Bard Graduate Center in New York City", "<p><a target=\"_blank\" href=\"https://www.bgc.bard.edu/research/library.html\">The BGC Department of Research Collections</a> comprises the Library, Study Collection, and Archive, representing a comprehensive range of diverse research resources across a range of media in support of the advanced scholarly study of material culture.</p><p>*Materials in this collection are non-circulating and are to be used on-site.</p>"]
];
