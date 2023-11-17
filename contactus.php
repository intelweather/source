<!DOCTYPE html>
<html lang="en">
  
<head>
  <?php include 'libraries.php';?>
  
</head>
<body>
    <?php include 'nav.php';?>

    <h1>Contact Us</h1>
    <p>
      We love to hear your feedback! If you like this app, hate it, or have an issue to report about it do not hesitate to reach out to us. Send us an email at <a href="mailto:intelweather@protonmail.com">intelweather@protonmail.com</a> or fill out the form below.
    </p>
    <form action="https://formsubmit.co/intelweather@protonmail.com" method="POST" class="w3-container">
      <label style="font-size: 1.5em;" for="name">Name</b></label>
      <input class="w3-input w3-black w3-hover-white" type="text" name="name" id="name" required>

      <label style="font-size: 1.5em;" for="email">Email (optional)</b></label>
      <input class="w3-input w3-black w3-hover-white" type="email" name="email" id="email">
      
      <label style="font-size: 1.5em;" for="continent">Continent</b></label>
      <select name="continent" id="continent" required class="w3-select w3-black w3-hover-white">
        <option>Africa</option>
        <option>Antarctica</option>
        <option>Asia</option>
        <option>Australia</option>
        <option>Europe</option>
        <option>North America</option>
        <option>South America</option>
      </select>
      <label style="font-size: 1.5em;" for="message">Message</b></label>
      <textarea name="Message" required id="message" class="w3-black" style="width: 95vw; height: 200px;"></textarea>
      <button type="submit" class="w3-button w3-blue-gray  w3-hover-white">Send</button>
    </form>

<?php include 'footer.php';?>
</body>
</html>