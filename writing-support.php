<?php
require_once("template.php");
require_once("rss/rsslib.php");

$page = new Template();
$page->setTitle('Writing Support | Steven Library | Bard College');
$page->setMetaDesc('Discover the writing support services offered by Bard College Library. Explore resources, workshops, and assistance available to help students improve their writing skills and excel in academic writing assignments.');

// print page header
$page->open();
?>
</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container">
    <h1 class="text-center">Writing Support</h1>
    <hr>
    <div>
        <p>Writing a research paper or Senior Project? Whether you’re searching for a topic or fine-tuning a draft, we can help you produce writing to be proud of. Just make an appointment with Jane Smith, Associate Director of Library Writing Support, for a one-on-one consultation. To contact her, request a <a href="ask-a-librarian.php#requestAWritingAppointment">writing appointment</a>, email jesmith@bard.edu, or pop by her office in Stevenson 406.</p>
        <p>We can help you in all sorts of ways:</p>
        <ul>
            <li>Brainstorm ideas</li>
            <li>Use informal writing to advance your thinking</li>
            <li>Generate research questions</li>
            <li>Develop and organize an argument</li>
            <li>Revise your drafts</li>
            <li>Take effective notes</li>
            <li>Connect with a reference librarian</li>
            <li>Read and evaluate sources critically</li>
            <li>Engage with sources in your writing</li>
            <li>Avoid unintentional plagiarism</li>
        </ul>
    </div>
</div>



<?php
$page->close();
?>
