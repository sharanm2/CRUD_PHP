<?php
require_once('db_config_file.php');
echo"".$_SERVER["REQUEST_METHOD"];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];

    $sql = "UPDATE demo_table SET name='$name', age='$age' WHERE id= $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: read.php");
        $conn->close();
    } else {
        echo "Error updating student record: " . $conn->error;
    }
}
?>
<form method="POST">
    <label>ID:</label>
    <input type="text" name="id" required><br>
    <label>Name:</label>
    <input type="text" name="name" required><br>
    <label>Age:</label>
    <input type="text" name="age" required><br>
    <input type="submit" name="update" value="Update">
</form>
