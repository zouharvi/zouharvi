<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description"
    content="Vilém Zouhar is an PhD student at ETH Zürich working on evaluation and multilingual NLP.">
  <meta name="keywords"
    content="Vilém Zouhar is an PhD student at ETH Zürich working on evaluation and multilingual NLP.">
  <meta name="author" content="Vilém Zouhar">

  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Merriweather&display=swap" rel="stylesheet">

  <link rel='stylesheet' type='text/css' href='src/style.css?v=14'>
  <link rel='icon' type='image/png' href='src/favicon.png'>
  <title>Vilém Zouhar</title>
  <meta name="viewport" content="width=900px">
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
    <div id='menu'>
      <img id='portrait' src='src/portrait.jpg?v=1' alt='photo of Vilém' style='width: 201px; min-height: 268px; border: 2px solid black;'>
      <div style="display: inline-block; vertical-align: top; margin-top: -27px;">
        <h1
          style='font-size: 2em; display: inline-block; font-weight: bold; border: 2px solid black; padding: 2px;'>
          Vilém Zouhar
        </h1>
        <br>
        PhD at ETH Zurich<br>
        Natural Language Processing<br>
        <span style="font-weight: bold;">
          On the academic job market for faculty positions!
        </span>
        <br>
        <br>
        <a href="mailto:vzouhar@ethz.ch">vzouhar@ethz.ch</a>&nbsp;
        <a href="https://scholar.google.com/citations?user=2EUDwtkAAAAJ">Google Scholar</a>
        <br>
        <div id="navmenu" style="margin-top: 40px; margin-bottom: 50px;">
          <a href="?page=about">about</a>
          <a href="?page=research">research</a>
          <a href="?page=teaching">teaching</a>
          <a href="?page=service">service</a>
          <a href="?page=misc">typesetting</a>
        </div>
      </div>
    </div>


    <div id='content' style='margin-top: 20px;'>
      <?php
      $page = "about";
      if (isset($_GET["page"])) {
        $page = $_GET["page"];
      }
      // check that it's an allowed page
      $allowed_pages = array("about", "research", "teaching", "service", "misc");
      if (!in_array($page, $allowed_pages)) {
        $page = "about";
      }
      include("pages/" . $page . ".php");

      // highlight current menu item
      echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
          document.querySelectorAll('#navmenu a').forEach(function(element) {
          let page = element.getAttribute('href');
            if (page == '?page=" . $page . "' || (page == '?page=about' && '" . $page . "' == '')) {
              element.classList.add('active');
            }
          });
        });
      </script>";
      ?>
    </div>
</body>

</html>