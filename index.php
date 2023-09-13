<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Student</title>
    <style>
        .outer_body{
           width: 100%;
           height: 100vh;
        }
        .inner_body{
            width:100%;
            height: 10vh;
            /* background-color: blue; */
            margin:5%;
            text-align: center;
        }
    </style>
</head>
<body>
   <div class="outer_body">
      <div class="inner_body">
            <?php
            require_once('db_config_file.php');
           
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {

            $name = $_POST["name"];
            $age = $_POST["age"];
            
            $sql = "INSERT INTO demo_table (name,age) VALUES ('$name', '$age')";
            $conn->query($sql);
            header("location: crud.php");
            $conn->close();


            }

            ?>

            <!-- Create Student Form -->

            <form method="POST">
            <label> Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Age:</label><br>
            <input type="text" name="age" required><br>

            <input type="submit" name="create" value="Create Student">
            </form> 
      </div>
    </div>    
</body>
</html>
