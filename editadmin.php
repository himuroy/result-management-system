<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php 
    include 'partial/connection.php';
    include 'adminpartial/header.php';
    include 'adminpartial/nav.php';
    ?>
    <div class="table-responsive m-5">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM login";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <a class="btn btn-info" href="adminpartial/editadmin.php?sn=<?php echo $row['sn']; ?>">Edit</a>&nbsp;
                        </td>
                    </tr>
                <?php
                }
                $result->free();
                ?>
            </tbody>
        </table>
        <a href="adminpartial/create.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Record</a>
    </div>
</body>

</html>