<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Forecast - INTELWEATHER</title>
    <?php include 'libraries.php';?>
  </head>
  <body class="w3-black">
    <?php include 'nav.php';?>
    
    <div id="model" class="w3-modal">
      <div class="w3-modal-content">
        <header class="w3-container w3-blue"> 
          <span onclick="close_model()" class="w3-button w3-display-topright w3-xlarge">&times;</span>
          <h2>Change Location</h2>
        </header>
        <div class="w3-container w3-black gradientbg">
          <div class="label">City*</div>
          <input id="city" type="text" placeholder="New York" class="w3-input w3-black w3-hover-white" />

          <div class="label">State</div>
          <input id="state" type="text" placeholder="New Tork" class="w3-input w3-black w3-hover-white" />
          <button class="w3-button" onclick="search();">Search</button>
          <br><br>
          <div id="search_list"></div>
        </div>
      </div>
    </div>

    <div class="w3-container w3-jumbo">
      7 Day Forecast 
    </div>

    <button onclick="document.getElementById('model').style.display='block'" class="w3-button w3-black">Change Location</button>
    <button onclick="reset_location()" class="w3-button w3-black">Reset Location</button>
    <p>
      <span class="material-symbols-outlined" style="vertical-align: bottom;">location_on</span>
      <span id="city_name"></span>
    </p>
    <div class="w3-container" id="weather_list">
      Something went wrong...

      <br><br>
      Press reload to try again.
    </div>

    <?php include 'footer.php';?>
    <script src="forecast.js"></script>
  </body>
</html>
