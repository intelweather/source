<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>About INTELWEATHER</title>
    <?php include 'libraries.php';?>
  </head>
  <body class="w3-black">
    <?php include 'nav.php';?>

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

    <?php include 'footer.php';?>
  </body>
</html>



api for finding latitude and longitude?
api key: HBqzfroSyQom6L9fVphJwg==K5ofz2WJJab57Bgc
https://api-ninjas.com/api/geocoding
https://api.api-ninjas.com/v1/geocoding?city=Kyoto &country=Japan
