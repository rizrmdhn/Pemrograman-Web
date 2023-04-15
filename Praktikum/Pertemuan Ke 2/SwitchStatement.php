<?php
$page = "test";

switch ($page) {
    case 'Home':
        echo "You selcted Home";
        break;
    case 'About':
        echo "You selcted About";
        break;
    case 'News':
        echo "You selcted News";
        break;
    case 'Login':
        echo "You selcted Login";
        break;
    case 'Links':
        echo "You selcted Links";
        break;
    default:
        echo "Unreconginzed selection";
        break;
}
