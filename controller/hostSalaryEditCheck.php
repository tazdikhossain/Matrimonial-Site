<?php
require_once("../model/userModel.php");
// require_once('../controller/sessionCheckAdmin.php');
$salary = $_REQUEST['salary'];
$id = $_REQUEST['id'];
$host = ['salary' => $salary, "id" => $id];
updateHost($host);
header("location: ../view/HostSalary.php");
?><html>

</html>