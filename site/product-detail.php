<?php


require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM producten Where id = $id";

$result  = mysqli_query($conn, $sql);

$product = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <div class="container">
            <form action="">
                <div class="flex-container">
                  
        </form>
        <div>

    </main>

    <?php include 'footer.php'; ?>
</body>

</html>