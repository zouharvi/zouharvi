<div style='margin-top: 20px;'></div>

<p class="subpage_header">
    <span class='t_bold'>Projects</span>
    (see more at <a href="?p=publications">Publications</a> or <a href="https://github.com/zouharvi/">GitHub</a>)
</p>

<hr>

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