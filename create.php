<?php

//SEZIONE HEAD
include __DIR__ . '/partials/templates/head.php';

//SEZIONE HEADER
include __DIR__ . '/partials/templates/header.php';

?>
<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4">
                <h1 class="text-primary">CREATE new room</h1>
            </header>
            <form action="./partials/create/server-create.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room number</label>
                    <input class="form-control" type="number" name="room_number" id="room_number" placeholder="Insert new room number">
                </div>
                <div class="form-group">
                    <label for="beds">Beds</label>
                    <input class="form-control" type="number" name="beds" id="beds" placeholder="Insert beds number">
                </div>
                <div class=" form-group">
                    <label for="floor">Floor</label>
                    <input class="form-control" type="number" name="floor" id="floor" placeholder="Insert floor">
                </div>
                <div class="form-group text-right">
                    <input type="submit" value="Create" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</main>
<?php // footer section
include __DIR__ . '/partials/templates/footer.php';
?>