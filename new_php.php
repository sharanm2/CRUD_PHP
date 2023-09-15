<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new_crud</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .parent {
            width: 100%;
        }
        .upper_child {
            width: 100%;
        }
        .child {
            width: 100%;
            height: 50vh;
        }
        .upper_div{
            height: 10vh;
            display: flex;
            width: 74%;
            justify-content: space-between;
            align-items: center;
        }
        .main_table {
            width: 81%;
            border-collapse: collapse;
            margin: auto;
        }
        .heading {
            text-align: center;
            font-size: -webkit-xxx-large;
        }
        .button_inside {
        }
        td {
            text-align: center;
            height: 4vh;
        }
        .innner_edit_button {
            height: 4vh;
            width: 20%;
            margin-left: 15%;
            background-color: white;
            border: none;
            border-radius: 10%;
            color: #8B8000;
        }
        .innner_delete_button {
            height: 6vh;
            width: 20%;
            margin-left: 15%;

            background-color: red;
            border: none;
            border-radius: 10%;
            color: white;
        }
        .outer_add {
            margin-left: 0.5%;
            
        }
        #popup{
            display:none;
            width:321px;
            height:301px;
            position:absolute;
            left:40%;
            top:25%;
            border:7px solid;
            border-radius:10%;
            border: 7px outset;
            /* background-color:red;  */
            background: rgb(53,50,55);
            background: linear-gradient(90deg, rgba(53,50,55,1) 20%, rgba(181,181,181,1) 100%, rgba(252,176,69,1) 100%, rgba(255,255,255,1) 100%);
            border-color: #ffeb00;
   
        }
        #popup_update{
            display:none;
            width:321px;
            height:301px;
            position:absolute;
            left:40%;
            top:25%;
            border:7px solid;
            border-radius:10%;
            border: 7px outset;
            /* background-color:red;  */
            background: rgb(53,50,55);
            background: linear-gradient(90deg, rgba(53,50,55,1) 20%, rgba(181,181,181,1) 100%, rgba(252,176,69,1) 100%, rgba(255,255,255,1) 100%);
            border-color: #ffeb00;
   
        }
        #popup_delete{
            display:none;
            width:273px;
            height:144px;
            position:absolute;
            left:40%;
            top:30%;
            border:7px solid;
            border-radius:10%;
            border: 7px outset;
            /* background-color:red; */
            background: rgb(53,50,55);
            background: linear-gradient(90deg, rgba(53,50,55,1) 20%, rgba(181,181,181,1) 100%, rgba(252,176,69,1) 100%, rgba(255,255,255,1) 100%);
            border-color: #dbb4e9;
   
        }
        .outer_add_button {
            border: none;
            border-radius: 10%;
        }

        .heading_for_the_table{
            margin-left: 13%;
            font-size: xx-large;
            
        }
      
        .add_button{
            /* margin-left: 9.5%;
            margin-bottom: 4%; */
            border-radius: 15px;
            height: 34px;
            background-color: #00daff;
            color: white;
            border: 1px;
        }
        .close_button_popup{
           
            background-color: blue;
            margin-left: 71%;
            margin-top: 78%;
        }
        .form_input{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .form_input input 
        {
            margin-bottom: 15px; /* Adjust the value as needed */ 
        }
        .name_age_input_box
        {
            width: 81%;
            height: 20px;
        }
        .button_select_hover:hover
        {

            border-radius: 5px;
            color:green;
        }
        .button_cancel_hover:hover
        {

            border-radius: 5px;
            color:red;
        }
        .conform_delete
        {
            
            text-align: center;
            padding: 23%;
        }
    </style>
</head>
<body>
   <div class="parent">
        <div class="upper_child">
            <!-- <h3 class="heading">Student Details</h3> -->
        </div>
        <?php
            require_once('db_config_file.php');
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {

            $name = $_POST["name"];
            $age = $_POST["age"];
            
            $sql = "INSERT INTO demo_table (name,age) VALUES ('$name', '$age')";
            $conn->query($sql);
            header("location: new_php.php");
            // $conn->close();


            }

            ?>
        <div class="child">
               <div class="outer_add">
               <div id="popup">

                        <div style="margin-top: 26%;">
                            <form method="POST" class=form_input >
                                <input class="name_age_input_box" type="text" placeholder="Enter the Name" name="name"><br>
                                <input class="name_age_input_box" type="text" placeholder="Enter the Age" name="age"><br>
                                <button class="button_select_hover" type="submit" name="create">Save</button>
                                <button class="button_cancel_hover" onclick="summa_close()">close</button>
                            </form>
                        </div>
                   
                </div>
                <div id="popup_delete">
                    <div class="conform_delete">
                    
                    <button  style="margin-right: 40px;"> Yes </button>
                    <button onclick="delete_student_close()"> No </button>
                    </div>


                </div>

                <div id="popup_update">
                            <form method="POST" class=form_input >
                                <input class="name_age_input_box" type="text" placeholder="Enter the Name" name="name" value='' . . $row['id'] ><br>
                                <input class="name_age_input_box" type="text" placeholder="Enter the Age" name="age"><br>
                                <button class="button_select_hover" type="submit" name="create">Save</button>
                                <button class="button_cancel_hover" onclick="summa_close()">close</button>
                            </form>

                </div>
                <div class="upper_div">
                <div class="heading_for_the_table">
                    Student <span style="font-weight: bold;"> Details
                </div>
                    <button style="margin-right: -22%;" class="add_button" onclick="summa_open()"><i class="fas fa-plus"></i>&nbsp; Add Student</button>
                </div>
                
                <table border="1" class="main_table">
                <tr>
                    <th>
                        NAME
                    </th>
                    <th>
                        AGE
                    </th>
                    <th>
                        ACTION
                    </th>
                </tr>

                <tr>
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
        echo "<td>
                    <div class=\"button_inside\">
                        <a href='new_php.php?id=" . $row['id'] . "'>
                        <button class=\"innner_edit_button\" onclick=\"update_open()\">
                            // <i class=\"fas fa-pencil-alt\"></i> 
                        </button></a>
                        
                        <button class=\"innner_delete_button\" onclick=\"delete_student()\" > <i class=\"fas fa-trash-alt\"></i></button></a>
                    </div>
                </td>";
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
            </table>
        </div>
   </div>
</body>
<script>
    function openPopup() {
        document.getElementsByClassName("popup").style.display = "block";
    }
    function summa_open(){
document.getElementById("popup").style.display = "block";
}
function summa_close(){
    document.getElementById("popup").style.display = "none";
}
function delete_student(){
    document.getElementById("popup_delete").style.display = "block";
}
function delete_student_close(){
    
    document.getElementById("popup_delete").style.display = "none";
}
function update_open(){
    document.getElementById("popup_delete").style.display = "block";
}
function update_close(){
    document.getElementById("popup_delete").style.display = "block";
}

</script>
</html>
