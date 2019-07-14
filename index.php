<!DOCTYPE html>
<html style='overflow-y: scroll' lang='en'>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description" content="Portfolio and basic information about freelance programmer Vilém Zouhar (me, ViliX64). Student, programmer, published 3 roky hlavy..">
  <meta name="keywords" content="Vilém Zouhar, ViliX64, ViliX, Programmer, Freelancer, Portfolio, Student, Mathematics, MFF, HTML, CSS, XML, JavaScript, C++, C#, 3 roky hlavy">
  <meta name="author" content="Vilém Zouhar">
  <link rel='stylesheet' type='text/css'  href='css/text.css'>
  <link rel='icon'       type='image/png' href='src/favicon.png'>
  <title>Vilda | Vilém Zouhar</title>
  <meta name="viewport" content="width=device-width">
</head>

<body style='padding-top: 50px; padding-bottom: 100px; background-color: #F0F0F0;'>
  <div id='whole' style='width: 910px; margin:auto;'>
    <div id='menu' style='display: inline-block; width: 200px; vertical-align: top;'>
      <header id='name' style='margin-left: 20px; margin-top: 20px;'>Vilém Zouhar</header>
      <img src='src/portrait.webp' alt='portrait' style='width: 120px; margin-left: 15px; margin-top: 10px;'>
      <nav>
        <ul>
          <li><a class='a_0' href='?p=about'>About</a></li>
          <li><a class='a_0' href='?p=portfolio'>Portfolio</a></li>
        </ul>
      </nav>
    </div>
    <main id='container' style='display: inline-block; width: 700px'>
      <div style='width: 100%'>
        <?php
            $allowed = array('about', 'portfolio');
            if(in_array($_GET['p'], $allowed) )
                echo file_get_contents("pages/". $_GET['p'] . ".html");
            else
                echo file_get_contents("pages/about.html");
        ?>
      </div>    
    </main>
  </div>
  
  <link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">
</body>
</html>
