<?php 
   require_once('../controller/sessionCheckAdmin.php');
   require_once('../model/userModel.php');
   $host = getAllHost();
?>

<html lang="en">
<head>
    <title></title>
</head>
<body>

    <a href="../view/dashboardAdmin.php">Back</a> |

    <br><br>

    <table border="1" width=100%,  cellspacing="0" cellpadding="0">
        <tr>
            <td>ID</td>
            <td>USER NAME</td>
            <td>Role</td>
            <td>Gender</td>
            <td>Salary</td>
            <td>Action</td>
        </tr>

<?php for($i=0; $i<count($host); $i++){ ?>
        <tr>
            <td><?=$host[$i]['id']?></td>
            <td><?=$host[$i]['username']?></td>
            <td><?=$host[$i]['role']?></td>
            <td><?=$host[$i]['gender']?></td>
            <td><?=$host[$i]['salary']?></td>
            <td>
                <a href="HostSalaryEdit.php?id=<?=$host[$i]['id']?>"> EDIT </a> |
            </td>
        </tr>

<?php } ?>
    </table>
</body>
</html>