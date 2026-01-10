<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description"
    content="Vilém Zouhar is an PhD student at ETH Zürich working on user-centered NLP (evaluation, quality estimation).">
  <meta name="keywords"
    content="Vilém Zouhar is an PhD student at ETH Zürich working on user-centered NLP (evaluation, quality estimation).">
  <meta name="author" content="Vilém Zouhar">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
  <link rel='stylesheet' type='text/css' href='src/style.css?v=12'>
  <link rel='icon' type='image/png' href='src/favicon.png'>
  <title>Vilém Zouhar</title>
  <meta name="viewport" content="width=530px">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QT17P5TW51"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'G-QT17P5TW51');
</script>

<body style='padding-top: 50px; padding-bottom: 50px;'>
  <div id='whole'>
    <div id='menu' style="width: 100%;">
      <div style="display: inline-block;">
        <h1
          style='font-size: 2em; display: inline-block; font-weight: bold; border: 2px solid black; padding: 2px; margin-bottom: 15px'>
          Vilém Zouhar
        </h1>
        <br>
        PhD at ETH Zurich, Natural Language Processing<br>
        <span style="font-weight: bold;">
          Currently on the academic job market for faculty positions!
        </span>
        <br>
        <br>
        <a href="mailto:vzouhar@ethz.ch">vzouhar@ethz.ch</a>
        <a href="https://scholar.google.com/citations?user=2EUDwtkAAAAJ">Google Scholar</a>
        <br>
      </div>
      <img id='portrait' src='src/portrait.jpg' alt='photo of Vilém'
        style='width: 200px; float: right; border: 2px solid black; margin-top: 30px;'>
      <br>
    </div>

    <div id="navmenu" style="margin-top: 30px; display: inline-block;">
      <a href="index.php">About</a>
      <a href="index.php?page=research">Research</a>
      <a href="index.php?page=teaching">Teaching</a>
      <a href="index.php?page=service">Service</a>
    </div>
    <div id='content' style='margin-top: 20px;'>
      <?php
      $page = "about";
      if (isset($_GET["page"])) {
        $page = $_GET["page"];
      }
      // check that it's an allowed page
      $allowed_pages = array("about", "research", "teaching", "service");
      if (!in_array($page, $allowed_pages)) {
        $page = "about";
      }
      include("pages/" . $page . ".php");

      // highlight current menu item
      echo "<script>
        $(document).ready(function() {
          $('#navmenu a').each(function() {
            if ($(this).attr('href') == 'index.php" . ($page != "about" ? "?page=" . $page : "") . "') {
              $(this).addClass('active');
            }
          });
        });
      </script>";
      ?>
    </div>
</body>

</html>