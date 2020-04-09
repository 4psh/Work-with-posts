<form method="post">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card">
                        <img src="img/<?= $posts->image ?>" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $posts->title ?></h5>
                            <p class="card-text"><?= $posts->description ?></p>
                            <hr>
                            <p class="card-text"><small class="text-muted"><?= $posts->datePublication ?></small></p>
                            <a href="home.php" class="btn btn-primary" >Назад</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</form>

