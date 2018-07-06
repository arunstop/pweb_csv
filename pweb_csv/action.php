<?php
include('connect.php');

$sql = "INSERT into students VALUES ";
for ($no = 1; $no < $_POST['no']; $no++) {
    if ($no+1	 < $_POST['no']) {
        $sql .= "('" . $_POST['nrp' . $no] . "','" . $_POST['name' . $no] . "','" . $_POST['gender' . $no] . "','" . $_POST['major' . $no] . "','" . $_POST['address' . $no] . "','" . $_POST['phone' . $no] . "'),";
    } else {
        $sql .= "('" . $_POST['nrp' . $no] . "','" . $_POST['name' . $no] . "','" . $_POST['gender' . $no] . "','" . $_POST['major' . $no] . "','" . $_POST['address' . $no] . "','" . $_POST['phone' . $no] . "');";
    }
}

// echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "Data imported successfully <br><br>";
    header('Location: '.'show.php');
} else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>