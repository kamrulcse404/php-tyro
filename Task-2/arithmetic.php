
    <form action="arithmetic.php" method="get">
        <h3>You can Addition, Subtraction, Division and Modulo</h3>
        <label for="">Value 1: </label><br>
        <input type="text" name="value1" id="value1" required><br><br>
        <label for="">Value 2: </label><br>
        <input type="text" name="value2" id="value1" required><br>
        <p>Which Operation you want to do?</p>
        <select name="operation" id="operation">
            <option>--Select--</option>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="divition">Divition</option>
            <option value="modulo">Modulo</option>
        </select>
        <input type="submit" name = "submit" value="Submit">
    </form>
    <br>

    <?php

    if (isset($_GET['submit'])) {
        $value1 = $_GET['value1'];
        $value2 = $_GET['value2'];
        if (filter_var($value1, FILTER_VALIDATE_FLOAT) && filter_var($value1, FILTER_VALIDATE_FLOAT)) {
            if ($_GET['operation'] == "addition") {
                echo "Your result is published: ".$value1 + $value2 . "<br>";
            }
            if ($_GET['operation'] == "subtraction") {
                echo "Your result is published: ". $value1 - $value2 . "<br>";
            }
            if ($_GET['operation'] == "multiplication") {
                echo "Your result is published: ". $value1 * $value2 . "<br>";
            }
            if ($_GET['operation'] == "divition") {
                echo "Your result is published: ". $value1 / $value2 . "<br>";
            }
            if ($_GET['operation'] == "modulo") {
                echo "Your result is published: ". $value1 % $value2 . "<br>";
            }
        }else {
            echo "Please input valid number!!";
        }
    }
    ?>
