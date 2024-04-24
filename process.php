<?php
include "crud.php";

if(isset($_POST['add_user'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(add_user($name, $email, $phone)) {
        header("Location: index.php");
    } else {
        echo "Error adding user.";
    }
}
?>
