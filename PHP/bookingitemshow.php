<?php

include_once 'includes/connector.php';
//liams code
if (isset($_GET['reis'])) {
    $sql = 'SELECT * FROM reizen WHERE reisID = ' . $_GET['reis'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchall();
    foreach ($result as $reizen) {
        echo '<div class="item-wrap-page">';
        echo '<div class="wrapper-all">';
        echo '<div class="item-image-page">';
        echo '<img src="data:image/jpeg;base64,' .
            base64_encode($reizen['foto']) .
            '"/>';
        echo '</div>';
        echo '<div class="item-info-page">';
        echo '<h1>' . $reizen['hotel'] . '</h1>';
        echo '<h4>' . $reizen['land'] . '</h4>';
        echo '<h4>' . $reizen['plaats'] . '</h4>';
        echo '<br>';
        echo '<br>';
        echo '<p>Start: ' . $reizen['startDatum'] . '</p>';
        echo '<p>Eind: ' . $reizen['eindDatum'] . '</p>';
        echo '<br />';
        echo '<h4>€ ' . $reizen['prijs'] . '</h4>';
        echo '<p>personen: ' . $reizen['personen'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="item-book-page">';
        echo '<div class="left-item-book">';
        echo '<div class="item-book-button">';
        echo '<form method="post" class="book" name="book" action="" >';
        echo '<input type="hidden" name="id" value="' .
            $reizen['reisID'] .
            '">';
        echo '<input type="hidden" name="book" value="book">';
        echo '<button class="book">Book</button>';
        echo '</form>';
        echo '</div>';
        echo '<div id="book" class="item-book-confirm">';
        echo '</div>';
        echo '</div>';
        echo '<div class="right-item-book">';
        echo '<div class="item-leave-review">';
        echo '<form method="post" class="showrecensie" name="showrecensie" action="" >';
        echo '<input type="hidden" name="showrecensie" value="book">';
        echo '<input type="hidden" name="id" value="' .
            $reizen['reisID'] .
            '">';
        echo '<button class="showrecensie">Recensie plaatsen</button>';
        echo '</form>';
        echo '</div>';
        echo '<div class="item-book-confirm">';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="item-review-page">';
        include 'PHP/bookingreview.php';
        reviews($reizen['reisID']);
        echo '</div>';
        echo '</div>';
    }
}
?>
