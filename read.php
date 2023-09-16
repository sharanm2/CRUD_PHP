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
.table_data.table_head{
    border :1px solid balck;
    /* padding:8px; */
    background-color:blanchedalmond;
    
}
.button1{
    background-color:red;
    text-decoration:none;
    color:black;
    border-radius:10px;
    border:none;
    
}
.button{
    background-color:yellow;
    text-decoration:none;
    color:black;
    border:none;
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
                <th class="table_head">
                    Name
                </th>
                <th class="table_head">
                    Age
                </th>
                <th class="table_head">
                    Edit
                </th>
                <th class="table_head">
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
          echo '<td><input type="text" name="name" required value="' .$row['name']. '"></td>';
          echo  '<td><input type="text" name="age" required value="'.$row['age'].'"></td>';
          echo  '<td><input type="submit" name="create" value="save"></td>';
          echo  '</form> ';

        }
       
        else{
            echo "<tr>";
        // echo "<td>" . $row['id'] . "</td>";
        echo "<td class=\"table_data\">" . $row['name'] . "</td>";

        echo "<td class=\"table_data\">" . $row['age'] . "</td>";
        echo "<td class=\"table_data\"><button class='button'><a style=\"text-decoration:none;\" href='crud.php?id=" . $row['id'] . "'>Update</a></button></td>";
echo "<td class=\"table_data\"><button class='button1'><a style=\"text-decoration:none;\" href='delete.php?id=" . $row['id'] . "'>Delete</a></button></td>";
        
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