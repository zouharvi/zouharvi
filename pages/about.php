<p style="margin-top: 20px;">
  Hi, I'm Vilém/Vilda, a PhD student at ETH Zürich, Switzerland supervised by <a href="http://www.mrinmaya.io/">Mrinmaya Sachan</a> and <a href="https://el-assady.com/">Menna El-Assady</a>.
  I have a passion for natural language processing research, especially:
  <ul style="margin-top: -12px">
  	<li>NLP-oriented human-computer interaction (trust, confidence)</li>
    <li>Non-mainstream machine translation (quality estimation)</li>
  	<li>Text qualities (simplicity/complexity, usefulness)</li>
  </ul>
</p>


<h3>Serious publications</h3>
<table style="text-align: left; width: 100%; padding-right: 5px;">
<?php
    $handle = fopen("pages/publications.csv", "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo "<tr><td><a href='" . $data[3] . "'>" . $data[0] . "</a><br>";
        echo "<span style='font-size: 0.8em;'>" . $data[1] . "</span></td>";
        echo "<td>" . $data[2] . "</td></tr>";
    }
    fclose($handle);
?>
</table>

<h3>Less-serious projects</h3>
<table class="ul_0" style="text-align: left; width: 100%;; padding-right: 5px;">
<?php
    $handle = fopen("pages/projects.csv", "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo "<tr><td><a href='" . $data[3] . "'>" . $data[0] . "</a><br>";
        echo "<span style='font-size: 0.8em;'>" . $data[1] . "</span></td>";
        echo "<td>" . $data[2] . "</td></tr>";
    }
    fclose($handle);
?>
</table>