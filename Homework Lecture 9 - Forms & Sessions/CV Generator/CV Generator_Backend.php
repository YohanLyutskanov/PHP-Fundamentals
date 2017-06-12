<?php
require_once 'PersonalInformation.php';
require_once 'LastWorkPosition.php';
require_once 'ComputerSkills.php';
require_once 'OtherSkills.php';
include_once 'CV Generator_HTML.php';
if (isset($_GET['generateCV'])) {
    $person = new PersonalInformation($_GET['fName'], $_GET['lName'], $_GET['email'], $_GET['phoneNumber'], $_GET['gender'], $_GET['date'], $_GET['nationality']);
    $lastWork = new LastWorkPosition($_GET['companyName'], $_GET['fromDate'], $_GET['toDate']);
    $computerSkills = new ComputerSkills($_GET['compLanguages'], $_GET['level']);
    $otherSkills = new OtherSkills($_GET['Languages'], $_GET['comprehension'], $_GET['reading'], $_GET['Writing'], $_GET['dr']);


    try { ?>
        <table border="1">
            <tr>
                <th colspan="2">Personal Information</th>
            </tr>
            <tr>
                <td> First name</td>
                <td><?= $person->getFirstName() ?></td>
            </tr>
            <tr>
                <td> Last name</td>

                <td><?= $person->getLastName() ?></td>
            </tr>
            <tr>
                <td> Email</td>

                <td><?= $person->getEmail() ?></td>
            </tr>
            <tr>
                <td> Phone number</td>
                <td><?= $person->getPhone() ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?= $person->getGender() ?></td>
            </tr>
            <tr>
                <td> Birth date</td>
                <td><?= $person->getBirthDate() ?></td>
            </tr>
            <tr>
                <td> Nationality</td>
                <td><?= $person->getNationality() ?></td>
            </tr>
        </table><br>
        <table border="1">
            <tr>
                <th colspan="2">Last Work Position</th>
            </tr>
            <tr>
                <td> Company name</td>
                <td><?= $lastWork->getCompanyName() ?></td>
            </tr>
            <tr>
                <td> From</td>
                <td><?= $lastWork->getFrom() ?></td>
            </tr>
            <tr>
                <td> To</td>
                <td><?= $lastWork->getTo() ?></td>
            </tr>
        </table><br>
        <table border="1">
            <tr>
                <th colspan="3">Computer Skills</th>
            </tr>
            <tr>
                <td rowspan="2">Programming Languages</td>
                <th> Language</th>
                <th>Skill Level</th>
            </tr>
            <tr>
                <td> <?= $computerSkills->getCompLanguage() ?></td>
                <td><?= $computerSkills->getLevel() ?></td>
            </tr>
        </table><br>
        <table border="1">
            <tr>
                <th colspan="5">Other Skills</th>
            </tr>
            <tr>
                <td rowspan="2">Languages</td>
                <th> Language</th>
                <th>Comprehension</th>
                <th>Reading</th>
                <th>Writing</th>
            </tr>
            <tr>
                <td> <?= $otherSkills->getLanguage() ?></td>
                <td> <?= $otherSkills->getLevel() ?></td>
                <td> <?= $otherSkills->getReading() ?></td>
                <td> <?= $otherSkills->getWriting() ?></td>

            </tr>
            <tr>
                <td>Drivers License</td>
                <td colspan="4"><?php foreach ($otherSkills->getDrivingLicense() as $dr) {
                        echo "$dr   ";
                    } ?></td>
            </tr>
        </table><br>

        <?php
    } catch (Exception $e) {
        echo $e->getMessage();
    }

}
