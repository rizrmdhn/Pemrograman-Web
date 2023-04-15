<h5>1. Explode</h5>
<h6>

    <?php
    $temp = explode('***', "A***sentence***with***asterisks");
    print_r($temp);

    ?>

</h6>
<h5>2. Compact</h5>
<h6>

    <?php
    $j = 23;
    $temp = "Hello";
    $address = "1 Old Street";
    $age = 61;

    print_r(compact(explode(' ', 'j temp address age')));

    ?>

</h6>