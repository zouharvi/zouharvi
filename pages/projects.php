<div style='margin-top: 20px;'></div>

<p>
    <span class='t_bold'>Projects</span>
    (see more at <a href="?p=publications">Publications</a> or <a href="https://github.com/zouharvi/">GitHub</a>)
</p>

<style>
    td {
        padding-bottom: 10px;
        line-height: 1em;
    }

    table tr td:last-child {
        text-align: right;
    }

    /* set column width */
    table td:nth-child(1) {
        width: auto;
    }
</style>

<table class="ul_0" style="text-align: left; width: 100%;; padding-right: 5px;">
<?php
    $handle = fopen("pages/projects.csv", "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo "<tr><td><a href='" . $data[3] . "'>" . $data[0] . "</a><br>";
        echo "<span style='font-size: small;'>" . $data[1] . "</span></td>";
        echo "<td>" . $data[2] . "</td></tr>";
    }
    fclose($handle);
?>
</table>