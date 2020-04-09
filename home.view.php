<div class="container">
    <form method="post">
        <div class="row row-cols-1 row-cols-md-2">
            <?php foreach ($posts as $p): ?>
                <div class="col mb-4">
                    <div class="card" style="width: 500px;">
                <img src="img/<?= $p->image ?>" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $p->title ?></h5>
                    <p class="card-text"><?= $p->description ?></p>
                    <hr>
                    <p class="card-text"><small class="text-muted"><?= $p->datePublication ?></small></p>
                    <a href="about.php?id=<?=$p->id_post?>" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
</div>

