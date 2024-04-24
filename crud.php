<?php
include "db_connection.php";

function add_user($name, $email, $phone) {
    global $conn;
    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function update_user($id, $name, $email, $phone) {
    global $conn;
    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function delete_user($id) {
    global $conn;
    $sql = "DELETE FROM users WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function get_users() {
    global $conn;
    $users = array();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
    return $users;
}
?>
