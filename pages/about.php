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


<h3>Serious publications <span style="font-size: 0.7em">(click to expand)</span></h3>

<?php
    $handle = fopen("pages/publications.csv", "r");

    $_i = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $_i += 1;
        $i = "pu" . $_i;
        echo "
            <div class='paper_title'>
              <a class='paper_details_button' paper_target='" . $i . "'>
                <img src='src/expand_arrow.svg' class='paper_details_arrow' id='paper_details_arrow_" . $i . "'>" . 
                $data[0] . 
              "</a>
              <span class='venue'>" . $data[2] . "</span>
            </div>
            <div class='paper_details' id='paper_details_" . $i . "'>
              <span style='font-size: 0.8em;'>" . $data[1] . "</span>
              <a href='" . $data[3] . "' class='paper_details_link'>[link]</a>
            </div>
          ";
    }
    fclose($handle);
?>



<h3>Less-serious projects</h3>
<?php
    $handle = fopen("pages/projects.csv", "r");

    $_i = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $_i += 1;
        $i = "pr" . $_i;
        echo "
            <div class='paper_title'>
              <a class='paper_details_button' paper_target='" . $i . "'>
                <img src='src/expand_arrow.svg' class='paper_details_arrow' id='paper_details_arrow_" . $i . "'>" . 
                $data[0] . 
              "</a>
              <span class='venue'>" . $data[2] . "</span>
            </div>
            <div class='paper_details' id='paper_details_" . $i . "'>
              <span style='font-size: 0.8em;'>" . $data[1] . "</span>
              <a href='" . $data[3] . "' class='paper_details_link'>[link]</a>
            </div>
          ";
    }
    fclose($handle);
?>


<script>
$(".paper_details_button").each((_, element) => {
  let target_i = $(element).attr("paper_target")
  $(element).click(() => {
    console.log(element, target_i)
    $("#paper_details_" + target_i).toggle();
    $("#paper_details_arrow_" + target_i).toggleClass("paper_details_arrow_up");
  })
  $("#paper_details_" + target_i).hide()
})
</script>

<h3>Miscellaneous</h3>


I'm currently advised by <a href="http://www.mrinmaya.io/">Mrinmaya Sachan</a> and <a href="https://el-assady.com/">Menna El-Assady</a>.
Previously during my bachelor's and master's I was advised by <a href="https://www.lsv.uni-saarland.de/people/dietrich-klakow/">Dietrich Klakow</a>, and <a href="https://ufal.mff.cuni.cz/ondrej-bojar">Ondřej Bojar</a>.
I had the privilige to supervise Yijie Tong, Haokun He, Abhinav Kumar, and David Gu.