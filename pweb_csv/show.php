<?php
include('connect.php');
$q = "SELECT * FROM students ORDER BY id ASC";
$result = mysqli_query($conn, $q);
?>
<h3>Student List :</h3><a href="index.php">Go Back</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>GENDER</th>
            <th>MAJOR</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
        </tr>
        <?php
        foreach ($result as $r) {
             ?>
                <tr>
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['name']; ?></td>
                    <td><?php echo $r['gender']; ?></td>
                    <td><?php echo $r['major']; ?></td>
                    <td><?php echo $r['address']; ?></td>
                    <td><?php echo $r['phone']; ?></td>
                </tr>
                <?php
            }
        ?>
    </table>
