<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables and escape them to prevent SQL injection
    $name = $con->real_escape_string($_POST['name']);
    $gender = $con->real_escape_string($_POST['gender']);
    $age = $con->real_escape_string($_POST['age']);
    $email = $con->real_escape_string($_POST['email']);
    $phone = $con->real_escape_string($_POST['phone']);
    $desc = $con->real_escape_string($_POST['desc']);

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES 
    ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) === true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to East Central Railway</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <img class="bg" src="img/bg.webp" alt="East-Central-Railway">
    <div class="container">
        <h1>Welcome to East Central Railway</h3>
        <p>Enter your details and submit this form to confirm your seat </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you .</p>";
        }
       ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'textname', '23', 'male', 'this@this.com', '9999999999', 'this is my first every php myadmin message', '2024-06-27 07:36:28.000000'); -->
</body>
</html>