<?php

$date = $_POST['date'];
$land = $_POST['land'];
$hotel = $_POST['hotel'];
$personen = $_POST['personen'];

header(
    'Location:../booking.php?land=' .
        $land .
        '&hotel=' .
        $hotel .
        '&date=' .
        $date .
        '&personen=' .
        $personen
);
?>
