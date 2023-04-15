<h6>1. Equality</h6>
<div>

    <?php
    $a = "1000";
    $b = "+1000";

    if ($a == $b) echo "1";
    if ($a === $b) echo "2";

    ?>

</div>
<h6>2. Comparasion</h6>
<div>

    <?php
    $a = 2;
    $b = 3;

    if ($a > $b) echo "$a is greater than $b<br>";
    if ($a < $b) echo "$a is less than $b<br>";
    if ($a >= $b) echo "$a is greater than or equal to $b<br>";
    if ($a <= $b) echo "$a is less than or equal to $b<br>";

    ?>

</div>
<h6>3. Logical</h6>
<div>

    <?php
    $a = 1;
    $b = 0;

    echo ($a and $b) . "<br>";
    echo ($a or $b) . "<br>";
    echo ($a xor $b) . "<br>";
    echo !$a . "<br>";

    ?>

</div>