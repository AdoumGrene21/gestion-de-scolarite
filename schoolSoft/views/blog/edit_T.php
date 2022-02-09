        <div class="row  mt-3">
            <div class="col-md-8">
                <h3>Modification de information du Tuteur</h3>
            </div>

        </div>
        <div class="shadow p-3 mb-5  rounded">
            <div class="card-body">
                <form method="POST" action="http://localhost/schoolSoft/posts/edit_T/<?= $params['post']->Matricule ?>">
                    <?php foreach ($params['tuteurs'] as $tuteur) : ?>

                        <?php if ($tuteur->id === $params['post']->idTuteur) { ?>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="NomPrenom">Nom et Prenom</label>
                                        <input type="text" class="form-control" id="NomPrenom" value="<?= $tuteur->NomPrenom ?>" name="NomPrenom">
                                        <input type="hidden" class="form-control" id="id" value="<?= $params['post']->idTuteur ?>" name="idTuteur">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Contact">Contact</label>
                                        <input type="text" class="form-control" id="Contact" value="<?= $tuteur->Telephone ?>" name="Telephone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Fonction">Fonction</label>
                                        <input type="text" class="form-control" id="Fonction" value="<?= $tuteur->fonction ?>" name="fonction">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endforeach ?>
                    <button type="submit" class="btn btn-primary"> Enregistrer</button>
                </form>
            </div>
        </div>