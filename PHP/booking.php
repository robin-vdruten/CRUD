<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['book'])) {
        $id = $_POST['id'];
        $show = new booking();
        $show->create($id);
    } elseif (isset($_POST['showrecensie'])) {
        $id = $_POST['id'];
        $show = new booking();
        $show->show($id);
    } elseif (isset($_POST['createrecensie'])) {
        $reisID = $_POST['reisID'];
        $items = [
            $_POST['titel'],
            $_POST['date'],
            $_POST['sterren'],
            $_POST['text'],
        ];
        $createrecensie = new booking();
        $createrecensie->createrecensie($items, $reisID);
    }
}

class booking
{
    public function create($id)
    {
        session_start();
        if (isset($_SESSION['naam'])) {
            include_once '../includes/connector.php';

            $sql =
                'INSERT INTO booking (gebruikerID,reisID) VALUES (:gebruikerID,:reisID)';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':gebruikerID', $_SESSION['userID']);
            $stmt->bindParam(':reisID', $id);
            $stmt->execute();

            echo '<i class="fa-solid fa-check"></i>';
        } else {
            echo 'maak eerst een account aan';
        }
    }

    public function createrecensie($items, $reisID)
    {
        session_start();
        include_once '../includes/connector.php';

        $sql =
            'INSERT INTO recensie (userID,reisID,validatie,titel , datum,text,sterren) VALUES (:userID,:reisID, 0,:titel,:datum,:text,:sterren)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':userID', $_SESSION['userID']);
        $stmt->bindParam(':reisID', $reisID);
        $stmt->bindParam(':titel', $items['0']);
        $stmt->bindParam(':datum', $items['1']);
        $stmt->bindParam(':text', $items['3']);
        $stmt->bindParam(':sterren', $items['2']);
        $stmt->execute();

        echo 'recensie geplaats nu wachten tot hij geaccepteerd is';
    }

    public function show($id)
    {
        ?>
        <form method="post" action="" class="createrecensie">
             <label for="fname">titel</label>
                <input type="text" id="fname" name="titel" placeholder="">

                <label for="lname">Datum</label>
                <input type="date" id="lname" name="date" placeholder="">

                <label for="Sterren">Strerren</label>
                <select id="country" name="sterren">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>

                <label for="subject">text</label>
                <textarea id="subject" name="text" placeholder="" style="height:200px"></textarea>
                <input type="hidden" name="createrecensie">
                <input type="hidden" name="reisID" value="<?php echo $id; ?>">
                <input type="submit" name="createrecensie" value="Submit">
        </form>
    <?php
    }
}
?>
