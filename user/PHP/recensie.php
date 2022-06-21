<?php
function recensies($id)
{
    global $conn;

    $sql = 'SELECT * FROM recensie WHERE userID = :userID';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':userID', $id);
    $stmt->execute();
    $recensie = $stmt->fetchAll();

    foreach ($recensie as $key => $value) { ?>
                <p><?php echo $value['titel']; ?></p>
                <p><?php echo $value['datum']; ?></p>
                <p><?php echo $value['text']; ?></p>
                <p><?php echo $value['sterren']; ?></p>
                <?php }
} ?>

<?php class recensie
{
    public function getRowsNumber($userid)
    {
        global $conn;

        $sql = 'SELECT * FROM recensie WHERE userID =' . $userid;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        print $count;
    }
} ?>
