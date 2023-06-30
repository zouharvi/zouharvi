<div style='margin-top: 20px;'></div>

<p>
    <span class='t_bold'>Publications/Academia</span>
    (see <a href="https://scholar.google.com/citations?user=2EUDwtkAAAAJ">Google Scholar</a>,
    <a href="https://www.semanticscholar.org/author/Vilém-Zouhar/1429837660">Semantic Scholar</a>)
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

<table style="text-align: left; width: 100%; padding-right: 5px;">
<?php
    $handle = fopen("pages/publications.csv", "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo "<tr><td><a href='" . $data[3] . "'>" . $data[0] . "</a><br>";
        echo "<span style='font-size: small;'>" . $data[1] . "</span></td>";
        echo "<td>" . $data[2] . "</td></tr>";
    }
    fclose($handle);
?>
</table>