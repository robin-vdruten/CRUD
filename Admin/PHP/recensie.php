<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['validate'])) {
        $id = $_POST['id'];
        $validate = new recensie();
        $validate->validate($id);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $delete = new recensie();
        $delete->delete($id);
    }
}

class recensie
{
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

    public function validate($id)
    {
        include_once '../../includes/connector.php';

        $sql = 'UPDATE recensie SET validatie = 1 WHERE recensieID =' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    public function validaterecensies()
    {
        global $conn;

        $sql = 'SELECT * FROM recensie where validatie = 0';
        $stmt = $conn->prepare($sql);
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
                <div class="header"><h5><?php echo $value[
                    'sterren'
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
                    <form  class="contact validate" id="validate" action="#" method="POST">
                      <input type="hidden" value="<?php echo $value[
                          'recensieID'
                      ]; ?>" name="id" readonly />
                      <input type="hidden" value="delete" name="validate" readonly />
                      <button class="button validate" id="validate" type="submit" name="validate">validate</button>
                    </form>
                </div>
            </div>
        <?php }
    }

    public function recensies()
    {
        global $conn;

        $sql = 'SELECT * FROM recensie';
        $stmt = $conn->prepare($sql);
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
                <div class="header"><h5><?php echo $value[
                    'sterren'
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
}
?>
