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

include_once("schoolLevel.php");
include_once("graduationLevel.php");

if (isset($_GET['submit'])) {
    $gpa = $_GET['gpa'];
    $educationLevel = $_GET['educationLevel'];
    if (!empty(filter_var($gpa, FILTER_VALIDATE_FLOAT)) && !empty($educationLevel) && ($gpa >= 0.0 && $gpa <= 5.0)) {
        if ($educationLevel == 'jsc' || $educationLevel == 'ssc' || $educationLevel == 'hsc') {
            calculateSchoolGpa($gpa);
        } elseif (($educationLevel == 'graduation' || $educationLevel == 'masters')) {
            calculateGraduationGpa($gpa);
        }
    }else {
        echo "Please enter valid GPA and Select Education Level <br/>";
    }
}
