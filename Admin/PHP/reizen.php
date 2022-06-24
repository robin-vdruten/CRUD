<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update'])) {
        include_once '../../includes/connector.php';

        $sql = 'SELECT * FROM reizen where reisID = ' . $_POST['id'];
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $reizen = $stmt->fetch();

        $backup = '';

        if (!empty($_FILES['file_up']['tmp_name'])) {
            $foto = $_FILES['file_up']['tmp_name'];
        } else {
            $foto = '';
            $backup = $reizen['foto'];
        }

        $update = new reizen();
        $update->update(
            $_POST['id'],
            $_POST['startDatum'],
            $_POST['eindDatum'],
            $_POST['prijs'],
            $_POST['hotel'],
            $foto,
            $backup,
            $_POST['plaats'],
            $_POST['personen'],
            $_POST['land']
        );
    } elseif (isset($_POST['create'])) {
        $picture = $_FILES['file_up']['tmp_name'];
        $foto = fopen($picture[0], 'rb');
        $items = [
            $_POST['startDatum'],
            $_POST['eindDatum'],
            $_POST['prijs'],
            $_POST['hotel'],
            $_POST['plaats'],
            $_POST['personen'],
            $_POST['land'],
        ];
        $create = new reizen();
        $create->create($items, $foto);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $delete = new reizen();
        $delete->delete($id);
    } elseif (isset($_POST['show'])) {
        $show = new reizen();
        $show->show();
    } else {
        $id = $_POST['id'];
        $edit = new reizen();
        $edit->edit($id);
    }
}

class reizen
{
    public function create($createitems, $picture)
    {
        include_once '../../includes/connector.php';

        $sql =
            'INSERT INTO reizen (hotel,startDatum,eindDatum, plaats , personen, land, foto, prijs) VALUES (:hotel,:startDatum,:eindDatum,:plaats,:personen,:foto,:land,:prijs)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':hotel', $createitems['3']);
        $stmt->bindParam(':startDatum', $createitems['0']);
        $stmt->bindParam(':eindDatum', $createitems['1']);
        $stmt->bindParam(':prijs', $createitems['2']);
        $stmt->bindParam(':foto', $createitems['6']);
        $stmt->bindParam(':plaats', $createitems['4']);
        $stmt->bindParam(':personen', $createitems['5']);
        $stmt->bindParam(':land', $picture, PDO::PARAM_LOB);
        $stmt->execute();

        $error = 'gelukt';
        echo $error;
        return $error;
    }

    public function show()
    {
        echo '<form method="post" class="create" id="create" name="create" action="PHP/reizen.php" enctype="multipart/form-data">';
        echo '<input type="hidden" name="create" value="create">';
        echo '<div>';
        echo '<label>hotelnaam</label>';
        echo '<input type="text" name="hotel" required />';
        echo '</div>';
        echo '<div>';
        echo '<label>land</label>';
        echo '<input type="text" name="land" />';
        echo '</div>';
        echo '<div>';
        echo '<label>prijs</label>';
        echo '<input type="text"  name=prijs />';
        echo '</div>';
        echo '<div>';
        echo '<label>startDatum</label>';
        echo '<input class="checkin-date"  type="date"  name="startDatum" />';
        echo '</div>';
        echo '<div>';
        echo '<label>eindDatum</label>';
        echo '<input class="checkin-date" type="date"   name="eindDatum" />';
        echo '</div>';
        echo '<div>';
        echo '<label>plaats</label>';
        echo '<input type="text" name=plaats />';
        echo '</div>';
        echo '<div>';
        echo '<label>personen</label>';
        echo '<input type="text" name=personen />';
        echo '</div>';
        echo '<label>foto</label>';
        echo '<input
          type="file"
          name="file_up"
        />';
        echo '</div>';
        echo '<button class="create" id="create" type="submit" name="create">create</button>';
        echo '</form>';
    }

    public function delete($id)
    {
        include_once '../../includes/connector.php';

        $sql = 'DELETE FROM reizen WHERE reisID = ' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('location: ../reizen.php');
        exit();
    }

