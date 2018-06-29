<?php
    require "../conf.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Users</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/users.css" />

</head>
<body>
    <main class="users-container">
        <table id="users_table" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Is Active</th>
                    <th>Is Blacklisted</th>
                    
                    <th>Edit</th>
                    <th>Change Password</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($conn,"SELECT * FROM users");
                    while($row = mysqli_fetch_assoc($query)){
                ?>  
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["status"]; ?></td>
                        <td><?php echo $row["is_active"]; ?></td>
                        <td><?php echo $row["is_blacklisted"]; ?></td>
                        <td><input type="button" value="Edit" class="user-edit"></td>
                        <td><input type="button" value="Change Password" class="user-change-password"></td>
                        <td><input type="button" value="Delete" class="user-delete-row"></td>
                    </tr>    
                <?php } ?>
            </tbody>
        </table>
    </main> 
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="js/users.js"></script>
</body>
</html>