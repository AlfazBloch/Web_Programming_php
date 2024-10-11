<?php
    $connect = mysqli_connect("localhost","root","","mca_4");
    if(isset($_POST["submit"])){
       $name = $_POST["name"];
       $age = $_POST["age"];
       $course = $_POST["course"];

       $query = "INSERT INTO STUDENT(NAME,AGE,COURSE) VALUES('$name','$age','$course')";

       $result = mysqli_query($connect,$query);

       if($result == 1){
           echo "<script>alert('Inserted');</script>";
       }else{
        echo "<script>alert('Not Inserted');</script>";
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Display</title>
    <style>
        /* Reset and Basic Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Form Styles */
        .form-container {
            margin-top: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Data</h1>
        
        <!-- Data Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM STUDENT";
                    $result = mysqli_query($connect,$query);
                    $row_count = mysqli_num_rows($result);

                    for($i=1;$i<=$row_count;$i++){

                        $record = mysqli_fetch_row($result);

                        
                ?>
                <!-- Dummy Data -->
                <tr>
                    <?php
                        for($j=0;$j<count($record);$j++){
                    ?>
                        <td><?= $record[$j] ?></td>
                    <?php
                        }
                    ?>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <!-- Input Form -->
        <div class="form-container">
            <h2>Add New Student</h2>
            <form id="studentForm" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
                
                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required>
                
                <button type="submit" name="submit">Add Student</button>
            </form>
        </div>
    </div>
</body>
</html>