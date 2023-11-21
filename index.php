<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>INTELWEATHER</title>
    <?php include 'libraries.php';?>
    <?php include 'nav.php';?>
  </head>
  <body class="w3-black">
    
    <div class="w3-diplay-container" style="width: 100vw; z-index: -2;">
      <video autoplay loop muted plays-inline style="width: 100vw; ">
        <source src="images/mainbanner.mp4" type="video/mp4">
      </video>
      <!-- <div class="hero"> Oh, um I modified the css slightly for mobile...
      <video autoplay loop muted plays-inline class="back-video">
        <source src="images/mainbanner.mp4" type="video/mp4">
      </video>
      <body class="w3-black">
        <div class="loader"></div>
        <script>
          window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");
    
            loader.classList.add("loader--hidden");
    
            loader.addEventListener("transitionend", () => {
              document.body.removeChild(loader);
            });
          });
        </script>
      </body>
      </div>
       --> 
      <div id="bannertext">
        <div>
          <h1 class="w3-jumbo">Welcome!</h1>
          <div>
            <p>Want a quick way to get accurate weather quick? Want to be notified every day of the weather that will occur that day on platforms like twitter and discord? Well, you have come to the right place. INTELWEATHER provides an accurate 7 day forecast, articles about why the weather is the way it is, and much more.</p>
          </div> 
          <a href="forecast.php" class="w3-btn w3-border w3-round">7 Day Forecast</a>
          <a href="#down" class="w3-btn w3-border w3-round">Scroll Down</a>
        </div>
      </div>
    </div>

    <div class="w3-display-container" ">
      <div class="wrapper five w3-left">
          <span class="float-box">
              <h3 class="float"><img src="images/cloud.png" class="thumbnail" height="100" width="270" /> </h3>
          </span>
      </div>
      <div class="w3-container w3-jumbo w3-middle">
        <a name="down">
          The Weather You Can Trust
        </a>
      </div>
      <div class="wrapper five w3-right">
          <span class="float-box">
            <h3 class="float1"><img src="images/cloud.png" class="thumbnail" height="66" width="180" /> </h3>
          </span>
      </div>
    </div>

    <div class="w3-container">
      <h2>Why You Should Use INTELWEATHER</h2>
      <div class="w3-container w3-row custom-row">
        <div class="w3-container w3-third">
          <div class="w3-card-4 w3-container w3-black custom-card" data-aos="fade-left">
            <h3>Accurate</h3>
            <p>
              At INTELWEATHER, we want to serve you with the most reliable and up-to-date weather forcast so you finaly have a weather app that you can trust. With live, updating infomation straight from the govement's distribution of public data, you can be assured that your focast is from the work of qualified experts. 
            </p>
          </div>
          <br>
        </div>
        <div class="w3-container w3-third">
          <div class="w3-card-4 w3-container w3-black custom-card" data-aos="flip-up">
            <h3>Fast</h3>
            <p>
              Did you know that the human attention span is 25% less than in 2000? The human attention span has fallen all the way down to 8.25 seconds, which is less than a goldfish. Therefore at INTELWEATHER, we understand that our app needs to be quick. With a loading time less than two seconds, you will never see a loading bar on INTELWEATHER.
            </p>
          </div>
          <br>
        </div>
        <div class="w3-container w3-third">
          <div class="w3-card-4 w3-container w3-black custom-card" data-aos="fade-right">
            <h3>Personalized</h3>
            <p>
              INTELWEATHER is not the product of some giant company serching to making millions. INTELWEATHER, is made to provide simple ad-free weather. You can see reminders of our personalztion everywhere from images of St. Anne School to the simple color scheme.  
            </p>
          </div>
          <br>
        </div>
      </div>
    </div>
    <br><br>    
    <h2>Today's Weather</h2>
    <video controls width="500px" style="max-width: 98vw" data-aos="zoom-in">
      <source src="https://intelweatherbot.onrender.com/fetchvideo/" type="video/mp4">
      You browser is from the stone age.
    </video>
    <div class="w3-container">
      <button class="w3-blue-gray w3-button" onclick="window.location.href = 'forecast.php'" style="width: 80vw">View Full Forecast >>></button>
    </div>

    <?php include 'footer.php';?>
    <script>
      var banner_text = document.getElementById("bannertext");
      window.addEventListener('resize', function(event) {
        if (window.innerWidth > 1263) {
          banner_text.classList.add("w3-display-middle");
          banner_text.classList.remove("w3-container");
        } else {
          banner_text.classList.add("w3-container");
          banner_text.classList.remove("w3-display-middle")
        }
      }, true);
    </script>
</html>
