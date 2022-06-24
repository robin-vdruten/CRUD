<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['show'])) {
        $id = $_POST['id'];
        $show = new contact();
        $show->show($id);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $contact = new contact();
        $contact->delete($id);
    }
}

class contact
{
    public function show($id)
    {
        include_once '../../includes/connector.php';

        $sql = 'SELECT * FROM contact WHERE contactID =' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $contact = $stmt->fetch();
        ?>
         <div class="containercon">
            <div class="box">
                <div class="header"><h4><?php echo $contact[
                    'naam'
                ]; ?></h4></div>
                <div class="header"><h4><?php echo $contact[
                    'onderwerp'
                ]; ?></h4></div>
                <div class="header"><h5><?php echo $contact[
                    'email'
                ]; ?></h5></div>
                <div class="bericht"><p><?php echo $contact[
                    'bericht'
                ]; ?></p></div>
                <div class="actions">
                    <form  class="contact delete" id="delete" action="#" method="POST">
                      <input type="hidden" value="<?php echo $contact[
                          'contactID'
                      ]; ?>" name="id" readonly />
                      <input type="hidden" value="delete" name="delete" readonly />
                      <button class="button delete" id="delete" type="submit" name="delete">delete</button>
                    </form>
                    <form  class="contact show" id="show" action="#" method="POST">
                        <input type="hidden" value="<?php echo $contact[
                            'contactID'
                        ]; ?>" name="id" readonly />
                      <input type="hidden" value="show" name="show" readonly />
                      <button class="button show" id="show" type="submit" name="show">show</button>
                    </form>
                </div>
            </div>
                    </div>
        <?php
    }

    public function delete($id)
    {
        include_once '../../includes/connector.php';

        $sql = 'DELETE FROM contact WHERE contactID = ' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $error = 'gelukt';
        echo $error;
        return $error;
        exit();
    }

    public function contact()
    {
        global $conn;

        $sql = 'SELECT * FROM contact';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $contact = $stmt->fetchAll();

        foreach ($contact as $key => $value) { ?>
            <div class="box">
                <div class="header"><h4><?php echo $value['naam']; ?></h4></div>
                <div class="header"><h4><?php echo $value[
                    'onderwerp'
                ]; ?></h4></div>
                <div class="header"><h5><?php echo $value[
                    'email'
                ]; ?></h5></div>
                <div class="bericht"><p><?php echo $value[
                    'bericht'
                ]; ?></p></div>
                <div class="actions">
                    <form  class="contact delete" id="delete" action="#" method="POST">
                      <input type="hidden" value="<?php echo $value[
                          'contactID'
                      ]; ?>" name="id" readonly />
                      <input type="hidden" value="delete" name="delete" readonly />
                      <button class="button delete" id="delete" type="submit" name="delete">delete</button>
                    </form>
                    <form  class="contact show" id="show" action="#" method="POST">
                        <input type="hidden" value="<?php echo $value[
                            'contactID'
                        ]; ?>" name="id" readonly />
                      <input type="hidden" value="show" name="show" readonly />
                      <button class="button show" id="show" type="submit" name="show">show</button>
                    </form>
                </div>
            </div>
        <?php }
    }
}
?>
