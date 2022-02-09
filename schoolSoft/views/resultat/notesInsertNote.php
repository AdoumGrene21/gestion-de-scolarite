<div class="row  mt-3">
    <div class="col-md-8">
        <?php $i = 0;
        foreach ($params['tablenoteEdit'] as $dataEdit) : ?>
            <?php if ($i == 0) : ?>
                <h3>Modification de Notes</h3>
    </div>
</div>
<div class="shadow p-3 mb-5  rounded">
    <div class="card-body">
        <form method="POST" action="http://localhost/schoolSoft/notes/editNote">
        <?php endif ?>
    <?php $i++;
        endforeach ?>
    <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th width="70%">Eleves</th>
                    <th></th>
                    <th>1er Note</th>
                    <!-- <th>2em Note</th> -->
                    <th>Note Composition</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($params['tablenoteEdit'] as $dataEdit) : ?>
                    <tr>
                        <td><?= $dataEdit->fullname ?></td>
                        <td><input type="hidden" class="form-control" id="matricule" value="<?= $dataEdit->Matricule ?>" name="matricule"></td>
                        <td><input type="text" class="form-control" onchange = recuper(this.value) id="notecontrole" value="<?= $dataEdit->note_controle ?>" name="notecontrole"></td>
                        <td><input type="text" class="form-control" id="notecompo" value="<?= $dataEdit->note_composition ?>" name="notecompo"></td>
                        <td><select id="etat" name="etat">
                                <option value="valider">valider</option>
                                <option value="nonvalider">non valider</option>
                            </select></td>


                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <button type="submit" class="btn btn-primary"> Enregistrer</button>
        </form>

    </div>
</div>