<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>About INTELWEATHER</title>
    <?php include 'libraries.php';?>
  </head>
  <body class="w3-black">
    <?php include 'nav.php';?>
    <img src="images/aboutusbanner.webp" style=" width: 100vw;" alt="INTELWEATHER Banner">

    <div class="w3-container w3-jumbo">
      About
    </div>

    <p>
      INTELWEATHER is a weather service for the Laguna Niguel area. The map below shows the focus area. The farther you get from the focus, the less accurate the weather will be.   
    </p>

    <figure>
      <a href="https://www.keene.edu/campus/maps/tool/?coordinates=-117.7321343%2C%2033.4970393%0A-117.7276153%2C%2033.4747699%0A-117.7008618%2C%2033.4785440%0A-117.7053757%2C%2033.5008140%0A-117.7321343%2C%2033.4970393">
        <img src="images/map.webp" width="400" style="max-width: 80vw;">
        <figcaption>Source</figcaption>
      </a>
    </figure>

    <p>
      INTELWEATHER runs on API's from <a href="https://www.weather.gov/documentation/services-web-api">weather.gov</a>, which makes this app possible. In addition, this app uses GDACS rss feed to update live disasters around the world. GDAS gets their data from a compation project between the United Nations and the European Commission.
    </p>

    <h2>Our Socials</h2>
    <br>
    <h3>Github</h3>
      <p>Did you know that INTELWEATHER is open sourced? This means that visiting our Github page shows all our bug fixes and the code that INTELWEATHER runs on. This means that</p>
    <h3>Discord</h3>
      <p>INTELWEATHER also has a Discord server. This is a place to talk with fellow users and discuss the weather and just have fun overall. It also posts nationwide weather updates in #nationwideweatherupdates and weather updates for St. Anne School in #weatherupdates</p>
    <h3>X</h3>
      <p>INTELWEATHER has a Twitter/X profile at @INTELWEATHER. This account posts the weather at St. Anne School every day, with information such as the temperature, weather that day, and much more information</p>
    <h3>Email</h3>
      <p>INTELWEATHER's email adress is intelweather@protonmail.com. Use the Contact Us in order to send us suggestions!</p>
    <?php include 'footer.php';?>
  </body>
</html>