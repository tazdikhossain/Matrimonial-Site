<?php
require_once('../controller/sessionCheckAdmin.php');
require_once('../model/userModel.php');

$id = $_GET['id'];
$host = getHost($id);
?>

<html lang="en">

<head>
    <title>Edit User Page</title>
</head>

<body>
    <form method="post" action="../controller/HostSalaryEditCheck.php" enctype="">
        <fieldset>
            <legend>Edit</legend>

            <input type="hidden" name="id" value="<?= $host['id']  ?>" />
            salary: <input type="text" name="salary" value="<?= $host['salary']  ?>" /> <br>

            <input type="submit" name="submit" value="Edit" />

            
        </fieldset>
    </form>
</body>

</html>