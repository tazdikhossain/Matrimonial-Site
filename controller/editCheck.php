<?php
require_once("../model/userModel.php");
require_once('../controller/sessionCheckUser.php');


    if (
        isset($_REQUEST['username']) &&
        isset($_REQUEST['email']) &&
        isset($_REQUEST['gender']) &&
        isset($_REQUEST['phoneNumber']) &&
        isset($_SESSION['id'])
    ) {
        
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $id = $_SESSION['id'];
        $gender = $_REQUEST['gender'];
        $phoneNumber = $_REQUEST['phoneNumber'];

        
        if (empty($username)) {
            header("location: ../view/edit.php");
            exit;
        }


        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location: ../view/edit.php");
            exit;
        }

        
        $user = ['username' => $username, 'email' => $email, 'gender' => $gender, 'phoneNumber' => $phoneNumber, "id" => $id];
        updateUser($user);
        header("location: ../view/dashboardGeneralUser.php");
        exit;
    } else {
        header("location: ../view/edit.php");
        exit;
    }
?>
