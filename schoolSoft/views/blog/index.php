<form id="formulaire" name="formulaire" method="post" action="">
    <br>
    <div class="search-wrapper ">

        <input type="text" id="search_text" name="search" placeholder="seach here" class="form-control">

    </div>
</form>
<div>
    <span>
        <a href="" class="list-group-item list-group-item-action">
            recherche avancée
        </a>
    </span>
</div>
<br>
<div class="list-group">
    <div id="resul">

        <?php foreach ($params['posts'] as $post) : ?>
            <a href="http://localhost/schoolSoft/posts/<?= $post->Matricule ?>" class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-md-8" style="  height: 20px;">
                        <small><?= $post->Nom . " " . $post->Prenom ?></small>

                    </div>

                    <div class="col-md-4 text-right" style="  height: 20px;">
                        <small style="  " class="text text-info"><?= $post->getMat() ?></small>
                        <small class="text text-dark"><?= $post->getSexe() ?></small>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</div>