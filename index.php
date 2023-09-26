<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description" content=", Vilém Zouhar (Vilda).">
  <meta name="keywords" content="Vilém Zouhar is an PhD student at ETH Zürich working on user-centered NLP (trust, quality/complexity estimation).">
  <meta name="author" content="Vilém Zouhar">
  <link href="https://fonts.googleapis.com/css2?family=Inria+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inria+Serif" rel="stylesheet">
  <link rel='stylesheet' type='text/css'  href='src/style.css?v=5'>
  <link rel='icon'       type='image/png' href='src/favicon.png'>
  <title>(Vilda) Vilém Zouhar</title>
  <meta name="viewport" content="width=550px">
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QT17P5TW51"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QT17P5TW51');
</script>

<body style='padding-top: 50px; padding-bottom: 50px;'>
  <div id='whole'> 
    <div id='menu' style="width: 100%; vertical-align: top">
      <img
        src='src/portrait_1.webp'
        alt='photo of Vilém'
        style='width: 100px; margin-left: 15px;'
        onmouseover="this.src='src/portrait_3.webp'"
        onmouseout="this.src='src/portrait_1.webp'" 
      >
      <img
        src='src/portrait_3.webp'
        style="width:0px"
      >
      <header id='name' style='font-size: 2em; display: inline-block; margin-left: 10pt;'>
        <a href="/" style="color: black;">
          <span style="letter-spacing: 0.15em;">Vilém</span>
            <br>Zouhar
        </a>
      </header>
      <span id="header_nothing"></span>
      <ul style="display: inline-block; text-align: left;">
        <li><a href='?p=about'>About</a></li>
        <li><a href='?p=publications'>Publications</a></li>
        <li><a href='?p=projects'>Projects</a></li>
      </ul>
      <img
        id="img_trees"
        src='src/portrait_2.webp'
        alt='photo of mountains and trees'
        style='width: 100px; margin-left: 15px; margin-top: 10px; margin-right: 15px; float: right;'
      >
    </div>

    <hr>

    <div style='width: 100%;'>
      <?php
          $allowed = array('about', 'projects', 'publications');
          if(in_array($_GET['p'], $allowed))
              include("pages/". $_GET['p'] . ".php");
          else
              include("pages/about.php");
      ?>
    </div>    
  </div>
</body>
</html>
