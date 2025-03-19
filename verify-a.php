<?php
require_once("template.php");

function sendMail($to, $subject, $message, $from, $headers)
{
    // Additional email headers (Bcc, etc.) can be added here
    $headers = "From: $from\r\n" . "Reply-To: $from\r\n";
    return mail($to, $subject, $message, $headers);
}

$captcha = $_POST['g-recaptcha-response'];
$response = @file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcJo0saAAAAAARK3moxRFTi4b8GDdJJ4ZqKhtUI&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

$page = new Template();
$page->setTitle('Verification | Stevenson Library | Bard');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
?>

</header>
<div class="mt-6 mb-1 bard-bt-boarder"></div>
<div class="container verification">
    <?php
    // Check captcha response
    $responseData = json_decode($response, true);
    if ($responseData['success']) {
        include('inc/connect.php');

        // Sanitize and validate user inputs
        $questionFlag = isset($_POST["name"]) ? 1 : 2;
        $name = isset($_POST["name"]) ? $_POST["name"] : $_POST["name-rc"];
        $email = isset($_POST["email"]) ? $_POST["email"] : '';
        $subject = $_POST["subject"];
        $topic = isset($_POST["topic-rc"]) ? $_POST["topic-rc"] : '';
        $availability = isset($_POST["availability-rc"]) ? $_POST["availability-rc"] : '';
        $dateNeeded = isset($_POST["dateneeded-rc"]) ? $_POST["dateneeded-rc"] : '';
        $comments = isset($_POST["Comments"]) ? $_POST["Comments"] : $_POST["Comments-rc"];

        // Fetch the appropriate table based on $questionFlag
        $tableName = ($questionFlag == 1) ? 'emailrotation' : 'appointment_rotation';
        $sql = "SELECT * FROM $tableName WHERE vacation = 0 ORDER BY assign_count ASC LIMIT 1";

        try {
            // Use PDO to interact with the database
            $pdo = new PDO("mysql:host=bardwebdb.bard.edu;dbname=stevensonlib", "libweb", "st3v3nson");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $idHold = $result['id'];
                $emailAddress = $result['email'];
                $name2 = $result['name'];
                $lowestEmails = $result['assign_count'];
                $bcc = "Bcc: afillhar@bard.edu";

                // Sending message to librarian
                $endLine = "\n\n";
                $message = "Name: $name$endLine";
                $message .= "Email: $email$endLine";
                $message .= "Topic: $topic$endLine";
                $message .= "Availability: $availability$endLine";
                $message .= "Date Needed: $dateNeeded$endLine";
                $message .= "Comments: $comments$endLine";

                if (sendMail($emailAddress, $subject, $message, "$name <$email>", $bcc)) {
                    // Update the database table
                    $lowestEmails++;
                    $updateSql = "UPDATE $tableName SET assign_count = :lowestEmails WHERE id = :idHold";
                    $updateStmt = $pdo->prepare($updateSql);
                    $updateStmt->execute(array(':lowestEmails' => $lowestEmails, ':idHold' => $idHold));

                    // Sending message to querant
                    $message2 = "Thank you for contacting the Stevenson Library. Your message has been sent off and a Reference Librarian will get back to you at their earliest convenience. For your reference, a copy of your request has been emailed to you.$endLine$message\"Sincerely,\n$name2\n$emailAddress";
                    sendMail($email, $subject, $message2, "$name <$emailAddress>", $bcc);

                    // Show success prompt on webpage
                    echo '<h2>Thank you!</h2>';
                    echo '<div class="content-inner">';
                    echo '<p>Your message has been sent off, and a Reference Librarian will get back to you at their earliest convenience.</p>';

                    // Close the database connection
                    $pdo = null;
                } else {
                    echo '<p>Failed to send the email. Please try again later.</p>';
                }
            } else {
                echo '<p>No available librarian found at the moment. Please try again later.</p>';
            }
        } catch (PDOException $e) {
            echo '<p>Database Error: ' . $e->getMessage() . '</p>';
        }
    } else {
        echo '<p>The captcha was invalid. Please go back and try again.</p>';
    }
    ?>
</div>
<?php
$page->close();
?>
