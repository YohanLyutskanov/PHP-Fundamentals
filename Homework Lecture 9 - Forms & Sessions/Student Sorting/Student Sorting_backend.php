<?php
include "Student Sorting_frontend.php";
include "Student.php"
?>
<?php if (isset($_GET['submit']) && isset($_GET['firstName1'])): ?>
    <?php
    $students = [];

    //Student 1

    $student_1_fName = $_GET['firstName1'];
    $student_1_sName = $_GET['secondName1'];
    $student_1_email = $_GET['email1'];
    $student_1_score = intval($_GET['score1']);
    $student1 = new Student($student_1_fName, $student_1_sName, $student_1_email, $student_1_score);
    $students[] = $student1;

    //Student 2

    $student_2_fName = $_GET['firstName2'];
    $student_2_sName = $_GET['secondName2'];
    $student_2_email = $_GET['email2'];
    $student_2_score = intval($_GET['score2']);
    $student2 = new Student($student_2_fName, $student_2_sName, $student_2_email, $student_2_score);
    $students[] = $student2;

    //Student 3

    $student_3_fName = $_GET['firstName3'];
    $student_3_sName = $_GET['secondName3'];
    $student_3_email = $_GET['email3'];
    $student_3_score = intval($_GET['score3']);
    $student3 = new Student($student_3_fName, $student_3_sName, $student_3_email, $student_3_score);
    $students[] = $student3;

    // Sorting

    $sort = $_GET['sort'];
    if ($sort == "fName") {
        function sortByFirstName($a, $b)
        {
            return strcmp($a->getFirstName(), $b->getFirstName());
        }

        usort($students, 'sortByFirstName');
    } else if ($sort == "sName") {
        function sortByLastName($a, $b)
        {
            return strcmp($a->getLastName(), $b->getLastName());
        }

        usort($students, 'sortByLastName');
    } else if ($sort == "email") {
        function sortByEmail($a, $b)
        {
            return strcmp($a->getEmail(), $b->getEmail());
        }

        usort($students, 'sortByEmail');
    } else if ($sort == 'eScore') {
        function sortByScore($a, $b)
        {
            return strcmp($a->getExamScore(), $b->getExamScore());
        }

        usort($students, 'sortByScore');
    }

    //Ordering

    $order = $_GET['order'];

    if ($order == 'dsc') {
        $students = array_reverse($students);
    }
    ?>
    <table border="1">
        <thead>
        <tr>
            <th>First name</th>
            <th>Second name</th>
            <th>Email</th>
            <th>Exam Score</th>
        </tr>
        </thead>
        <tbody>
        <?php $average = 0;
        // $count = 1;
        foreach ($students as $student): ?>
            <tr>
                <td><?= $student->getFirstName() ?></td>
                <td><?= $student->getLastName() ?></td>
                <td><?= $student->getEmail() ?></td>
                <td><?= $student->getExamScore() ?></td>
            </tr>
            <?php
            $average += $student->getExamScore();
            //  $count++;
        endforeach; ?>
        <tr>
            <td colspan="3" style="font-weight: bold">Average:</td>
            <td style="font-weight: bold"><?= round($average / 3, 2) ?></td>
        </tr>
        </tbody>
    </table>
    <?php
//    $numberOfPages = ceil($count / 5);
//    for ($i = 1; $i <= $numberOfPages; $i++) {  // print links for all pages
//        echo "<a href='Student Sorting_backend.php?page=" . $i . "'";
//        //if ($i == $page) echo " class='curPage'";
//        echo ">" . $i . "</a> ";
    //   }
endif; ?>