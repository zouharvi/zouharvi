<?php
function get_links($url_field) {
  $out = "";
  preg_match('/.*\|PAPER:([^|]*).*/', $url_field, $matches);
  if (sizeof($matches) >= 2) {
    $out .= "<a href='" . $matches[1] . "' class='paper_details_link'>paper</a>";
  }
  preg_match('/.*\|LINK:([^|]*).*/', $url_field, $matches);
  if (sizeof($matches) >= 2) {
    $out .= "<a href='" . $matches[1] . "' class='paper_details_link'>link</a>";
  }
  preg_match('/.*\|TOOL:([^|]*).*/', $url_field, $matches);
  if (sizeof($matches) >= 2) {
    $out .= "<a href='" . $matches[1] . "' class='paper_details_link'>tool</a>";
  }
  preg_match('/.*\|DEMO:([^|]*).*/', $url_field, $matches);
  if (sizeof($matches) >= 2) {
    $out .= "<a href='" . $matches[1] . "' class='paper_details_link'>demo</a>";
  }
  preg_match('/.*\|VIDEO:([^|]*).*/', $url_field, $matches);
  if (sizeof($matches) >= 2) {
    $out .= "<a href='" . $matches[1] . "' class='paper_details_link'>video</a>";
  }
  preg_match('/.*\|DATASET:([^|]*).*/', $url_field, $matches);
  if (sizeof($matches) >= 2) {
    $out .= "<a href='" . $matches[1] . "' class='paper_details_link'>dataset</a>";
  }
  preg_match('/.*\|CODE:([^|]*).*/', $url_field, $matches);
  if (sizeof($matches) >= 2) {
    $out .= "<a href='" . $matches[1] . "' class='paper_details_link'>code</a>";
  }
  return $out;
}

function publication_entry($line, $id) {
  // 0 - title
  // 1 - authors | short caption
  // 2 - venue
  // 3 - links
  // 4 - details
  // 5 - img
  if ($line[5] != "") {
    $img = "<img src='pages/img/" . $line[5] . "'  loading='lazy'>";
    $extraclass = "paper_details_withimg";
  } else {
    $img = "";
    $extraclass = "";
  }

  return "
    <div class='paper_title' paper_target='" . $id . "'>"
      . $line[0] . 
      "<span class='venue'>" . $line[2] . 
          "<img src='src/expand_button.svg' class='paper_details_arrow' id='paper_details_arrow_" . $id . "'>" . 
      "</span>
    </div>
    <div class='paper_details " . $extraclass . "' id='paper_details_" . $id . "'>" .
      "<div>" . get_links($line[3]) . "</div><br>" .
      "<span><b>" . $line[1] . "</b></span><br>" .
      $img . 
      "<span>" . $line[4] . "</span>" .
    "</div>
  ";
}
?>

<h3>Serious publications
  <span style="float: right; width: 200px; text-align: right;">
    <span id="all_button_expand">expand all publication</span>
    <span id="all_button_hide">collapse all publications</span>
  </span>
</h3>

<?php
    $handle = fopen("pages/publications.csv", "r");

    $i = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $i += 1;
        echo publication_entry($data, "pu" . $i);
    }
    fclose($handle);
?>



<h3>Less-serious projects</h3>
<?php
    $handle = fopen("pages/projects.csv", "r");

    $i = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $i += 1;
        echo publication_entry($data, "pr" . $i);
    }
    fclose($handle);
?>


<script>
let OPEN_PAPERS = [2, 5];

$(".paper_title").each((element_i, element) => {
  let target_i = $(element).attr("paper_target")
  $(element).click(() => {
    $("#paper_details_" + target_i).toggle();
    $("#paper_details_arrow_" + target_i).toggleClass("paper_details_arrow_up");
    $(element).toggleClass("paper_title_active");
  })
  $("#paper_details_" + target_i).hide()

  if (OPEN_PAPERS.includes(element_i)) {
    $(element).trigger("click");
  }
})

$("#all_button_expand").on("click", () => {
  $("#all_button_expand").toggle(false)
  $("#all_button_hide").toggle(true)

  // open all
  $(".paper_title").each((_, element) => {
    let target_i = $(element).attr("paper_target")
    $("#paper_details_" + target_i).toggle(true);
    $("#paper_details_arrow_" + target_i).toggleClass("paper_details_arrow_up", true);
    $(element).toggleClass("paper_title_active", true);
  })
})
$("#all_button_hide").toggle(false)
$("#all_button_hide").on("click", () => {
  $("#all_button_expand").toggle(true)
  $("#all_button_hide").toggle(false)

  // gude all
  $(".paper_title").each((_, element) => {
    let target_i = $(element).attr("paper_target")
    $("#paper_details_" + target_i).toggle(false);
    $("#paper_details_arrow_" + target_i).toggleClass("paper_details_arrow_up", false);
    $(element).toggleClass("paper_title_active", false);
  })
})
</script>
