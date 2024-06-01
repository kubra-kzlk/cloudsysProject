<!DOCTYPE html>
<html lang="nl-BE">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="webshop illumination" />
    <meta name="keywords" content="ILLUMINATION, illumination, webshop" />
    <meta name="author" content="Kubra Kizilkilic" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <title>ILLUMINATION</title>
  </head>

  <!--correcte mappen- en bestandenstructuur-->
  <!-- correcte HTML5-elementen op de juiste plaats -->
  <!--bronvermeldingen bij afbeeldingen (figcaption)-->
  <!--zoekbalk + knop aanwezig-->
  <body>
    <header>
      <a class="logo" href="index.html"
        ><img src="assets/images/logo.png" alt="Logo" /> ILLUMINATION</a
      >
      <nav>
        <a href="shop.html" >shop</a>
        <a href="contact.html" >contact</a>
        <a href="klanten.html">klanten</a>
      </nav>

      <form id="search" action="#">
        <input type="search" name="zoeken" id="zoek" placeholder="zoeken..." />
        <a href="#"><img src="assets/images/searchlogo.png" /></a> 
        <input type="submit" value="zoek" />
      </form>
    </header>
    <section id="teaser">
      <img src="assets/images/banner.jpeg" />
      <h5>Verlicht jouw moment met een van onze lampen</h5>
    </section>

    <main>
      <section id="home">
        <article>
          <figure class="prod_mainpage_pic">
            <a href="P1_Krisscross.html"
              ><img src="assets/images/Afbeelding1.jpg"
            /></a>
            <figcaption>
              Kriscros</figcaption>
          </figure>
          <p></p>
          <h7>design hanglamp kriscros - &#8364 175 </h7>
        </article>

        <article>
          <figure class="prod_mainpage_pic">
            <a href="P2_Rowan.html"> <img src="assets/images/Afbeelding2.jpg" /></a>
           <figcaption>Rowan</figcaption>
          </figure>
          <p></p>
          <h7>design hanglamp rowan - &#8364  455</h7>
        </article>

        <article>
          <figure class="prod_mainpage_pic">
            <a href="P3_Michelle.html" ><img src="assets/images/Afbeelding3.jpg" /></a>
            <figcaption>Michelle</figcaption>
          </figure>
          <p></p>
          <h7>oosterse hanglamp michele - &#8364 123 </h7>
        </article>
      </section>
      <br />
      <br />
      <section id="personalinfo">
        <figure>
          <img src="assets/images/pro_foto.jpg" />
        </figure>
        <h7>
          Omdat ik van mening ben dat licht heel de sfeer van een kamer kan
          veranderen, heb ik besloten om voor lampen te kiezen. Een lamp is het
          enige wat je in een kamer aan het plafond als decoratie kunt
          gebruiken. Ze zijn de sfeermakers van ieder interieur. Je hebt
          verschillende soorten lampen, van reusachtige kroonluchters tot een
          kleine led-bulbpen.De centrale ligging in de ruimte zorgt ervoor dat een slechte humeur wegsmelt, zodra er licht binnenvalt  in de ruimte.
          <br />
          <br />
          <br />
          <br />
        </h7>
      </section>
    </main>

    <footer>
      <article class="left">
        <p>CONTACT INFO</p>
        <p>
          e-mail:<a href="mailto:kubra.kizilkilic@student.ap.be">
            kubra.kizilkilic@student.ap.be</a
          >
        </p>
        <p>Noorderplaats 2, 2000 Antwerpen</p>
      </article>
      <article class="right">
        <p>&copy; 2023 ILLUMINATION</p>
      </article>
      <article>
        <ul class="socials">
          <li>
            <a href="#" target="_blank"
              ><img
                src="assets/images/iconyoutube.png"
                width="126px"
                height="126px"
            /></a>
          </li>
          <li>
            <a href="#" target="_blank"
              ><img
                src="assets/images/iconinstagram.png"
                width="126px"
                height="126px"
            /></a>
          </li>
          <li>
            <a href="#" target="_blank"
              ><img
                src="assets/images/iconfacebook.png"
                width="126px"
                height="126px"
            /></a>
          </li>
          <li>
            <a href="#" target="_blank"
              ><img
                src="assets/images/icontwitter.png"
                width="126px"
                height="126px"
            /></a>
          </li>
        </ul>
      </article>
    </footer>
  </body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$databaseHost = 'db';
$databaseUsername = 'root';
$databasePassword = 'root';
$databaseName = 'backend';

$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Insert visitor data into the database with an auto-incremented primary key
$sql = "INSERT INTO users () VALUES ()"; // Assuming 'idusers' is an auto-incremented primary key
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close connection
$mysqli->close();
?>