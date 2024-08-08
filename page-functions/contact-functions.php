<?php

function staffIdCard($pictureId, $name, $tempTitle, $refLibrian, $location, $phone, $email)
{
    // Checking reference status and location
    $tempLocation = findOffice($location);
    $tempRefLib = $refLibrian == 1 ? '<br>Reference Librarian' : '';
    $newLocation = $location == '' ? '' : '<br>' . $tempLocation;
    $tempPhone = $phone == '' ? '' : '<br>845.' . $phone;
    // Concatanating string due to if checks from above
    $title = $tempTitle . $tempRefLib . $newLocation . $tempPhone;
    $emailURL = "@bard.edu";

    // Printing staff card
    echo
    "<div class=\"col-md-4 mb-5\">
        <div class=\"contact-item row\">
            <div class=\"col-4\">
                <img class=\"rounded d-none d-md-block mx-auto\" src=\"images/Staff Images/" . $pictureId . "\" alt=\"" . $name . "\" title=\"" . $name . "\">
            </div>
            <div class=\"col-8\">
                <div>
                    <h3 class=\"h5 fw-bold\" style=\"margin-bottom: 0px\">" . $name . "</h3>
                    <small>" . $title . "<br>" . $email . $emailURL . "</small>
                </div>
            </div>
        </div>
    </div>";
}
