<div class="row">
    <div class="col-md-12">
        <h4>Matiere</h4>
    </div>

</div>
<div class="list-group">
    <div id="resul">

    <?php foreach ($params['matieres'] as $matiere) : ?>
        <a href="http://localhost/schoolSoft/notes/<?= $matiere->iden ?>" class="list-group-item list-group-item-action">

            <h4><?= $matiere->n_matiere ?></h4>
            <div class="row">
                <div class="col-md-8">
                    <small class="text text-info">coeff : <?= $matiere->coef ?></small>
                </div>

                <div class="col-md-4 text-right">
                    <small class="text text-dark"></small>
                </div>
            </div>
        </a>
    <?php endforeach ?>
    </div>
</div>