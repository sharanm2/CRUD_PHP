<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All In One</title>

    <style>
        .outerr_crud_body
        {
            width:100%;
            height:100vh;
        }
    </style>
</head>
<body>
    <div class ="outerr_crud_body">
 
      <div class="inner_body">

        <table>
            <tbody>
                <?php include "read.php";?>
            </tbody>
        </table>
        <?php include "index.php";?>
     </div>


    </div>




</body>
</html>