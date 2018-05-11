<section class="container row">
    <h2><strong>Ajouter un Event</strong></h2>
    <p>Veuillez remplir les informations suivant pour créer un Event.</p>
   <div class="card-panel section  row grey darken-4">
       <form action="" method="post">
           <div class="input-field col l6 m12 s12">
               <label for="title">Titre</label>
               <input type="text" name="title" id="title" value="<?= set_value('title', '', true) ?>">
               <span class="helper-text red-text darken-4">
                    <?= form_error('title') ?>
               </span>
           </div>

           <div class="input-field col l6 m12 s12">
               <label for="date">date</label>
               <input type="text" name="date" class="" id="date" value="<?= set_value('date', '', true) ?>">
               <span class="helper-text red-text darken-4">
                    <?= form_error('date') ?>
               </span>
           </div>
           
           <div class="input-field col l6 m12 s12">
               <label for="started">Heure de Debut</label>
               <input type="text" name="started" id="started" value="<?= set_value('started', '', true) ?>">
               <span class="helper-text red-text darken-4">
                    <?= form_error('started') ?>
               </span>
           </div>

           <div class="input-field col l6 m12 s12">
               <label for="end">Heure de Fin</label>
               <input type="text" name="end" id="end" value="<?= set_value('started', '', true) ?>">
               <span class="helper-text red-text darken-4">
                    <?= form_error('end') ?>
               </span>
           </div>
           
           <div class="input-field col l12 m12 s12">
               <label for="desc">Description</label>
               <textarea name="description" id="desc" class="materialize-textarea" data-length="500"><?= set_value('description', '', true) ?>
               </textarea>
           </div>

           <button class="btn btn-flat blue darken-3 waves-effect white-text">Envoyer</button>
       </form>
   </div>
</section>