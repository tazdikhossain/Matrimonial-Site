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

<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <table width="100%" height="100%">

        <tr height="60px">
            <header>
                <!-- <td>
                    <img src="" alt=""> <a href="index.php">Back</a>
                </td>
                <td align="right">
                    <a href="index.php">Home</a>|
                    <a href="registration.php">Registration</a>
                </td>
                </td> -->
            </header>            
        </tr>


        <tr>
            <td colspan="2" height="2px">

                <hr>
            </td>
        </tr>


        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="700px" >
                        <tr>
                            <td>
                                <form action="" method="post" enctype="">
                                    <fieldset>

                                        <legend>
                                            Login
                                        </legend>

                                        <table width="100%">

                                        <?php while ($row = mysqli_fetch_array($search_result)): ?>
                                            <tr>
                                                <td>User Name</td>
                                                <td>:
                                                    <?php echo $row['username']; ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td>:
                                                    <?php echo $row['email']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <?php endwhile; ?>
                                        </table>

                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </main>
            </td>
        </tr>


        <tr height="60px">
            <td colspan="2">
                <hr>

            </td>
        </tr>


    </table>

</body>

</html>