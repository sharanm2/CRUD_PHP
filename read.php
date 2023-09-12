<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once("db_config_file.php");

$sql="SELECT * FROM demo_table";
$conn ->query($sql);
$result = $conn->query($sql);

if ($result){
    while ($row = $result->fetch_assoc()){
        echo "id : \n" .$row['id']."<br>";
        echo "name : \n" .$row['name']."<br>";
        echo "age : \n" .$row['age']."<br>";
    }
    $conn->close();
}
else{
    echo "No results found";
}



?>

</head>
<body>
    
</body>
</html>