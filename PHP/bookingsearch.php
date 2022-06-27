<?php

include_once ('../includes/connector.php');  


if(isset($_GET['search'])){
    $zoekopdracht = '%'.$_GET['search'].'%';
    $sql = "SELECT * FROM reizen WHERE plaats like :search";
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(':search', $zoekopdracht);
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
              echo '<img height="100%" src="data:image/jpeg;base64,' .
              base64_encode($reizen['fotogroot']) .
              '"/>';
                echo '<div class="image-static-info">';
                  echo '<div class="image-text-info">';
                    echo'<h4>' . $reizen['land'] . '</h4>';
                    echo'<p>€ ' . $reizen['prijs'] . '</p>';
                    echo'<p>personen: ' . $reizen['personen'] . '</p>';
                 echo '</div>';
                echo '</div>';
                echo '<div class="image-hover">';
                  echo '<div class="image-text-inner">';
                    echo '<h4>' . $reizen['hotel'] . '</h4>';
                   echo  '<hr />';
                    echo '<p>Klik voor meer info</p>';
                  echo '</div>';
                echo '</div>';
             echo '</div>';
             echo '<input type="hidden" value="' . $reizen['reisID'] . '" name="reis"/>';
             echo '<button type="submit" >button</button>';
            echo '</form>';
            echo '<div class="book-description">';
              echo '<div class="book-in-des">';
               echo '<h4>' . $reizen['hotel'] . '</h4>';
                echo '<p>€ ' . $reizen['prijs'] . '</p>';
              echo '</div>';
              echo '<div class="book-in-info">';
                echo '<p>' . $reizen['subinfo'] . '</p>';
              echo '</div>';
            echo '</div>';
         echo '</div>';
    
    }
}
?>