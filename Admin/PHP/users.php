<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $contact = new users();
        $contact->delete($id);
    }
}

class users
{
    public function delete($id)
    {
        include_once '../../includes/connector.php';

        $sql = 'DELETE FROM users WHERE userID = ' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $error = 'gelukt';
        echo $error;
        return $error;
        exit();
    }

    public function users()
    {
        global $conn;

        $sql = 'SELECT * FROM users';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();

        foreach ($users as $key => $value) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $value['userID']; ?></td>
                        <td><?php echo $value['voornaam']; ?></td>
                        <td><?php echo $value['achternaam']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['admin']; ?></td>
                        <td><form  class="contact remove" id="remove" action="#" method="POST">
                      <input type="hidden" value="<?php echo $value[
                          'userID'
                      ]; ?>" name="id" readonly />
                      <input type="hidden" value="remove" name="delete" readonly />
                      <button class="button remove" id="remove" type="submit" name="delete">delete</button>
                    </form></td>
                    </tr>
                </tbody>
        <?php }
    }
}
?>
