<?php

    $first_number = ' ';
    $second_number = ' ';
    $answer = ' ';
    if(isset($_POST['btn'])) {
        require_once './Calculator1.php';
        $calculator1 = new Calculator1();
        $answer = $calculator1->myCalculator($_POST);
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" value="<?php echo $_POST['first_number']; ?>" name="first_number" /></td>
        </tr>
        <tr>
            <th>Second Number</th>
            <td><input type="text" value="<?php echo $_POST['second_number']; ?>" name="second_number" /></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" value="<?php echo $answer; ?>" name="result" /></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+" />
                <input type="submit" name="btn" value="-" />
                <input type="submit" name="btn" value="*" />
                <input type="submit" name="btn" value="/" />
                <input type="submit" name="btn" value="%" />
            </td>
        </tr>
    </table>
</form>