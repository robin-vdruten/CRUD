<?php

include_once ('includes/connector.php');   

        if (isset($_GET['reis'])) {
            $sql = "SELECT * FROM reizen WHERE reisID = " . $_GET['reis'];
            $stmt = $conn->prepare($sql); $stmt->execute(); $result = $stmt->fetchall();
            foreach ($result as $reizen) { 

            echo '<div class="item-wrap-page">';
            echo '<div class="wrapper-all">';
                echo '<div class="item-image-page">';
                echo '<img height="100%" src="data:image/jpeg;base64,' .
                base64_encode($reizen['fotogroot']) .
                '"/>';
                echo '</div>';
                echo '<div class="item-info-page">';
                echo '<h1>'. $reizen['hotel'] .'</h1>';
                echo '<h4>'. $reizen['land'] .'</h4>';
                echo '<h4>'. $reizen['plaats'] .'</h4>';
                echo '<br>';
                echo '<p>'. $reizen['info'] .'</p>';
                echo '<br>';
                echo '<p>Start: '. $reizen['startDatum'] .'</p>';
                echo '<p>Eind: '. $reizen['eindDatum'] .'</p>';
                echo '<br />';
                echo '<h4>€ '. $reizen['prijs'] .'</h4>';
                echo '<p>personen: '. $reizen['personen'] .'</p>';
                echo '</div>';
            echo '</div>';
            echo '<div class="item-book-page">';
                echo '<div class="left-item-book">';
                echo '<div class="item-book-button">';
                    echo '<button>Book</button>';
                echo '</div>';
                echo '<div class="item-book-confirm">';
                    echo '<i class="fa-solid fa-check"></i>';
                echo '</div>';
                echo '</div>';
                echo '<div class="right-item-book">';
                echo '<div class="item-leave-review">';
                    echo '<button>Recensie</button>';
                echo '</div>';
                echo '<div class="item-book-confirm">';
                    echo '<i class="fa-solid fa-check"></i>';
                echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="item-review-page">';
            include "PHP/bookingreview.php";
            reviews($reizen['reisID']);
            echo '</div>';
            echo '</div>';
    
        }
    }
?>