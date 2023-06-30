<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description" content="Portfolio and basic information about me, Vilém Zouhar (Vilda).">
  <meta name="keywords" content="Vilém Zouhar, zouharvi, researcher, deep learning, NLP, programmer, portfolio, student, mathematics, TypeScript, Python, Linguistics, Research">
  <meta name="author" content="Vilém Zouhar">
  <link href="https://fonts.googleapis.com/css2?family=Inria+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inria+Serif" rel="stylesheet">
  <link rel='stylesheet' type='text/css'  href='src/style.css?v=3'>
  <link rel='icon'       type='image/png' href='src/favicon.png'>
  <title>Vilda | Vilém Zouhar</title>
  <meta name="viewport" content="width=device-width">
</head>

<body style='padding-top: 50px; padding-bottom: 100px; background-color: #fafafa;'>
  <div id='whole' style='max-width: 950px; margin:auto; border: 3px solid #e3e3e3; border-radius: 10px; background-color: #fff;'> 
    <div id='menu' style='display: inline-block; margin-right: 20px; vertical-align: top; font-family: "Inria Serif"'>
      <header id='name' style='margin-left: 20px; margin-top: 20px; font-size: 1.2em;'>Vilém Zouhar</header>
      <img
        src='src/portrait_2.webp'
        alt='photo of mountains and trees'
        style='width: 120px; margin-left: 15px; margin-top: 10px;'
      >
      <nav style="width: 150px; margin-left: -5px;">
        <ul>
          <li><a href='?p=about'>About</a></li>
          <li><a href='?p=publications'>Publications</a>
          <li><a href='?p=projects'>Projects</a>
        </ul>
      </nav>
      <img
        src='src/portrait_1.webp'
        alt='photo of Vilém'
        style='width: 120px; margin-left: 15px;'
        onmouseover="this.src='src/portrait_3.webp'"
        onmouseout="this.src='src/portrait_1.webp'" 
      >
    </div>

    <main id='container' style='display: inline-block; width: 760px;'>
      <div style='width: 100%'>
        <?php
            $allowed = array('about', 'projects', 'publications');
            if(in_array($_GET['p'], $allowed))
                include("pages/". $_GET['p'] . ".php");
            else
                include("pages/about.php");
        ?>
      </div>    
    </main>
  </div>
</body>
</html>
