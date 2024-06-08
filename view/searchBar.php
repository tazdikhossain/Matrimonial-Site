<?php
require_once('../model/userModel.php');
require_once('../controller/sessionCheckUser.php');



if (isset($_REQUEST['search'])) {
    $valueToSearch = $_REQUEST['valueToSearch'];
    // search in all table columns using concat MySQL function
    $query = "SELECT * FROM `search` WHERE CONCAT(`id`, `username`, `email`,`address` ) LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `search`";
    $search_result = filterTable($query);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Search Bar</title>
</head>
<body>

<form action="searchBar.php" method="post">
        <tr height="40px">
                    <td colspan="2">
                        <header>
                            <table width="100%">
                                <tr>
                                    <center><h1>All Biodata</h1>
                                    <td align="center">
                                    <input type="text" name="valueToSearch" placeholder=" Search"><br><br>
                                    <input type="submit" name="search" value="Search"><br><br>
                                    <a href="dashboardGeneralUser.php">Back</a> <br><br>
                                    </td>
                                </tr>
                            </table>
                        </header>
                    </td>
        </tr>
    

    <table height=100%, width=100%, border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>Id</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_array(result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><a href="showDetails.php">Show Details</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
</form>

</body>
</html>



