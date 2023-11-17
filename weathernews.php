<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>INTELWEATHER</title>
    <?php include 'libraries.php';?>
  </head>
  <body class="w3-black">
    <?php include 'nav.php';?>

    <!--<div class="w3-display-container" style="width: 95vw">-->
    <div class="wrapper five w3-left">
        <span class="float-box">
            <h3 class="float"><img src="images/lightning.png" class="thumbnail" height="125" width="80" style = "margin-left: 25px" /> </h3>
        </span>-->
  <div class="w3-container w3-jumbo">
    Disaster Radar
      
  </div>
    <!--</span>
      <div class="wrapper five w3-right">
      <span class="float-box">
          <h3 class="float"><img src="images/earthquake.png" class="thumbnail" height="66" width="180" style = "margin-right: 25px"/> </h3>-->
      </span>
    </div>

    <div class="w3-container">
      <?php
        $feeds = simplexml_load_file("https://www.gdacs.org/xml/rss.xml")->channel;
        $events = [];

        foreach ($feeds->item as $item) {
          if(!in_array((string)$item->title, $events)) {
            $events[] = (string)$item->title;
            
            $title = $item->title;
            $link = $item->link;
            $description = $item->description;
            $postDate = $item->pubDate;
            $pubDate = date('D, d M Y',strtotime($postDate));
      ?>
            <div class="w3-card w3-black" data-aos="flip-up">
              <h2><a href="<?php echo $link; ?>" target="_blank"><?php echo $title; ?></a></h2>
              <span><?php echo $pubDate; ?></span>
              <p>
                <?php echo $description; ?> <a href="<?php echo $link; ?>" target="_blank">Read more</a>
              </p>
            </div>
          <?php } ?>
        <?php } ?>
    </div>
    
    <?php include 'footer.php';?>
  </body>
</html>
