<?php
    require_once('../controller/sessionCheckUser.php'); 
    require_once('../model/userModel.php'); // This line requires the userModel.php file, which contains the functions for managing users.
    $data= getUser($_SESSION['id']);
?>

<html lang="en">

<head>
    <title>Profile Picture</title>
</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt=""> Logged in
                            </td>
                            <td align="right">
                                <a href="searchBar.php">Search Bar</a>|    
                            </td>
                        </tr>
                    </table>
                </header>
            </td>
        </tr>


        <tr>
            <td width="220px">
                <table height="100%" width="100%" border="0" cellspacing="0">
                    <tr>
                        <td height="200px">
                            <h4>General User Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboardGeneralUser.php">Dashboard</a></li>
                                <li><a href="profile.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li>
                                <li><a href="picture.php">Change Profile Picture</a></li>
                                <li><a href="changePassword.php">Change Password</a></li>
                                <!-- <li><a href="Number of CV Downloads">Number of CV Downloads</a></li>  -->
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </td>


            <td>
                <form method="post" action="../controller/fileCheck.php" enctype="multipart/form-data">
                    <fieldset>
                        <legend>
                            <b>Change Profile Picture</b>
                        </legend>
                        <table width="100%">

                            <tr>
                                <td>
                                    <img src="../upload/<?php echo $data['image']; ?>" alt="pfp" width="200p">
                                </td>


                            </tr>
                            <tr>

                                <td><input type="file" name="myfile" value="">
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <input type="submit" value="submit" name="submit" />

                                </td>
                                <td>

                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>

        </tr>

        <tr height="40px">
            <td colspan="2" align="center">
                <footer>
                    <a href="">About Us<br></a>
                    <a href="">Helpline<br></a>
                    <a href="">FAQ<br></a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>