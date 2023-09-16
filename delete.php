<?php
require_once("db_config_file.php");
    echo"".$_GET['test'];


    // echo"hello".$_GET['id_delete'];
    // echo"".$_GET['test'];
    $id = $_GET['test'];
    $data = "SELECT id FROM demo_table WHERE id = '$id'";
    $result = $conn->query($data);
    $a = mysqli_num_rows($result);
    if ($a > 0) {
        echo "ID FOUND"; // Move this line up if you want it to be displayed
        $sql = "DELETE FROM demo_table WHERE id = '$id'";
        $conn->query($sql);
        header("Location: boot_strap.php");
        $conn->close();
    }
    else {
        echo "ID NOT FOUND PLEASE TRY WITH THE VALID ID ";
    }
?>

<form method="POST">
    <label> ID:</label>
    <input type="text" name="id" required><br>
    <input type="submit" name="delete" value="Delete">
</form>
