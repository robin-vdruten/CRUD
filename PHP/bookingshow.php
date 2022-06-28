<?php

include_once 'includes/connector.php';

function search($search)
{
    global $conn;

    $sql =
        "SELECT * FROM reizen where hotel like concat('%', :hotel , '%') and land like concat('%', :land , '%') and startDatum >= :startDatum and personen like concat('%', :personen , '%')";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':hotel', $search['0']);
    $stmt->bindParam(':land', $search['1']);
    $stmt->bindParam(':startDatum', $search['2']);
    $stmt->bindParam(':personen', $search['3']);
    $stmt->execute();
    $result = $stmt->fetchall();
    foreach ($result as $reizen) {
        echo '<div class="book-item">';
        echo '<form
            action="bookingitem.php"
            method="get"
            class="linkshowform"
                >';

        echo '<div class="image-frame">';
        echo '<img height="100%" width="100%" src="data:image/jpeg;base64,' .
            base64_encode($reizen['foto']) .
            '"/>';
        echo '<div class="image-static-info">';
        echo '<div class="image-text-info">';
        echo '<h4>' . $reizen['land'] . '</h4>';
        echo '<p>€ ' . $reizen['prijs'] . '</p>';
        echo '<p>personen: ' . $reizen['personen'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="image-hover">';
        echo '<div class="image-text-inner">';
        echo '<h4>' . $reizen['hotel'] . '</h4>';
        echo '<hr />';
        echo '<p>Klik voor meer info</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<input type="hidden" value="' .
            $reizen['reisID'] .
            '" name="reis"/>';
        echo '<button class="btn-show-book" type="submit" >
<i class="fa-solid fa-arrow-pointer"></i>

</button>';
        echo '</form>';
        echo '<div class="book-description">';
        echo '<div class="book-in-des">';
        echo '<h4>' . $reizen['hotel'] . '</h4>';
        echo '<p>€ ' . $reizen['prijs'] . '</p>';
        echo '</div>';
        echo '<div class="book-in-info">';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

?>
