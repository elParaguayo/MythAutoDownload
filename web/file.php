<?php

$my_file = 'mythdownload.txt';

if ($_GET['mode'] == "download") {

    $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    $data = 'Downloading';
    fwrite($handle, $data);

} else if ($_GET['mode'] == "delete") {
    
    unlink($my_file);
}
?>
