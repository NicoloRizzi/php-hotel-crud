<?php

include_once __DIR__ . '/partials/update/server-edit.php';

//SEZIONE HEAD
include __DIR__ . '/partials/templates/head.php';

//SEZIONE HEADER
include __DIR__ . '/partials/templates/header.php';

?>
<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4">
                <h1 class="text-primary">EDIT room <?php echo $room['room_number']; ?></h1>
            </header>
            <form action="./partials/update/server-update.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room number</label>
                    <input class="form-control" type="number" name="room_number" id="room_number" value="<?php echo $room['room_number']; ?>">
                </div>
                <div class="form-group">
                    <label for="beds">Beds</label>
                    <input class="form-control" type="number" name="beds" id="beds" value="<?php echo $room['beds']; ?>">
                </div>
                <div class=" form-group">
                    <label for="floor">Floor</label>
                    <input class="form-control" type="number" name="floor" id="floor" value="<?php echo $room['floor']; ?>">
                </div>
                <div class="form-group text-right">
                    <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
            <a class="btn btn-primary" href="<?php echo $base_path; ?>show.php?id=<?php echo $room['id']; ?>"> Room Details
            </a>
        </div>
    </div>
</main>
<?php // footer section
include __DIR__ . '/partials/templates/footer.php';
?>