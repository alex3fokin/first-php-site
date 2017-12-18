<div id="<?= $id ?>" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2><?= $data['h2'] ?></h2>
                <?php
                foreach ($data['p'] as $p) {
                    echo '<p>' . $p . '</p>';
                }
                ?>
            </div>
            <div class="col-md-7">
                <img src="<?= $data['img'] ?>" alt="<?= $data['alt'] ?>" class="img-responsive">
            </div>
        </div>
    </div>
</div>