<h5>1. List</h5>
<h6>

    <?php
    list($a, $b) = array('Alice', 'Bob');
    echo "a = $a b = $b";

    ?>

</h6>
<h5>2. While</h5>
<h6>

    <?php
    $paper = array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    );

    while (list($item, $description) = myEach($paper)) {
        echo "$item: $description<br>";
    }

    function myEach(&$array)
    {
        $key = key($array);
        $result = ($key === null) ? false :
            [$key, current($array), 'key', 'value' => current($array)];
        next($array);
        return $result;
    }

    ?>

</h6>
<h5>3. ForEach</h5>
<h6>

    <?php
    $paper = array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    );
    foreach ($paper as $item => $description) {
        echo "$item: $description<br>";
    }

    ?>

</h6>
<h5>4. Multidimensional Array</h5>
<h6>

    <?php
    $products = array(
        'paper' => array(
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper"
        ),
        'pens' => array(
            'ball' => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"
        ),
        'misc' => array(
            'tape' => "Sticky Tape",
            'glue' => "Adhesives",
            'clips' => "Paperclips"
        )
    );

    echo "<pre>";

    foreach ($products as $section => $items) {
        foreach ($items as $key => $value) {
            echo "$section:\t$key\t($value)<br>";
        }
    }

    echo "</pre>";

    ?>

</h6>
<h5>5. Tugas</h5>
<h6>

    <?php
    $chessboard = array(
        array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R'),
    );

    foreach ($chessboard as $row => $items) {
        foreach ($items as $col => $value) {
            echo "$value ";
        }
        echo "<br>";
    }
    ?>

</h6>