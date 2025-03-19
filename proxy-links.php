<?php
require_once("template.php");

$page = new Template();
$page->setTitle('Proxy Link Generator | Bard College');
$page->setMetaDesc('');

// print page header
$page->open();

// Collections data array moved to collections-functions.php

?>

</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
    <h1 class="text-center">Stevenson Library "Proxy It" Link Converter</h1>
    <hr>
    <p>To access library subscriptions from off-campus electronic-resources use a unique link to recognize Bard users. This tool can be used to generate a proxied url that links to library resources. The link will only work if we have a current subscription to the resource. If you find materials through our library website, they will already be proxied for access.</p>
    <div class="row">
        <input type="text" id="original-url" class="originalLink" style="margin-bottom: 10px;" placeholder="Link to be Proxied">
        <button type="button" id="generate-btn" class="btn btn-bard" style="margin-bottom: 10px;">Convert Link</button>
        <input type="text" id="proxy-url" class="proxyLink" placeholder="Proxied Link" style="margin-bottom: 10px;" readonly>
        <button type="button" id="copy-btn" class="btn btn-bard col-6" style="width: 49.5%; margin-right: 1%;">Copy Proxy Link</button>
        <button type="button" id="clear-btn" class="btn btn-bard col-6" style="width: 49.5%;">Clear Link</button>
    </div>
</div>

<?php
$page->close();
require_once("page-functions/proxy-link-scripts.php");
?>
