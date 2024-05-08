<?php
require 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name"]) && !empty($_POST["firstname"]) && !empty($_POST["email"]) && !empty($_POST["phone"])) {
        $name = $_POST["name"];
        $firstname = $_POST["firstname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $query = "INSERT INTO user_info (name, firstname, email, phone) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $firstname, $email, $phone);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "<script> alert('YES SIR, Your request is done');</script>";
    } else {
        echo "<script> alert('Please fill in all the fields');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Appointment</title>
</head>

<body>
    <form action="" method="post" autocomplete="off" class="form">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="firstname">FirstName:</label>
        <input type="text" name="firstname" id="firstname" required>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required>
        <button type="submit" name="submit" class="button">Request an appointment</button>
    </form>

</body>

</html>