<div class="row  mt-3">
    <div class="col-md-8">
        <h3>Modification photo de Profil</h3>
    </div>

</div>
<div class="shadow p-3 mb-5  rounded">
    <div class="card-body">

        <form method="POST" enctype="multipart/form-data" action="http://localhost/schoolSoft/posts/edit_Photo/<?= $params['post']->Matricule ?>">
            <div class="form-group ">
                <div class="row">
                    <div class="col-md-8">
                        <input type="hidden" class="form-control" id="matricule" value="<?= $params['post']->Matricule ?>" name="matricule">
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary"> Enregistrer</button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>