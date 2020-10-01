<?php
    include __DIR__ .'/partials/templates/header.php';
?>

<div class="container p-3">
    <form action="partials/create/server.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero Stanza</label>
            <input type="text" class="form-control" name="roomNumber" value="" id="roomNumber" placeholder="inserisci il numero">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input type="text" class="form-control" name="floor" value="" id="floor" placeholder="inserisci il piano">
        </div>
        <div class="form-group">
            <label for="beds"> Numero Letti</label>
            <input type="text" class="form-control" name="beds" value="" id="beds" placeholder="inserisci il numero di letti">
        </div>
        <div class="form-group">
            <input type="submit" class="bg-warning form-control" value="INSERISCI">
        </div>
    </form>
</div>



<?php
    include __DIR__ .'/partials/templates/footer.php';
?>
