
<div class="row">
    <div class="col-md-8">
        <div  class="list-group">
            <div id="detailNote" class="list-group-item list-group-item-action">
                
            </div>

        </div>
    </div>
    <div class="col-md-4">
<!-- <button onclick="load()" type="">oo</button> -->
        <div class="list-group">
            <div id="resul">
                <?php foreach ($params['eleve'] as $eleve) : ?>
                    <?php 
                    
                        $id =  "{$eleve->Matricule}{$params['classe']->id}" ?>
                    <button onclick="load(<?= $id  ?>)" class="list-group-item list-group-item-action">

                        <h6><?= $eleve->Nom . " " . $eleve->Prenom ?></h6>
                        <div class="row">
                            <div class="col-md-8">
                                <small class="text text-info"><?= $eleve->DateNaissance ?></small>
                            </div>

                            <div class="col-md-4 text-right">
                                <small class="text text-dark"><?= $eleve->Civilite ?></small>
                            </div>
                        </div>

                    </button>

                <?php endforeach ?>

            </div>
        </div>


    </div>
</div>

</div>