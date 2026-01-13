<h4>Commmunity</h4>
<ul>
    <li>I co-organize various shared tasks of the WMT conference (<a href="https://www2.statmt.org/wmt25/multilingual-instruction.html">Multilingual Instruction</a>, <a href="https://www2.statmt.org/wmt25/mteval-subtask.html">Automatic Evaluation</a>, <a href="https://www2.statmt.org/wmt25/terminology.html">Terminology</a>). Primarily I lead the human evaluation of the <a href="https://www2.statmt.org/wmt25/translation-task.html">General Translation Task</a>.</li>
    <li>I co-organized the first <a href="https://multilingual-multicultural-evaluation.github.io/">Multilingual Multicultural Evaluation workshop</a> at EACL 2026.</li>
    <li>I review at almost every ACL/ARR since 2023. Despite its criticisms, I find it to be enjoyable personally and also vital for the community.</li>
    <li>Many times I was a committee member for granting university accreditations in Czechia.</li>
</ul>



<h4>Talks</h4>
I enjoy socializing and am grateful to have been invited to give the following talks:
<ul>
    <?php
    function talk_entry($item)
    {
        // map
        $venues = array_map(function ($venue) {
            // if link is not empty
            if ($venue["link"] == "") {
                return $venue["venue"] . " (" . $venue["date"] . ")";
            }
            return $venue["venue"] . " (<a href='" . $venue["link"] . "'>" . $venue["date"] . "</a>)";
        }, $item["venues"]);
        // joint with comma
        $venues = implode(", ", $venues);
        return "<li>" . $item["title"] . " at " . $venues . "</li>";
    }

    $data = json_decode(file_get_contents("talks.json"), TRUE);
    foreach ($data as &$item) {
        echo talk_entry($item);
    }
    ?>
</ul>