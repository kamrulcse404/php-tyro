<form action="gpaCalculator.php" method="get">
    <h3>GPA Calculator</h3>
    <label for="">Enter Your GPA:</label><br />
    <input type="text" name="gpa" id="gpa" required><br />
    <p>Select Your Education Level:</p>
    <select name="educationLevel" id="educationLevel" required>
        <option value="">--Select--</option>
        <option value="jsc">JSC</option>
        <option value="ssc">SSC</option>
        <option value="hsc">HSC</option>
        <option value="graduation">Graduation</option>
        <option value="masters">Masters</option>
    </select>
    <br /> <br />
    <input type="submit" name="submit" value="Submit">
</form>
<br>

<?php

if (isset($_GET['submit'])) {
    $gpa = $_GET['gpa'];
    $educationLevel = $_GET['educationLevel'];
    if (!empty(filter_var($gpa, FILTER_VALIDATE_FLOAT)) && !empty($educationLevel)) {
        if (($educationLevel == 'jsc' || $educationLevel == 'ssc' || $educationLevel == 'hsc') && ($gpa >= 0.0 && $gpa <= 5.0)) {
            if ($gpa == 5.0) {
                echo "For result: <b>A+</b><br/>";
                echo '"<b>Congratulations!</b> You have got A+. Remember, success is a consequences, must not be a goal."';
            } elseif ($gpa < 5.0 && $gpa >= 4.0) {
                echo '"You have been passed with grade \'<b>A</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 4.0 && $gpa >= 3.5) {
                echo '"You have been passed with grade \'<b>A-</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 3.5 && $gpa >= 3.0) {
                echo '"You have been passed with grade \'<b>B</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 3.0 && $gpa >= 2.0) {
                echo '"You have been passed with grade \'<b>C</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 2.0 && $gpa >= 1.0) {
                echo '"You have been passed with grade \'<b>D</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 1.0) {
                echo "For result: <b>F</b><br/>";
                echo '"Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success."';
            }
        }
        elseif (($educationLevel == 'graduation' || $educationLevel == 'masters' ) && ($gpa >= 0.0 && $gpa <= 4.0)) {
            if ($gpa == 4.0) {
                echo "For result: <b>A+</b><br/>";
                echo '"<b>Congratulations!</b> You have got A+. Remember, success is a consequences, must not be a goal."';
            } elseif ($gpa < 4.0 && $gpa >= 3.75) {
                echo '"You have been passed with grade \'<b>A</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 3.75 && $gpa >= 3.5) {
                echo '"You have been passed with grade \'<b>A-</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 3.5 && $gpa >= 3.25) {
                echo '"You have been passed with grade \'<b>B+</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 3.25 && $gpa >= 3.0) {
                echo '"You have been passed with grade \'<b>B</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 3.0 && $gpa >= 2.75) {
                echo '"You have been passed with grade \'<b>B-</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 2.75 && $gpa >= 2.5) {
                echo '"You have been passed with grade \'<b>C+</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 2.5 && $gpa >= 2.25) {
                echo '"You have been passed with grade \'<b>C</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 2.25 && $gpa >= 2.0) {
                echo '"You have been passed with grade \'<b>D</b>\'. Forget the mistakes, Remember the lessons."';
            } elseif ($gpa < 2.0) {
                echo "For result: <b>F</b><br/>";
                echo '"Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success."';
            }
        } else {
            echo "You have provided wrong grade point. <br/>";
        }
    } else {
        echo "Please enter valid GPA and Education Level <br/>";
    }
}
