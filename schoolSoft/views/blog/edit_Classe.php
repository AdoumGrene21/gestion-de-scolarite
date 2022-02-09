<div class="row  mt-3">
    <div class="col-md-8">
        <h3>Edition pedagogique</h3>
    </div>

</div>
<div class="shadow p-3 mb-5  rounded">
    <div class="card-body">
        <form method="POST"  action="">

            <div class="form-group ">
                <div class="row">
                    <div class="col-md-12">
                      
                        <label for="Classe">Parcours</label>
                        <select class="form-control" id="classe"  name="classe" required>

                            <option >--select classe--</option>
                            <?php foreach ($params['classe'] as $class) : ?>
                                <option value="<?= $class->id ?>"><?= $class->libelle ?></option>
                            <?php endforeach ?>

                        </select>
                        <!-- <input type="hidden" class="form-control" id="id" value="" name="idTuteur"> -->
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"> Enregistrer</button>
        </form>
    </div>

</div>
<!-- <div id="resul2">x</div> -->