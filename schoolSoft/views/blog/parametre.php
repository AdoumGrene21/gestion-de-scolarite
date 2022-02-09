<div class="shadow p-3 mb-5  rounded">
        <div class="card-body">
            <h3>Importation de données externe vers la base de données.</h3>
        </div>
    </div>
<div class="row">
   
    <div class="col-md-6">
        <form method="POST" enctype="multipart/form-data" action="http://localhost/schoolSoft/uploaddata">
            <div class="form-group ">
                <label for="file">choisissez un fichier csv</label>
                <input type="file" class="form-control" id="file" value="" name="uploadfile">
            </div>
            <div class="form-group ">
                <!-- <label for="file">choisissez un fichier csv</label> -->
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
    <div class="col-md-6">

    </div>
</div>