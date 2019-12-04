<?php
require_once './Example.php';

$example = new Example();

$example->one($_POST['name']);
//echo $_POST['name'];
?>

<form action="" method="post">
    <input type="text" name="name"/>
    <input type="submit" name="btn" value="Submit"/>
</form>
