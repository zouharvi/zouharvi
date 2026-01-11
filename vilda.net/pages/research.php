<div style="height: 6px;"></div>
I work on problems related to evaluation and multilinguality in natural language processing.
Without evaluation, science is limited to blind exploration.
Big part of this research includes machine translation, which serves as a good testbed, though my interests go beyond MT.
I deeply enjoy research that invents new methods that are simple or applies known methods or formalisms to new problems cleverly.
I focus a lot on the economy and quality of evaluation, such that they can be applied in practice.

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
    <div class='paper_title' paper_target='" . $item["key"] . "'>"
      . "<table><tr><td width='100%'>" . $item["title"] . "</td>" .
      "<td width='220px' class='venue'>" .
        $item["venue"] . 
      "</td>
      </tr></table>
    </div>
    <div class='paper_details " . $extraclass . "' id='paper_details_" . $item["key"] . "'>" .
      $links .
      "<br><br>" .
      $img . 
        "<span class='authors_span'><b>" . $author . "</b></span><br>" .
        "<span>" . $item["abstract"] . "</span>" .
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
