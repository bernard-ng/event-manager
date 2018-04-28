<?php include(APP."/views/includes/menu.php"); ?>
<div class="parallax-container event">
   <div class="container row">
       <h1><?= $event->name ?></h1>
       <small>Du <?= $event->started ?> au <?= $event->end ?></small>
   </div>
</div>
<section class="container row">
    <div class="col l6 m6">
        <p><?= nl2br(substr($event->description, 0,255)) ?></p>
    </div>
    <div class="col l4">
        <table>
            <thead>
                <tr>
                    <th>Tables</th>
                    <th>Invités</th>
                    <th>Déja Présent</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>45</th>
                    <th>799</th>
                    <th>455</th>
                    <th>statisfait</th>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include(APP."/views/includes/script.php"); ?>