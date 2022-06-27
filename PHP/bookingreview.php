
<?php
//liams code
function reviews($reisid) {
    include_once ('includes/connector.php');   

    global $conn;

//INNER JOIN users on recensie.userID=users,userID

$sql = "SELECT * FROM recensie inner join users on recensie.userID=users.userID  where reisID ={$reisid} and validatie = 1";
$stmt = $conn->prepare($sql); $stmt->execute(); $result = $stmt->fetchall();
foreach ($result as $recensie) { 

            echo '<div class="review-content">';
            echo '<div class="left-review">';
            echo '<div class="align-this">';
                echo '<div class="nummber-score"><p>' . $recensie['sterren'] . '</p></div>';
                echo '<div class="details">';
                echo '<h5>' . $recensie['userID'] . '</h5>';
                echo '<p>' . $recensie['datum'] . '</p>';
                echo '</div>';
                echo $recensie['voornaam'];
            echo '</div>';
            echo '</div>';
            echo '<div class="right-review">';
            echo '<div class="align-this-second">';
                echo '<div class="align-this-third">';
                echo '<div class="onderwerp">';
                    echo '<h4>' . $recensie['titel'] . '</h4>';
                echo '</div>';
                echo '<div class="the-review">';
                    echo '<p>' . $recensie['text'] . '</p>';
                echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '</div>';
        echo '</div>';

        }
}       
?>