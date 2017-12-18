<div id="<?= $id ?>" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="<?= $data['img'] ?>" alt="<?= $data['alt'] ?>" class="img-responsive">
            </div>
            <div class="col-md-5">
                <h2><?= $data['h2'] ?></h2>
                <p><?= $data['p'] ?></p>
                <ul class="fh5co-check">
                    <?php
                    foreach ($data['ul'] as $li) {
                        echo '<li>' . $li . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>