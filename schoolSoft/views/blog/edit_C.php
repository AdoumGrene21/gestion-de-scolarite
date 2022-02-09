    <div class="row  mt-3">
            <div class="col-md-8">
                <h3>Modification de Contact</h3>
            </div>

        </div>
        <div class="shadow p-3 mb-5  rounded">
        <!-- <div class="card mb-3"> -->
            <div class="card-body">

                <form method="POST" action="http://localhost/schoolSoft/posts/edit/<?= $params['post']->Matricule ?>">
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="E-Mail">E-Mail</label>
                                <input type="text" class="form-control" id="E-Mail" value="<?= $params['post']->Email ?>" name="Email">
                            </div>
                            <div class="col-md-6">
                                <label for="Prenom">Contact</label>
                                <input type="text" class="form-control" id="Contact" value="<?= $params['post']->Contact ?>" name="Contact">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Arrondissement">Arrondissement</label>
                                <input type="text" class="form-control" id="Arrondissement" value="<?= $params['post']->Arrondissement ?>" name="Arrondissement">
                            </div>
                            <div class="col-md-6">
                                <label for="Quartier">Quartier</label>
                                <input type="text" class="form-control" id="Quartier" value="<?= $params['post']->Quartier ?>" name="Quartier">
                            </div>
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary"> Enregistrer</button>
                </form>

            </div>
        <!-- </div> -->
        </div>