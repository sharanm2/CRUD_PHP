<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Student</title>
    <style>
       .parent{
        width:100%;
        height:100vh;
        background-color:grey;
       }
       .child{
        margin-top:10%;
        margin-left:35%;
        width:30%;
        /* padding:7px; */
        height:25vh;
        background-color:green;
        text-align: center;
       }
       
    </style>
</head>
<body class = "parent">
   
        <?php
        require_once('db_config_file.php');
        echo"".$_SERVER["REQUEST_METHOD"];
       
        if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
            echo "".$_POST['id']."".$_POST['name']."".$_POST['age'];
            $id = $_POST["id"];
            $name = $_POST["name"];
            $age = $_POST["age"];
            $check_id_is_there_are_not = "SELECT id FROM demo_table WHERE id = '$id'";
            $result = $conn->query($check_id_is_there_are_not);
            $a = mysqli_num_rows($result);

            if ($a > 0) {
                $sql = "UPDATE demo_table SET name='$name', age='$age' WHERE id= $id";

                if ($conn->query($sql) === TRUE) {
                    header("Location: boot_strap.php");
                    $conn->close();
                } else {
                    echo "Error updating student record: " . $conn->error;
                }
            } else {
                echo "ID : " . $id . " not found, please provide the correct ID";
            }
        }
        ?>
    <div class = "child" >
        <h3 class="head">Update Student</h3>
        <form method="POST">
            <div class="label">
                <label>ID:</label>
            </div>

            <div class= "box">
                <input type="text" name="id" required><br>
            </div>
            <div class="label">
              <label>Name:</label>
            </div>
            <div class="box">
                <input type="text" name="name" required><br>
            </div>
            <div class="label">
                 <label>Age:</label>
            </div>
            <div class="box">
               <input type="text" name="age" required><br>
            </div>
            <div class="box_submit">
                <input type="submit" name="update" value="Update">
            </div>
       </form>
        
    </div>
</body>
</html>
