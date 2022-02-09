<div class="container">
    <h2>Resultat</h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs  justify-content-center" role="tablist">
        <li class="nav-item">
            <a class="nav-link " data-toggle="tab" href="#home">Primaire</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#menu1">premier Cycle</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Second Cycle</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="container tab-pane fade"><br>
            xx
        </div>
        <div id="menu1" class="container tab-pane active">

            <ul  class="nav nav-tabs" role="tablist"> 
                <?php foreach ($params['classes'] as $classe) : ?>
                    <li class="nav-item">
                        <a class="nav-link" onclick="load(<?= $classe->id ?>)" data-toggle="tab"><?= $classe->libelle ?></a>
                    </li>
                <?php endforeach ?>
            </ul>

            <!-- <br> -->
            <div class="row">
                <div class="col-md-8">
                    <div id="detailEleve">
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="listeEleveByClasse">
                    </div>
                </div>
            </div>
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            yy
        </div>
    </div>
</div>

<!-- </div>
</div> -->




<!-- <button onclick="load()">ok</button> -->