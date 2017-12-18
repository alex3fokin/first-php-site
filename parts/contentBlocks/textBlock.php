<div id="<?= $id ?>" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h2><?= $data['h2'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p><?= $data['p'][0] ?></p>
            </div>
            <div class="col-md-6">
                <?php
                foreach ($data['p'][1] as $p) {
                    echo '<p>' . $p . '</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>