<?php

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $recensie = new Recensie();
    $recensie->delete($id);
}

class recensie
{
    public function recensies($id)
    {
        global $conn;

        $sql = 'SELECT * FROM recensie WHERE userID = :userID';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':userID', $id);
        $stmt->execute();
        $recensie = $stmt->fetchAll();

        foreach ($recensie as $key => $value) { ?>
                <div class="box">
                <div class="header"><h4><?php echo $value[
                    'titel'
                ]; ?></h4></div>
                <div class="header"><h4><?php echo $value[
                    'datum'
                ]; ?></h4></div>
                <div class="header"><h5><?php echo $_SESSION[
                    'email'
                ]; ?></h5></div>
                <div class="bericht"><p><?php echo $value['text']; ?></p></div>
                <div class="actions">
                    <form  class="contact delete" id="delete" action="#" method="POST">
                      <input type="hidden" value="<?php echo $value[
                          'recensieID'
                      ]; ?>" name="id" readonly />
                      <input type="hidden" value="delete" name="delete" readonly />
                      <button class="button delete" id="delete" type="submit" name="delete">delete</button>
                    </form>
                </div>
            </div>
                <?php }
    }

    public function delete($id)
    {
        include_once '../../includes/connector.php';

        $sql = 'DELETE FROM recensie WHERE recensieID = ' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $error = 'gelukt';
        echo $error;
        return $error;
        exit();
    }

    public function getRowsNumber($userid)
    {
        global $conn;

        $sql = 'SELECT * FROM recensie WHERE userID =' . $userid;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        print $stmt->rowCount();
    }
} ?>
