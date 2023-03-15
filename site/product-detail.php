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
                <div class="panel">
                    <div class="panel-body c-c-k">
                        <div class="price">
                            <h4> Price</h4>
                            <div class="order-price">

                                <p class="product-naam"> <?php echo $product['naam'] ?> </p>

                                <p class="product-prijs"><?php echo $product['prijs'] ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="order-summary">
                            <h4> Order summary</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="dynamic-text"> <?php echo $product['naam'] ?> </td>
                                        <td></td>
                                        <td class="dynamic-text text-right"></td>
                                    </tr>
                                    <tr class="redeem-coupon-box"></tr>
                                    <tr class="coupon-input hide"></tr>
                                    <tr class="vat-details dynamic-text"></tr>
                                    <td> VAT @ 21%</td>
                                    <td></td>
                                    <td class="text-right"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="order-summary total-price">
                                <p>Total</p>
                            </div>
                            <hr>
            </form>
            <div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>