    public function edit($id)
    {
        include_once '../../includes/connector.php';

        $sql = 'SELECT * FROM reizen where reisID = ' . $id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $reizen = $stmt->fetch();

        echo '<form method="post" class="updatereis" id="updatereiz" name="update" action="#">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<input type="hidden" name="update" value="update">';
        echo '<div>';
        echo '<label>hotelnaam</label>';
        echo '<input value="' . $reizen['hotel'] . ' " name=hotel />';
        echo '</div>';
        echo '<div>';
        echo '<label>land</label>';
        echo '<input value="' . $reizen['land'] . ' " name=land />';
        echo '</div>';
        echo '<div>';
        echo '<label>prijs</label>';
        echo '<input value="' . $reizen['prijs'] . ' " name=prijs />';
        echo '</div>';
        echo '<div>';
        echo '<label>startDatum</label>';
        echo '<input type="data" value="' .
            $reizen['startDatum'] .
            ' " name=startDatum />';
        echo '</div>';
        echo '<div>';
        echo '<label>eindDatum</label>';
        echo '<input type="data" value="' .
            $reizen['eindDatum'] .
            ' " name=eindDatum />';
        echo '</div>';
        echo '<div>';
        echo '<label>plaats</label>';
        echo '<input value="' . $reizen['plaats'] . ' " name=plaats />';
        echo '</div>';
        echo '<div>';
        echo '<label>personen</label>';
        echo '<input value="' . $reizen['personen'] . ' " name=personen />';
        echo '</div>';
        echo '<label>foto</label>';
        echo '<input
          type="file"
          name="file_up"
        />';
        echo '</div>';
        echo '<button class="updatereis" id="updatereis" type="submit" name="update">update</button>';
        echo '</form>';

        return;
    }

    public function update(
        $id,
        $startDatum,
        $eindDatum,
        $prijs,
        $hotel,
        $foto,
        $backup,
        $plaats,
        $personen,
        $land
    ) {
        include_once '../../includes/connector.php';

        global $conn;

        if (empty($backup)) {
            $foto = fopen($foto[0], 'rb');
        } else {
            $foto = $backup;
        }

        $sql =
            'UPDATE reizen SET hotel = :hotel, startDatum = :startDatum, eindDatum = :eindDatum, plaats = :plaats, personen = :personen, land = :land, foto = :foto,  prijs = :prijs WHERE reisID = :reisID';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':reisID', $id);
        $stmt->bindParam(':hotel', $hotel);
        $stmt->bindParam(':startDatum', $startDatum);
        $stmt->bindParam(':eindDatum', $eindDatum);
        $stmt->bindParam(':prijs', $prijs);
        $stmt->bindParam(':foto', $foto, PDO::PARAM_LOB);
        $stmt->bindParam(':plaats', $plaats);
        $stmt->bindParam(':personen', $personen);
        $stmt->bindParam(':land', $land);
        $stmt->execute();

        $error = 'gelukt';
        echo $error;
        return $error;

        header('location: ../reizen.php');
    }

    public function rezien()
    {
        global $conn;

        $sql = 'SELECT * FROM reizen';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $reizen = $stmt->fetchAll();

        foreach ($reizen as $key => $value) { ?>
                <p><?php echo '<img width="60" src="data:image/jpeg;base64,' .
                    base64_encode($value['foto']) .
                    '"/>'; ?></p>
                    <div class="reizen-form formfixreis">
                        <form class="reizen-form fixformreis" action="PHP/reizen.php" name="delete"  method="POST">
                <div class="reizen">
                  <input type="text" value="<?php echo $value[
                      'reisID'
                  ]; ?>" name="id" readonly />
                  <hr>
                </div>
                <div class="reizen">
                  <input type="text" value="<?php echo $value[
                      'hotel'
                  ]; ?>" name="place_departure" />
                  <hr>
                </div>
                <div class="reizen">
                  <input type="text" value="<?php echo $value[
                      'plaats'
                  ]; ?>" name="place_destination" />
                  <hr>
                </div>
                <div class="reizen">
                  <input type="text" value="<?php echo $value[
                      'startDatum'
                  ]; ?>" name="time_arrived" />
                  <hr>
                </div>
                <div class="reizen">
                  <input type="text" value="<?php echo $value[
                      'eindDatum'
                  ]; ?>" name="time_leaving" />
                  <hr>
                </div>
                <div class="reizen">
                  <input type="text" value="<?php echo $value[
                      'personen'
                  ]; ?>" name="seats" />
                  <hr>
                </div>
                <div class="delete">
                  <button class="delete" type="submit" name="delete">
                    <p>Wissen</p>
                  </button>
                </div>
              </form>
              <div class="update">
                    <form  class="reizen-form edititem" id="edititem" action="PHP/reizen.php" name="edit"  method="POST">
                      <input type="hidden" value="<?php echo $value[
                          'reisID'
                      ]; ?>" name="id" readonly />
                      <button class="update edititem" id="edititem" type="submit" name="edit">Wijzigen</button>
                    </form>
                </div>
                </div>
        <?php }
    }
}
?>
