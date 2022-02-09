<!-- <a href="http://localhost/schoolSoft/posts" class="btn btn-secondary">Back</a> -->
<div class="row  mb-1">
    <div class="col-md-1" style=" transform: translateY(-50%,-50%); z-index: 9;  ">

            <img src="../public/photo/<?= $params['post']->photo ?>" style="border-radius : 50%;" width="100%" height="100%" alt="">
            <!-- <input type="file" id="photo" name="photo" style="display:none;"> -->
            <a for="photo" class="btn btn-outline-dark" href="http://localhost/schoolSoft/posts/uploadPhoto/<?= $params['post']->Matricule ?>" style="height: 30px; width:100%; transform: translateY(-50%);">photo</a>
           
    </div>
    <div class="col-md-5" style="font-size: 25px; font-family:'Verdana', Courier, monospace; padding: 20px 0px 0px 30px; margin-left:15px;">
        <?= strtoupper($params['post']->Nom)  ?>
        <?= strtoupper($params['post']->Prenom) ?>
        <br>
        <small><?= $params['post']->Matricule ?></small>
    </div>
    <div class="col-md-5 text-right mb-1 p-4" style="margin-left:40px;">
        <a href="http://localhost/schoolSoft/posts/PdfCertificat/<?= $params['post']->Matricule ?>" target="_blank" class="btn btn-info">Certificat</a>
        <a href="http://localhost/schoolSoft/posts/PdfCarte/<?= $params['post']->Matricule ?>" target="_blank" class="btn btn-info">carte</a>
        
    </div>
</div>
<div class="shadow mb-2  rounded">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h3>Profil Eleve / Etat Civil</h3>
            </div>
            <div class="col-md-4 text-right">
                <a href="http://localhost/schoolSoft/posts/edit_P/<?= $params['post']->Matricule ?>" class="btn btn-outline-dark"> Editer</a>
            </div>
        </div>

        <table class="table">
            <tbody>
                <!-- <tr>
                    <td style="width: 40%;  font-weight: bold "> Matricule </td>
                    <td> matricule </td>

                </tr> -->
                <tr>
                    <td style="width: 40%;  font-weight: bold"> Nom </td>
                    <td> <?= $params['post']->Nom ?> </td>
                </tr>
                <tr>
                    <td style="width: 40%;  font-weight: bold"> Prenom </td>
                    <td> <?= $params['post']->Prenom ?> </td>
                </tr>
                <tr>
                    <td style="width: 40%;  font-weight: bold"> Date de Naissance </td>
                    <td> <?= $params['post']->DateNaissance ?> </td>
                </tr>
                <tr>
                    <td style="width: 40%;  font-weight: bold"> Lieu de Naissance </td>
                    <td> <?= $params['post']->LieuNaissance ?> </td>
                </tr>
                <tr>
                    <td style="width: 40%;  font-weight: bold"> Nationnalite</td>
                    <td> <?= $params['post']->Nationalite ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="shadow mb-2  rounded">

    <!-- <div class="card mb-3 "> -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h3>Contacts - Adresses</h3>
            </div>
            <div class="col-md-4 text-right">
                <a href="http://localhost/schoolSoft/posts/edit_C/<?= $params['post']->Matricule ?>" class="btn btn-outline-dark"> Editer</a>
            </div>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <td style="width: 40%;  font-weight: bold"> E-mail </td>
                    <td> <?= $params['post']->Email ?> </td>
                </tr>
                <tr>
                    <td style="width: 40%;  font-weight: bold"> Telephone </td>
                    <td> <?= $params['post']->Contact ?> </td>
                </tr>
                <tr>
                    <td style="width: 40%;  font-weight: bold"> Arrondissement </td>
                    <td> <?= $params['post']->Arrondissement ?> </td>
                </tr>
                <tr>
                    <td style="width: 40%;  font-weight: bold"> Quartier </td>
                    <td> <?= $params['post']->Quartier ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- </div> -->
</div>

<div class="shadow  mb-2  rounded">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">

                <h3>Information du Tuteurs</h3>

            </div>
            <div class="col-md-4 text-right">
                <a href="http://localhost/schoolSoft/posts/edit_T/<?= $params['post']->Matricule ?>" class="btn btn-outline-dark"> Editer</a>
            </div>
        </div>
        <?php foreach ($params['tuteurs'] as $tuteur) : ?>

            <?php if ($tuteur->id === $params['post']->idTuteur) { ?>

                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 40%;  font-weight: bold"> Nom et Prenom </td>
                            <td> <?= $tuteur->NomPrenom ?> </td>
                        </tr>
                        <tr>
                            <td style="width: 40%;  font-weight: bold"> Contacts</td>
                            <td> <?= $tuteur->Telephone ?> </td>
                        </tr>
                        <tr>
                            <td style="width: 40%;  font-weight: bold"> Fonction</td>
                            <td> <?= $tuteur->fonction ?> </td>
                        </tr>

                    </tbody>
                </table>
            <?php } ?>
        <?php endforeach ?>
    </div>
</div>


<!-- partie classe  -->
<div class="shadow  mb-2  rounded">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h3>Information Pedagogiaue</h3>
            </div>
            <div class="col-md-4 text-right">
                <form action="" method="post">

                </form>
                <a href="http://localhost/schoolSoft/posts/edit_Pedagogie/<?= $params['post']->Matricule ?>" class="btn btn-outline-dark"> Editer</a>
            </div>
        </div>
        <?php foreach ($params['classe'] as $classe) : ?>
            <?php if ($classe->id === $params['post']->id_classe) { ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 40%;  font-weight: bold"> Classe </td>
                            <td> <?= $classe->classe ?> </td>
                        </tr>
                        <tr>
                            <td style="width: 40%;  font-weight: bold"> Niveau</td>
                            <td> <?= $classe->niveau ?> </td>
                        </tr>
                        <tr>
                            <td style="width: 40%;  font-weight: bold"> Cycle</td>
                            <td> <?= $classe->cycle ?> </td>
                        </tr>
                        <tr>
                            <td style="width: 40%;  font-weight: bold"> Parcours</td>
                            <td> <?= $classe->parcours ?> </td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
        <?php endforeach ?>
    </div>
</div>