<?php ob_start(); ?>

<!-- inpput text for function search by title -->

<div class="row">
    <div class="col-md-4 offset-md-8">
        <form method="get">
            <div class="form-group has-btn">
                <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                       placeholder="Rechercher un film ou une série" >
                <button type="submit" class="btn btn-block bg-red">Valider</button>
            </div>
        </form>
    </div>
</div>

<div class="bg-white col-sm-12 container-* ">
<p>Veuillez renseignez des champs à trier</p>
<!-- First step for filter film/series by genrder

<form action="#" method="post">
<input type="checkbox" name="gender" value="Male">Science-Fiction</input>
<input type="checkbox" name="gender" value="Female">Action</input>
<input type="checkbox" name="gender" value="Male">Horreur</input>
<input type="checkbox" name="gender" value="Female">Animation</input>
<input type="submit" name="submit" value="Submit"/>
</form>
 -->   
</div>

<!-- Show all media with title -->
<div class="media-list bg-white" >
    <?php foreach( $medias as $media ): ?>
        <a class="item" href="index.php?action=detailMedia&detailmedia=<?= $media['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                        src="<?= $media['trailer_url']; ?>" >
                    </iframe>
                </div>
            </div>
            <div class="title"><?= $media['title']; ?></div>
        </a>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>


<?php require('dashboard.php'); ?>

