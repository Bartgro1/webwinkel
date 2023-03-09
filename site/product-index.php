<?php
require 'database.php';

$sql = "SELECT * FROM producten";
$result  = mysqli_query($conn, $sql);
$producten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style2.css">
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <main>
    <div class="container">
      <div class="outer">
        <img class="image-1" src="Images/Afbeelding.png" alt="">
        <h2>Van hoofd naar hart & lichaam</h2>
        <p class="hoofd-tekst"> Steeds meer mensen voelen de behoefte om meer vanuit hun hart en intuïtie te leven. Deze
          tijd gaat om
          authenticiteit, teruggaan naar de basis en het creëren van het leven dat echt bij je past.</p>
      </div>

      <div class="featured-div">
        <div class="flex-container">
          <?php foreach ($producten as $product) : ?>
            <div class="flex-box">
              <h3> <?php echo $product["naam"] ?></h3>
              <p> <?php echo $product["omschrijving"] ?> </p>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <!--
      <div class="blogs-outer">

        <div class="featured-content">
          <div class="item-1">
            <img class="image-2" src="Images/Afbeelding2.jpg" alt="">
            <h3 class="featured-hoofdtekst">
              Highly sensitive and feeling overwhelmed? Connect with your values and listen within
            </h3>
            <p class="featured-tekst">
              Do you try to keep up with the pace of life you see around you, working too hard, feeling out of sync
              with your body & soul?
            </p>
          </div>
          <div class="item-2">
            <h3 class="bloglijst-header"> Meer Blogs:</h3>
            <ul class="bloglijst">
              <li>Accepting yourself when you are highly sensitive</li>
              <li>liefhebben. Vertrouw jij op je inner voice?</li>
              <li> yourself. Do you trust your inner voice?</li>
              <li> je met je hart = verbind je met je intuïtie</li>
              <li> connect with your heart = to connect with your intuition</li>
              <li> intuïtie is je beste vriend- Sabijn Arts</li>
              <li> je verlangen, verhelder jouw Core Desired Feelings</li>
              <li>naar je behoeftes. Het klinkt zo eenvoudig…</li>
              <li> vanuit je hart, hoe doe je dat?</li>
              <li> schaam jij je voor?</li>
            </ul>
          </div>
        </div>
      </div>
     
        <div class="sabijn-outer">
          <img class="image-3" src="Images/Afbeelding3.jpg" alt="">
          <p>
            Sabijn Arts is psycholoog en lifecoach. Zij heeft al ruim 15 jaar een succesvolle praktijk, waarin zij haar
            academisch en post-academische psychologische achtergrond combineert met gegrond intuïtie- en energiewerk.
            Momenteel begeleidt ze jong volwassenen en volwassenen met het helder krijgen van hun koers, vertrouwen op
            hun intuïtie en innerlijke kracht en het creëren van een leven wat gebaseerd is op wat hen echt gelukkig
            maakt.
          </p>
        </div>
      </div>
      -->
  </main>
  <?php include 'footer.php'; ?>

</body>

</html>