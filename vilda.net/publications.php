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
        "<img src='src/expand_button.svg' class='paper_details_arrow' id='paper_details_arrow_" . $item["key"] . "'>" . 
        $item["venue"] . 
      "</td>
      </tr></table>
    </div>
    <div class='paper_details " . $extraclass . "' id='paper_details_" . $item["key"] . "' style='display: none;'>" .
      $links .
      "<br><br>" .
      $img . 
        "<span class='authors_span'><b>" . $author . "</b></span><br>" .
        "<span>" . $item["abstract"] . "</span>" .
    "</div>
  ";
}
?>

<h3>Selected publications
  <span style="float: right; width: 200px; text-align: right;">
    <span id="all_button_expand">expand all publications</span>
    <span id="all_button_hide">collapse all publications</span>
  </span>
</h3>

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


<script>
let OPEN_PAPERS = [
  "pearmut",
  "subset2evaluate",
];

$(".paper_title").each((_, element) => {
  let target_key = $(element).attr("paper_target")
  $(element).click(() => {
    $("#paper_details_" + target_key).toggle();
    $("#paper_details_arrow_" + target_key).toggleClass("paper_details_arrow_up");
    $(element).toggleClass("paper_title_active");
  })
  // $("#paper_details_" + target_key).hide()

  if (OPEN_PAPERS.includes(target_key)) {
    $(element).trigger("click");
  }
})

$("#all_button_expand").on("click", () => {
  $("#all_button_expand").toggle(false)
  $("#all_button_hide").toggle(true)

  // open all
  $(".paper_title").each((_, element) => {
    let target_key = $(element).attr("paper_target")
    $("#paper_details_" + target_key).toggle(true);
    $("#paper_details_arrow_" + target_key).toggleClass("paper_details_arrow_up", true);
    $(element).toggleClass("paper_title_active", true);
  })
})
$("#all_button_hide").toggle(false)
$("#all_button_hide").on("click", () => {
  $("#all_button_expand").toggle(true)
  $("#all_button_hide").toggle(false)

  // hide all
  $(".paper_title").each((_, element) => {
    let target_key = $(element).attr("paper_target")
    $("#paper_details_" + target_key).toggle(false);
    $("#paper_details_arrow_" + target_key).toggleClass("paper_details_arrow_up", false);
    $(element).toggleClass("paper_title_active", false);
  })
})
</script>
