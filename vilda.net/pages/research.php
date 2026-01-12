<i>„Without evaluation, science is limited to blind exploration.“</i>
I work on natural language processing problems related to evaluation and multilinguality.
I value research that prioritizes simplicity and the creative application of known methods to novel problems.
I believe that for evaluation research to truly drive progress, it must be high-standard and rigorous, yet practical enough to be useful.

<br>
<br>
<?php
function publication_entry($item) {
  if ($item["image"] != "") {
    $img = "<img src='img/" . $item["image"] . "'  loading='lazy'>";
    $extraclass = "paper_details_withimg";
  } else {
    $img = "";
    $extraclass = "";
  }

  $author = str_replace(" ", "&nbsp;", $item["author"]);
  $author = str_replace(",&nbsp;", ", ", $author);
  $author = str_replace(",<sup>=</sup>&nbsp;", ",<sup>=</sup> ", $author);

  $links = "";
  foreach ($item["links"] as $key => $value) {
      $links .= "<a href='" . $value . "' class='paper_details_link'>" . $key . "</a>";
  }
  
  return "
      <div class='paper_details " . $extraclass . "'>" .
      "<div class='paper_title'>" . $item["title"] . "</div>" .
      "<span class='authors_span'>" . $item["venue"] . ";&nbsp;&nbsp;&nbsp;" . $author . "</span>" .
      "<div style='margin-top: 5px;'>" . $links . "</div>" .
      $img . 
        "<div style='margin-top: 5px;'>" . $item["abstract"] . "</div>" .
    "</div>
  ";
}
?>

<?php
    $data = json_decode(file_get_contents("publications.json"),TRUE);
    foreach ($data as &$item) {
      if ($item["type"] == "publication") {
        echo publication_entry($item);
      }
    }
?>

<br><br>
<h3>Less-selected publications/projects</h3>
<?php
  foreach ($data as &$item) {
    if ($item["type"] == "project") {
      echo publication_entry($item);
    }
  }
?>
