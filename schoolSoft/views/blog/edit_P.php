        <div class="row  mt-3">
            <div class="col-md-8">
                <h3>Modification de Profil</h3>
            </div>

        </div>
        <div class="shadow p-3 mb-5  rounded">
            <div class="card-body">

                <form method="POST" action="http://localhost/schoolSoft/posts/edit/<?= $params['post']->Matricule ?>">
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Nom">Nom</label>
                                <input type="text" class="form-control" id="Nom" value="<?= $params['post']->Nom ?>" name="Nom">
                            </div>
                            <div class="col-md-6">
                                <label for="Prenom">Prenom</label>
                                <input type="text" class="form-control" id="Prenom" value="<?= $params['post']->Prenom ?>" name="Prenom">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Date de Naissance">Date de Naissance</label>
                                <input type="date" class="form-control" id="Date de Naissance" value="<?= $params['post']->DateNaissance ?>" name="DateNaissance">
                            </div>
                            <div class="col-md-6">
                                <label for="Lieu de Naissance">Lieu de Naissance</label>
                                <input type="text" class="form-control" id="Lieu de Naissance" value="<?= $params['post']->LieuNaissance ?>" name="LieuNaissance">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="Nationnalite">Nationnalite</label>
                                <input type="text" class="form-control" id="Nationnalite" value="<?= $params['post']->Nationalite ?>" name="Nationalite">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"> Enregistrer</button>
                </form>

            </div>
        </div>