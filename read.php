<!DOCTYPE html>
<html lang="en">
<head>
    <title>Read All student</title>
<style>
.parent{

    height: 100vh;
    width: 100%;

}

.child{
    width:40%;
    /* margin-top: 10%; */
    margin-left:8%;
    padding-left:25%;
    /* background-color: blue; */
}

table{
    width: 100%;
    border-collapse:collapse ;
}
th,td{
    border :1px solid balck;
    padding:8px;
}
.button{
    background-color:red;
    text-decoration:none;
    color:white;
    
}
.button1{
    background-color:yellow;
    text-decoration:none;
    color:black;
}

</style>
</head>
<body class ="parent">
    <div class="child">
    <table border="1">
        <thead>
            <tr>
                <!-- <th>
                    ID
                </th> -->
                <th>
                    Name
                </th>
                <th>
                    Age
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
require_once("db_config_file.php");

$sql="SELECT * FROM demo_table";
$conn ->query($sql);
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {

        if($row['id']==$_GET['id']) {
    
          echo '<form action="update.php" method="POST">';
          echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
          echo '<td><input type="text" name="name" required value="' . '"></td>';
          echo  '<td><input type="text" name="age" required value="'.$row['age'].'"></td>';
          echo  '<td><input type="submit" name="create" value="save"></td>';
          echo  '</form> ';

        }
       
        else{
            echo "<tr>";
        // echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td><button><a class='button1' href='crud.php?id=" . $row['id'] . "'>Update</a></button></td>";
        echo "<td><button><a class='button'  href='delete.php?id=" . $row['id'] . "'>Delete</a></button></td>";
        echo "</tr>";
        }
    }
    // $conn->close();
} else 
{
    echo "No results found";
    // echo "<tr><td colspan='3'>No results found</td></tr>";
}


?>
</div>
        </tbody>
    </table>
</body>
</html>