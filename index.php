<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=" author " content=" Ikram Farah, Tejas Patel, Glenda Andaur, SeyedehTahereh Houlari ">
    <meta name=" description " content=" Assignment 2">
    <meta name=" keywords " content=" assignment2,cst8285,htmlcode">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assignment2.css">
    <script src="group26.js" type="text/javascript" defer></script>
</head>

<body>
        <?php include "header.php"; ?>

    <h1 class="logoutHead">Welcome
        <?php echo $row["name"]; ?>
    </h1>
    <p class="para3">Click Here to <a href="logout.php">Logout</a></p>
        <?php include "footer.php"; ?>

</body>

</html>
