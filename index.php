<!DOCTYPE html>
<html>
<head>
    <title>User Management System</title>
</head>
<body>
    <h1>User Management System</h1>

    <h2>Add User</h2>
    <form method="post" action="process.php">
        <label>Name:</label><br>
        <input type="text" name="name"><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br>
        <label>Phone:</label><br>
        <input type="text" name="phone"><br>
        <button type="submit" name="add_user">Add User</button>
    </form>

    <h2>Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        include "crud.php";
        $users = get_users();
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['phone']."</td>";
            echo "<td><a href='edit.php?id=".$user['id']."'>Edit</a> | <a href='delete.php?id=".$user['id']."'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
