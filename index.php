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
           /* background-color:green; */
        }
        .inner_body{
           
            height: 10vh;
            /* background-color: blue; */
            margin:5%;
            text-align: center;
        }
        .inside{
            border-collapse:collapse ;
            width: 100%;
            /* background-color: red; */
            
        }
        .inside th {
    text-align: center;
    padding: 10px; /* Add padding to create space around each header */
    margin: 5px; /* Add margin to separate headers */
}
   .button_index{
    
    width: 20%;
    height: 5vh;

   }
   .name_index{
    width: 25%;

   }
   .age_index{
    width: 40%;
   }
   .create_button:hover{
    width:15%;
    height:5vh;
    color:red;
    
   }
    </style>
</head>
<body>
   <div class="outer_body">
      <div class="inner_index_body">
            <?php
            require_once('db_config_file.php');
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {

            $name = $_POST["name"];
            $age = $_POST["age"];
            
            $sql = "INSERT INTO demo_table (name,age) VALUES ('$name', '$age')";
            $conn->query($sql);
            header("location: new_php.php");
            $conn->close();


            }

            ?>

            <table  class="inside">
                
                    <tr>
                        <th>Enter the Name</th> 
                        <th>Enter the Age</th>
                        <th>Submit</th>
                    </tr>
                    <tr>
                        <form method="POST">
                        <td class=name_index> <input type="text" placeholder="Enter the Name" name="name"></td>
                        <td class=age_index> <input type="text" name="age"></td>
                        <td class=button_index> <button class="create_button" type="submit" name="create">Save</button></td>
                        </form>
                    </tr>
                

  

            </table>

            <!-- Create Student Form -->

            <!-- <form method="POST">
            <label> Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Age:</label><br>
            <input type="text" name="age" required><br>

            <input type="submit" name="create" value="Create Student">
            </form>  -->
      </div>
    </div>    
</body>
</html>
