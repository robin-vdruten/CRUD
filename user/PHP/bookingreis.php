<?php
if (isset($_POST['annuleren'])) {
    $id = $_POST['id'];
    $annuleren = new booking();
    $annuleren->delete($id);
}

class booking
{
    public function bookingreis($id)
    {
        global $conn;

        $sql =
            'SELECT * FROM booking INNER JOIN reizen on booking.reisID=reizen.reisID INNER JOIN users on booking.gebruikerID=users.userID WHERE gebruikerID = :gebruikerID';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':gebruikerID', $id);
        $stmt->execute();
        $booking = $stmt->fetchAll();

        foreach ($booking as $key => $value) { ?>
                <div class="box">
                <div class="header"><h4><?php echo $value[
                    'voornaam'
                ]; ?></h4></div>
                <div class="header"><h4>€ <?php echo $value[
                    'prijs'
                ]; ?></h4></div>
                <div class="header"><h5>land: <?php echo $value[
                    'land'
                ]; ?></h5></div>
                <div class="bericht"><p>hotel: <?php echo $value[
                    'hotel'
                ]; ?></p></div>
                <div class="bericht"><p>begin reis: <?php echo $value[
                    'startDatum'
                ]; ?></p></div>
                <div class="bericht"><?php echo '<img width="70" src="data:image/jpeg;base64,' .
                    base64_encode($value['foto']) .
                    '"/>'; ?></div>
                <div class="actions">
                    <form  class="contact annuleren" id="annuleren" action="#" method="POST">
                      <input type="hidden" value="<?php echo $value[
                          'bookingID'
                      ]; ?>" name="id" readonly />
                      <input type="hidden" value="annuleren" name="annuleren" readonly />
                      <button class="button annuleren" id="annuleren" type="submit" name="annuleren">Delete</button>
                    </form>
                </div>
            </div>
                <?php }
    }

    public function delete($id)
    {
        include_once '../../includes/connector.php';

        $sql = 'DELETE FROM booking WHERE bookingID = ' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $error = 'gelukt';
        echo $error;
        return $error;
        exit();
    }
}
?>
