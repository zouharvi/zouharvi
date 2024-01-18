<p style="margin-top: 20px;">
  Hi, I'm Vilém/Vilda, a PhD student at ETH Zürich, Switzerland supervised by <a href="http://www.mrinmaya.io/">Mrinmaya Sachan</a> and <a href="https://el-assady.com/">Menna El-Assady</a>.
  &nbsp;
  &nbsp;
  I have a passion for natural language processing research, especially:
  <ul style="margin-top: -12px">
  	<li>NLP-oriented human-computer interaction (trust, confidence)</li>
    <li>Non-mainstream machine translation (quality estimation)</li>
  	<li>Text qualities (simplicity/complexity, usefulness)</li>
  </ul>
</p>

<?php
function publication_entry($line, $id) {
  return "
    <div class='paper_title' paper_target='" . $id . "'>"
      . $line[0] . 
      "<span class='venue'>" . $line[2] . 
        "<a class='paper_details_button'>
          <img src='src/expand_arrow.svg' class='paper_details_arrow' id='paper_details_arrow_" . $id . "'>" . 
        "</a>" .
      "</span>
    </div>
    <div class='paper_details' id='paper_details_" . $id . "'>
      <span style='font-size: 0.8em;'>" . $line[1] . "</span>
      <a href='" . $line[3] . "' class='paper_details_link'>[link]</a>
    </div>
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
$(".paper_title").each((_, element) => {
  let target_i = $(element).attr("paper_target")
  $(element).click(() => {
    $("#paper_details_" + target_i).toggle();
    $("#paper_details_arrow_" + target_i).toggleClass("paper_details_arrow_up");
  })
  $("#paper_details_" + target_i).hide()
})

$("#all_button_expand").on("click", () => {
  $("#all_button_expand").toggle(false)
  $("#all_button_hide").toggle(true)

  // open all
  $(".paper_title").each((_, element) => {
    let target_i = $(element).attr("paper_target")
    $("#paper_details_" + target_i).toggle(true);
    $("#paper_details_arrow_" + target_i).addClass("paper_details_arrow_up");
  })
})
$("#all_button_hide").toggle(false)
$("#all_button_hide").on("click", () => {
  $("#all_button_expand").toggle(true)
  $("#all_button_hide").toggle(false)

  // open all
  $(".paper_title").each((_, element) => {
    let target_i = $(element).attr("paper_target")
    $("#paper_details_" + target_i).toggle(false);
    $("#paper_details_arrow_" + target_i).removeClass("paper_details_arrow_up");
  })
})
</script>

<h3>Miscellaneous</h3>


I'm currently advised by <a href="http://www.mrinmaya.io/">Mrinmaya Sachan</a> and <a href="https://el-assady.com/">Menna El-Assady</a>.
Previously during my bachelor's and master's I was advised by <a href="https://www.lsv.uni-saarland.de/people/dietrich-klakow/">Dietrich Klakow</a>, and <a href="https://ufal.mff.cuni.cz/ondrej-bojar">Ondřej Bojar</a>.
I had the privilige to supervise Yijie Tong, Haokun He, Abhinav Kumar, and David Gu.