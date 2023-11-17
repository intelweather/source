<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Forecast - INTELWEATHER</title>
    <?php include 'libraries.php';?>
  </head>
  <body class="w3-black">
    <?php include 'nav.php';?>

    <button onclick="document.getElementById('model').style.display='block'" class="w3-button w3-black">Change Location</button>

    <div id="model" class="w3-modal">
      <div class="w3-modal-content">
        <header class="w3-container w3-blue"> 
          <span onclick="document.getElementById('model').style.display='none'" 
          class="w3-button w3-display-topright">&times;</span>
          <h2>Change Location</h2>
        </header>
        <div class="w3-container w3-black gradientbg">
          <div class="wrapper">
            <div class="label">City*</div>
            <div class="searchBar">
              <input id="city" type="text" placeholder="New York" value="" />
                </svg>
              </button>
            </div>
          </div>
          <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

          <div class="wrapper">
            <div class="label">State</div>
            <div class="searchBar">
              <input id="state" type="text" name="searchQueryInput" placeholder="New Tork" value="" />

                </svg>
              </button>
            </div>
          </div>
          <button class="w3-button" onclick="change_location();">Save</button>
        </div>
      </div>
    </div>

    <div class="w3-container w3-jumbo">
      7 Day Forecast 
    </div>
    
    <div class="w3-container" id="weather_list"></div>

    <?php include 'footer.php';?>
    <script src="forecast.js"></script>
  </body>
</html>


  
Credits - API: https://www.weather.gov/documentation/services-web-api