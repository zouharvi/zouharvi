<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv="Cache-control" content="public">
  <meta name="description" content="Vilém Zouhar is an PhD student at ETH Zürich working on user-centered NLP (evaluation, quality estimation).">
  <meta name="keywords" content="Vilém Zouhar is an PhD student at ETH Zürich working on user-centered NLP (evaluation, quality estimation).">
  <meta name="author" content="Vilém Zouhar">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans" rel="stylesheet">
  <link rel='stylesheet' type='text/css'  href='src/style_v11.css'>
  <link rel='icon'       type='image/png' href='src/favicon.png'>
  <title>Vilém Zouhar</title>
  <meta name="viewport" content="width=530px">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
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
      <header id='name' style='font-size: 2em; display: inline-block; font-weight: bold; border: 2px solid black; padding: 2px; margin-bottom: 15px'>
          Vilém Zouhar
      </header>
      <img
        id='portrait'
        src='src/portrait.jpg'
        alt='photo of Vilém'
        style='width: 330px; float: right; border: 2px solid black; margin-top: 60px;'
      >
      <br>

      <div id="links">
        <ul style="display: inline-block; list-style-type: none; margin-top: -5px;">
          <li><a href="https://scholar.google.com/citations?user=2EUDwtkAAAAJ">Google Scholar</a></li>
          <li><a href="https://www.semanticscholar.org/author/Vilém-Zouhar/1429837660">Semantic Scholar</a></li>
        </ul>
        <ul style="display: inline-block; list-style-type: none;">
          <li><a href="https://raw.githubusercontent.com/zouharvi/zouharvi/main/vilda.net/cv/cv.pdf">CV</a></li>
          <li><a href='mailto:vilem.zouhar@gmail.com'>Contact</a></li>
        </ul>
        <ul style="display: inline-block; list-style-type: none;">
          <li><a href="https://github.com/zouharvi/">GitHub</a></li>
          <li><a href="https://huggingface.co/zouharvi">HuggingFace</a></li>
        </ul>
        <ul style="display: inline-block; list-style-type: none;">
            <li><a href='https://bsky.app/profile/zouharvi.bsky.social'>Bluesky</a></li>
            <li><a href='https://www.youtube.com/@zouharvi'>YouTube</a></li>
        </ul>
      </div>

      <p style="margin-top: 10px;">
        Hi, I'm Vilém (also Vilda), a PhD student at ETH Zürich, Switzerland.
        I'm passionate about natural language processing research, especially:
          <ul style="margin-top: -12px; margin-left: -23px; margin-right: 0px;">
            <li>Non-mainstream machine translation (quality estimation)</li>
            <li>NLP/MT evaluation (model-human communication, metrics)</li>
            <li>NLP-oriented human-computer interaction (confidence, annotations)</li>
          </ul>
        Let me know if you're interested in any of these topics!
      </p>
    </div>

    <?php include("publications.php"); ?>
    
    <h3>Miscellaneous</h3>
    <br>
    I'm currently advised by Mrinmaya Sachan at <a href="https://lre.inf.ethz.ch/">LRE lab</a> and Menna El-Assady at <a href="https://ivia.ch/">IVIA lab</a>.
    Previously during my bachelor's and master's I was advised by Dietrich Klakow, and Ondřej Bojar.
    In 2023 I got to intern at Amazon Translate.
    I had the privilige to supervise Yijie Tong, Haokun He, Abhinav Kumar, and David Gu.<br><br>
    In my free time I'm interested in veganism, electric guitar, {video,board}games, and literature.

    <br>
    <br>
    <br>
    <h3>Talks</h3>
    <br>
    I enjoy socializing and am grateful to have been invited to give the following talks:
    <ul style="padding-left: 1em;">
    <?php
      function talk_entry($item) {
        // map
        $venues = array_map(function($venue) {
          // if link is not empty
          if ($venue["link"] == "") {
            return $venue["venue"] . " (" . $venue["date"] . ")";
          }
          return $venue["venue"] . " (<a href='" . $venue["link"] . "'>" . $venue["date"] . "</a>)";
        }, $item["venues"]);
        // joint with comma
        $venues = implode(", ", $venues);
        return "<li>" . $item["title"] . " at " . $venues . "</li>";
      }

      $data = json_decode(file_get_contents("talks.json"),TRUE);
      foreach ($data as &$item) {
          echo talk_entry($item);
      }
    ?>
    </ul>
  </div>
</body>
</html>