<div id="<?= $id ?>" class="fh5co-section">
    <div class="container">
        <div class="row">
            <?php foreach ($data as $service): ?>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="<?= 'icon-' . $service['iconName'] ?>"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3><?= $service['h3'] ?></h3>
                            <p><?= $service['p'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>