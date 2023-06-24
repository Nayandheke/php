<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee</h1>
    <form method="POST" action=""> 
    <label for="Name">Name</label>
    <input type="text" name="name" id="name" > 

    <label for="Department">Department</label>
    <input type="text" name="department" id="department" >

    <label for="Location">Location</label>
    <input type="text" name="location" id="location" >

    <label for="Project">Project</label>
    <input type="text" name="project" id="project" >

    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
include 'connection.php';
if (!$connection) {
    echo "No connection with database";
} else {
    if(isset ($_POST['submit'])) {
        $name = $_POST['name'];
        $department = $_POST['department'];
        $location = $_POST['location'];
        $project = $_POST['project'];

   

        $query = "INSERT INTO employee_tbl (Name , Department, Location , Project) VALUES('$name','$department','$location','$project')";

        echo $query;
        $res = mysqli_query ($connection, $query);
        echo $res;
        if ($res) {
            echo "Data inserted";
        } else {
            echo "Error in data insert";
        }
    }
}
?>