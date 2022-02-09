<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <?php $i = 0;
                foreach ($params['tablenote1'] as $tabnote1) : ?>
                <?php if ($i == 0) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">                            
                            <?= strtoupper($tabnote1->nom_matiere) ?>
                        </h5>
                                <span >
                                 
                                </span>
                               
                    </div>

                    <div class="col-md-6 text-right">
                        <a href="http://localhost/schoolSoft/notes/insertnote/<?= $tabnote1->identifiant ?>"  class="btn btn-info">Insersion note</a>
                    </div>
                </div>
                <?php endif ?>
                <?php $i++; ?>
                <?php endforeach ?>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th width="70%">Eleves</th>
                            <th>1er Note</th>
                            <!-- <th>2em Note</th> -->
                            <th>Note Composition</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($params['tablenote'] as $tablenote) : ?>
                            <tr>
                                <td>
                                    <?= $tablenote->fullname ?>
                                </td>
                                <td>
                                    <?= $tablenote->note_controle ?>
                                </td>

                                <td>
                                    <?= $tablenote->note_composition ?>

                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>