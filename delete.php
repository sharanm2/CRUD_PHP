<?php
require_once("db_config_file.php");
    echo"hello".$_GET['id'];
    $id = $_GET['id'];
    $data = "SELECT id FROM demo_table WHERE id = '$id'";
    $result = $conn->query($data);
    $a = mysqli_num_rows($result);
    if ($a > 0) {
        echo "ID FOUND"; // Move this line up if you want it to be displayed
        $sql = "DELETE FROM demo_table WHERE id = '$id'";
        $conn->query($sql);
        header("Location: crud.php");
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
