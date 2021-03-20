<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description" content="Portfolio and basic information about me, Vilém Zouhar (Vilda).">
  <meta name="keywords" content="Vilém Zouhar, zouharvi, programmer, portfolio, student, mathematics, TypeScript, Python, Linguistics, Research">
  <meta name="author" content="Vilém Zouhar">
  <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
  <link rel='stylesheet' type='text/css'  href='css/style.css'>
  <link rel='icon'       type='image/png' href='src/favicon.png'>
  <title>Vilda | Vilém Zouhar</title>
  <meta name="viewport" content="width=device-width">
</head>

<body style='padding-top: 50px; padding-bottom: 100px; background-color: #F0F0F0;'>
  <div id='whole' style='max-width: 910px; margin:auto;'>
    <div id='menu' style='display: inline-block; max-width: 200px; margin-right: 20px; vertical-align: top;'>
      <header id='name' style='margin-left: 20px; margin-top: 20px;'>Vilém Zouhar</header>
      <img src='src/portrait.webp' alt='portrait' style='width: 120px; margin-left: 15px; margin-top: 10px;'>
      <nav>
        <ul>
          <li><a href='?p=about'>About</a></li>
          <li><a href='?p=contact'>Contact</a></li>
        </ul>
      </nav>
    </div>
    <main id='container' style='display: inline-block; max-width: 700px; min-width: 300px;'>
      <div style='width: 100%'>
        <?php
            $allowed = array('about', 'contact');
            if(in_array($_GET['p'], $allowed) )
                echo file_get_contents("pages/". $_GET['p'] . ".html");
            else
                echo file_get_contents("pages/about.html");
        ?>
      </div>    
    </main>
  </div>
</body>
</html>
