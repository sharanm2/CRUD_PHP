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

        /* .child {
            width: 100%;
            height: 50vh;
        } */

        /* .upper_div {
            height: 10vh;
            display: flex;
            width: 74%;
            justify-content: space-between;
            align-items: center;
        } */

        /* .main_table {
            width: 81%;
            border-collapse: collapse;
            margin: auto;
        } */

        /* .heading {
            text-align: center;
            font-size: -webkit-xxx-large;
        } */

        .button_inside {}

        /* td {
            text-align: center;
            height: 4vh;
        } */

        .innner_edit_button {
            height: 4vh;
            width: 20%;
            margin-left: 15%;
            background-color: white;
            border: none;
            border-radius: 10%;
            color: #008000;
        }

        .innner_delete_button {
            height: 4vh;
            width: 20%;
            margin-left: 15%;
            background-color: white;
            border: none;
            border-radius: 10%;
            color: red;
        }

        /* .outer_add {
            margin-left: 0.5%;

        } */

        #popup {
            display: none;
            width: 321px;
            height: 301px;
            position: absolute;
            left: 40%;
            top: 25%;
            border: 7px solid;
            border-radius: 10%;
            border: 7px outset;
            /* background-color:red;  */
            background: rgb(53, 50, 55);
            background: linear-gradient(90deg, rgba(53, 50, 55, 1) 20%, rgba(181, 181, 181, 1) 100%, rgba(252, 176, 69, 1) 100%, rgba(255, 255, 255, 1) 100%);
            border-color: #ffeb00;

        }

        #popup_update {
            display: none;
            width: 321px;
            height: 301px;
            position: absolute;
            left: 40%;
            top: 25%;
            border: 7px solid;
            border-radius: 10%;
            border: 7px outset;
            /* background-color:red;  */
            background: rgb(53, 50, 55);
            background: linear-gradient(90deg, rgba(53, 50, 55, 1) 20%, rgba(181, 181, 181, 1) 100%, rgba(252, 176, 69, 1) 100%, rgba(255, 255, 255, 1) 100%);
            border-color: #ffeb00;

        }

        #popup_delete {
            display: none;
            width: 273px;
            height: 144px;
            position: absolute;
            left: 40%;
            top: 30%;
            border: 7px solid;
            border-radius: 10%;
            border: 7px outset;
            /* background-color:red; */
            background: rgb(53, 50, 55);
            background: linear-gradient(90deg, rgba(53, 50, 55, 1) 20%, rgba(181, 181, 181, 1) 100%, rgba(252, 176, 69, 1) 100%, rgba(255, 255, 255, 1) 100%);
            border-color: #dbb4e9;

        }

        .outer_add_button {
            border: none;
            border-radius: 10%;
        }

        .heading_for_the_table {
            margin-left: -38%;
            font-size: xx-large;

        }

        .add_button {
            /* margin-left: 9.5%;
            margin-bottom: 4%; */
            border-radius: 15px;
            height: 34px;
            background-color: #00daff;
            color: white;
            border: 1px;
        }

        .close_button_popup {

            background-color: blue;
            margin-left: 71%;
            margin-top: 78%;
        }

        .form_input {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form_update {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form_input input {
            margin-bottom: 15px;
            /* Adjust the value as needed */
        }

        .name_age_input_box {
            width: 81%;
            height: 20px;
        }

        .button_select_hover:hover {

            border-radius: 5px;
            color: green;
        }

        .button_cancel_hover:hover {

            border-radius: 5px;
            color: red;
        }

        .conform_delete {

            text-align: center;
            padding: 23%;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">

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
        <div class="modal " id="mywModal" style="display:none">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Student Edit</h4>
                        <button type="button" onclick="update_close()" class="btn btn-danger" data-bs-dismiss="modal" style="height: 34px;"> <i class="fas fa-times"></i></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <form action="update.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control mx-auto" placeholder="Enter the New Name" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control mx-auto" placeholder="Enter the New Age" id="age" name="age">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control mx-auto" placeholder="Enter the Age" id="id" name="id">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>


                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="update_close()" style="margin-left: 43%;">Close</button>
                        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
                    </div>

                </div>
            </div>
        </div>


        <div class="modal" id="my_new_student" style="display:none">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Student</h4>
                        <button type="button" onclick="summa_close()" class="btn btn-outline-danger" style="height: 34px;"><i class="fas fa-times"></i></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <form method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control mx-auto" placeholder="Enter the Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control mx-auto" placeholder="Enter the Age" name="age">
                            </div>
                            <button type="submit" name="create" class="btn btn-primary">Save</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-danger" onclick="summa_close()" style="margin-left: 43%;">Close</button>
                    </div>

                </div>
            </div>
        </div>



        <div class="modal" id="delete_stude" style="display:none">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete a Student</h4>
                <button type="button" onclick="delete_student_close()" class="btn btn-outline-danger" style="height: 34px;"> <i class="fas fa-times"></i></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center">
                <form action="delete.php" method="GET">
                    <input name="test" type="hidden" id="id_delete">
                    <div class="btn-group">
                        <button type="submit" name="submit_new" class="btn btn-outline-primary">Yes</button>
                       
                    </div>
                </form><br>
                <button onclick="delete_student_close()" class="btn btn-outline-secondary">No</button>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button class="btn btn-danger" onclick="delete_student_close()">Close</button>
            </div>

        </div>
    </div>
</div>






        <div class="child">
            <div class="outer_add">
                <div id="popup">

                    <div style="margin-top: 26%;">
                        <form method="POST" class=form_input>
                            <input class="name_age_input_box" type="text" placeholder="Enter the Name" name="name"><br>
                            <input class="name_age_input_box" type="text" placeholder="Enter the Age" name="age"><br>
                            <button class="button_select_hover" type="submit" name="create">Save</button>
                            <button class="button_cancel_hover" onclick="summa_close()">close</button>
                        </form>
                    </div>

                </div>
                <div id="popup_delete">
                    <div class="conform_delete">
                        <form action="delete.php" method="GET">
                            <input name="test" type="hidden" id="id_delete">
                            <button type="submit" name="submit_new">Yes</button>

                        </form>
                        <button onclick="delete_student_close()"> No </button>
                    </div>


                </div>

                <div id="popup_update">

                    <form action="update.php" method="POST" class=form_update style="margin-top: 26%;">
                        <input class="name_age_input_box" type="text" placeholder="Enter the New Name" id="studentname" name="name"><br>
                        <input class="name_age_input_box" type="text" placeholder="Enter the New Age" id="studentage" name="age"><br>

                        <input class="name_age_input_box" type="hidden" placeholder="Enter the id" id="student-id" name="student-id"><br>

                        <td><input type="submit" value="save"></td>';

                    </form>
                    <button class="button_cancel_hover" onclick="update_close()" style="margin-left: 43%;">close</button>
                </div>
                <div class="container text-center">
                    <div class="upper_div d-flex justify-content-between align-items-center" style="margin-left: 27%;">
                        <div class="heading_for_the_table">
                            Student <span style="font-weight: bold;"> Details
                        </div>
                        <button class="add_button btn btn-primary" onclick="summa_open()">
                            <i class="fas fa-plus"></i>&nbsp; <b>Add Student</b>
                        </button>
                    </div>
                </div>


                <table border="1" class="table table-hover">
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

                        $sql = "SELECT * FROM demo_table";
                        $conn->query($sql);
                        $result = $conn->query($sql);

                        if ($result) {
                            while ($row = $result->fetch_assoc()) {

                                echo "<tr>";
                                // echo "<td>" . $row['id'] . "</td>";
                                echo "<td class=\"table_data\">" . $row['name'] . "</td>";
                                echo "<td class=\"table_data\">" . $row['age'] . "</td>";
                                echo "<td>
                    <div class=\"button_inside\">
                       
                    
                    <button class=\"innner_edit_button\" onclick=\"update_open(" . $row['id'] . ", '" . $row['name'] . "', '" . $row['age'] . "')\">
                            <i class=\"fas fa-pencil-alt\"></i> 
                        </button>
                        
                        <button class=\"btn btn-danger\" onclick=\"delete_student(" . $row['id'] . ")\" >
                         <i class=\"fas fa-trash-alt\"></i></button></a>
                         </button>
                    </div>
                </td>";
                                echo "</tr>";
                            }
                            // $conn->close();
                        } else {
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

    function summa_open() {
        document.getElementById("my_new_student").style.display = "block";
    }

    function summa_close() {
        document.getElementById("my_new_student").style.display = "none";
    }

    function delete_student(studentid) {
        document.getElementById("id_delete").value = studentid;
        document.getElementById("delete_stude").style.display = "block";
    }

    function delete_student_close() {

        document.getElementById("delete_stude").style.display = "none";
    }

    function update_open(studentid, studentname, studentage, ) {
        document.getElementById("mywModal").style.display = "block";


        document.getElementById("age").value = studentage;
        document.getElementById("name").value = studentname;
        document.getElementById("id").value = studentid;
    }

    function update_close() {
        document.getElementById("mywModal").style.display = "none";
    }
</script>

</html>