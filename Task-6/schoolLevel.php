<?php

function calculateSchoolGpa($gpa)
{
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
    } elseif ($gpa >= 0.0 && $gpa < 1.0) {
        echo "For result: <b>F</b><br/>";
        echo '"Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success."';
    } else {
        echo "You have provided wrong grade point.";
    }
}
