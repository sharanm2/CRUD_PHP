<?php
require_once('db_config_file.php');
echo "".$_SERVER["REQUEST_METHOD"];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {
    
    $name = $_POST["name"];
    $age = $_POST["age"];


    $sql = "INSERT INTO demo_table (name,age) VALUES ('$name', '$age')";

   $conn->query($sql);
   header("location: index.php");
   $conn->close();
   
    
}

?>

<!-- Create Student Form -->



























<form method="post">
    <label> Name:</label>
    <input type="text" name="name" required><br>
    <label>age:</label>
    <input type="text" name="age" required><br>
   
    <input type="submit" name="create" value="Create Student">
</form> 
