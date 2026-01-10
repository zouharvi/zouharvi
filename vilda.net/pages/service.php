<!-- TODO -->
<h4>Talks</h4>
I enjoy socializing and am grateful to have been invited to give the following talks:
<ul style="padding-left: 1em;">
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