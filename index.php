<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description" content=", Vilém Zouhar (Vilda).">
  <meta name="keywords" content="Vilém Zouhar is an PhD student at ETH Zürich working on user-centered NLP (trust, quality/complexity estimation).">
  <meta name="author" content="Vilém Zouhar">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans" rel="stylesheet">
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
    <div id='menu' style="width: 100%;">
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
      <header id='name' style='font-size: 2em; display: inline-block; margin-left: 10px; vertical-align: bottom;'>
        <a href="/" style="color: black;">
          <span style="letter-spacing: 0.15em;">Vilém</span>
          <br style="display: block; margin: -5px 0;">
          Zouhar
        </a>
        <div style='font-size: 0.3em; color: gray; letter-spacing: 0.15em; font-weight: normal; margin-bottom: 10px;'>updated Jan-2024</div>
      </header>
      <span id="header_nothing"></span>
      
      <!-- I'm always looking for a collaboration (and have a list of project ideas I'd like to move forward).
      Please do <b>send me unsolicited emails</b> if you have a project you'd like to collaborate/work on.
      Researchers, PhD & master students are welcome. -->

      <ul style="display: inline-block; list-style-type: none;">
        <li><a href="https://scholar.google.com/citations?user=2EUDwtkAAAAJ">Google Scholar</a></li>
        <li><a href="https://www.semanticscholar.org/author/Vilém-Zouhar/1429837660">Semantic Scholar</a></li>
      </ul>
      <ul style="display: inline-block; list-style-type: none; margin-left: -10px; margin-right: -10px;">
        <li><a href="https://github.com/zouharvi/vilda.net/raw/master/cv/cv.pdf">CV</a></li>
        <li><a href="https://github.com/zouharvi/">GitHub</a></li>
      </ul>
      <ul style="display: inline-block; list-style-type: none;">
            <li><a href='mailto:vilem.zouhar@gmail.com'>vilem.zouhar@gmail.com</a></li>
            <li><a href='https://twitter.com/zouharvi'>@zouharvi</a></li>
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
      <?php include("pages/about.php"); ?>
    </div>    
  </div>
</body>
</html>
