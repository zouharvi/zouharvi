<html style='overflow-y: scroll'>
<head>
  <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:400,700" rel="stylesheet">
   <meta charset='utf-8'>
 <meta name="description" content="Portfolio and basic information about freelance programmer Vilém Zouhar (me, ViliX64). Student, programmer, published 3 roky hlavy..">
 <meta name="keywords" content="Vilém Zouhar, ViliX64, ViliX, Programmer, Freelancer, Portfolio, Student, Mathematics, MFF, HTML, CSS, XML, JavaScript, C++, C#, 3 roky hlavy">
 <meta name="author" content="Vilém Zouhar">
 <link rel='stylesheet' type='text/css'  href='css/text.css?ver=2'>
 <link rel='icon'       type='image/png' href='src/favicon.png?ver=1'>
 <title>Vilda | Vilém Zouhar</title>
 <meta name="viewport" content="width=device-width">
</head>

<body style='padding-top: 50px; padding-bottom: 100px; background-color: #F0F0F0;'>
  <div id='whole' style='width: 910px; margin:auto;'>
    <div id='menu' style='display: inline-block; width: 200px; vertical-align: top;'>
      <p id='name' style='margin-left: 20px'>Vilém Zouhar</p>
      <ul>
        <li><a class='a_0' href='?p=about'>About</a></li>
        <li><a class='a_0' href='?p=portfolio'>Portfolio</a></li>
        <li><a class='a_0' href='?p=blog'>Blog posts</a></li>
      </ul>
      <img src='src/portrait.png' style='width: 120px; margin-left: 20px;'>
    </div>
    <div id='container' style='display: inline-block; width: 700px'>
      <div style='width: 100%'>
        <?php
            $allowed = array('about', 'portfolio', 'blog', 'disquieting_excerpts_from_my_diary', 'ludum_dare_32', 'whipbit_solutions', 'asmhell');
            if(in_array($_GET['p'], $allowed) )
                echo file_get_contents("pages/". $_GET['p'] . ".html");
            else
                echo file_get_contents("pages/about.html");
        ?>
      </div>    
    </div>
  </div>
</body>
</html>
