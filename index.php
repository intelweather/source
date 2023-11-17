<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>INTELWEATHER</title>
    <?php include 'libraries.php';?>
  </head>

  <body class="w3-black">
    <?php include 'nav.php';?>
    <div class="w3-display-container" style="width: 95vw">
      <div class="wrapper five w3-left">
          <span class="float-box">
              <h3 class="float"><img src="images/cloud.png" class="thumbnail" height="100" width="270" /> </h3>
          </span>
      </div>
      <div class="w3-container w3-jumbo w3-middle">
        The Weather You Can Trust
      </div>
      <div class="wrapper five w3-right">
          <span class="float-box">
              <h3 class="float"><img src="images/cloud.png" class="thumbnail" height="66" width="180" /> </h3>
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
      <source src="https://postbot.sasmlange.repl.co/fetchvideo/" type="video/mp4">
      You browser is from the stone age.
    </video>
    <div class="w3-container">
      <button class="w3-blue-gray w3-button" onclick="window.location.href = 'forecast.php'" style="width: 80vw">View Full Forecast >>></button>
    </div>
    
    <?php include 'footer.php';?>
  </body>
</html>
