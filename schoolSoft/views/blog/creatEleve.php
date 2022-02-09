<form id="regForm" action="http://localhost/schoolSoft/saveEleve" method="POST">
    <!-- <h1>Enregistrement....</h1> -->
    <!-- One "tab" for each step in the form: -->
    <div style="text-align:center;margin-top:0px; margin-bottom: 10px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <!-- <span class="step"></span> -->
    </div>
    <div class="tab">
        <div class="row  mt-2">
            <div class="col-md-12">
                <h3 style="border-bottom:1px solid black; margin-bottom: 30px;">Profil Eleve</h3>
            </div>
        </div>
        <div class="form-group ">

            <div class="row">
                <div class="col-md-6">
                    <!-- <input type="text" id="" name="search" placeholder="seach here" class="form-control"> -->
                    <label for="parcours">Civilite</label>
                    <select class="form-control" id="classe" name="sexe" required>

                        <option value=""> --Selectionner--</option>
                        <option value="masculin "> Masculin</option>
                        <option value="feminin ">Feminin</option>

                    </select>
                    <!-- <input type="hidden" class="form-control" id="id" value="" name="idTuteur"> -->
                </div>
                <div class="col-md-6">
                    <!-- <input type="text" id="" name="search" placeholder="seach here" class="form-control"> -->
                    <label for="Nationnalite">Nationnalite</label>
                    <select class="form-control" id="Nationnalite" name="nationnalite" required>

                        <option value=""> --Selectionner--</option>
                        <option value="tchadienne "> Tchadienne</option>
                        <option value="cammerounaise ">Cammerounaise</option>

                    </select>
                    <!-- <input type="hidden" class="form-control" id="id" value="" name="idTuteur"> -->
                </div>
            </div>
        </div>
        <div class="form-group ">
            <!-- <br> -->
            <div class="row">
                <div class="col-md-6">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="Nom">
                </div>
                <div class="col-md-6">
                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="Prenom">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="Date de Naissance">Date de Naissance</label>
                    <input type="date" class="form-control" id="Date de Naissance" name="DateNaissance">
                </div>
                <div class="col-md-6">
                    <label for="Lieu de Naissance">Lieu de Naissance</label>
                    <input type="text" class="form-control" id="Lieu de Naissance" name="LieuNaissance">
                </div>
            </div>
        </div>

    </div>

    <div class="tab">
        <div class="row  mt-3">
            <div class="col-md-12">
                <h3 style="border-bottom:1px solid black; margin-bottom: 30px;">Addresse Eleve</h3>
            </div>
        </div>
        <!-- contact telephonique.. -->
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="Date de Naissance">E-mail</label>
                    <input type="mail" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-6">
                    <label for="Lieu de Naissance">Telephone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="Date de Naissance">Quartier</label>
                    <input type="text" class="form-control" id="quartier" name="quartier">
                </div>
                <div class="col-md-6">
                    <label for="Lieu de Naissance">Arrondissement</label>
                    <input type="text" class="form-control" id="arrondissement" name="arrondissement">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="Date de Naissance">Nom et Prenom du Tuteur</label>
                    <input type="text" class="form-control" id="nomprenom" name="nomprenom">
                </div>
                <div class="col-md-4">
                    <label for="Lieu de Naissance">Contact</label>
                    <input type="text" class="form-control" id="Lieu de Naissance" name="contact">
                </div>
                <div class="col-md-4">
                    <label for="Lieu de Naissance">Fonction</label>
                    <input type="text" class="form-control" id="fonction" name="fonction">
                </div>
            </div>
        </div>
    </div>



    <div class="tab">
        <div class="form-group ">
            <!-- <div class="row">
                <div class="col-md-12">
                    
                    <label for="parcours">Parcours</label>
                    <select class="form-control" id="parcours" onchange="fetchParcours(this.value)"  name="parcours" required>
                        <option value="">--select--</option>
                        <option value="1">scientifique</option>
                        <option value="2">litterature</option>
                        <option valuue="3">nom orienter</option>

                    </select>
                    
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-md-12">
                    
                    <label for="parcours">Cycles</label>
                    <select class="form-control" id="cycle"  name="cycle" required>

                        <option value="">--select--</option>
                        <option value="premier cycle">premier cycle</option>
                        <option value="seconde cycle">seconde cycle</option>
                        

                    </select>
                    
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-md-12">
                    
                    <label for="parcours">Niveaux</label>
                    <select class="form-control" id="niveau" name="niveau" required>
                        <option value="">--select--</option>
                        <option value="cinquieme">cinquieme</option>
                        <option value="quatrieme">quatrieme</option>
                        <option value="troisieme">troisieme</option>
                        <option value="seconde">seconde</option>

                    </select>
                    
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <!-- <input type="text" id="" name="search" placeholder="seach here" class="form-control"> -->
                    <label for="parcours">Classes</label>
                    <select class="form-control" id="classe" name="classe" required>

                        <option value="">--select--</option>
                        <option value="3">6e A</option>
                        <option value="4">6e B</option>
                        <option value="5">5e A</option>
                        <option value="6">5e B</option>


                    </select>
                    <!-- <input type="hidden" class="form-control" id="id" value="" name="idTuteur"> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="tab">
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="inscription">Inscription</label>
                    <input type="text" class="form-control" id="inscription" name="inscription">
                </div>
                <div class="col-md-4">
                    <label for="tranche1">1er Tranche</label>
                    <input type="text" class="form-control" id="tranche1" name="tranche1">
                </div>
                <div class="col-md-4">
                    <label for="tranche2">2e Tranche </label>
                    <input type="text" class="form-control" id="tranche2" name="tranche2">
                </div>
            </div>
        </div>
    </div> -->
    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->

</form>