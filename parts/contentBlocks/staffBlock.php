<div id="<?= $id ?>" class="fh5co-section">
    <div class="container">
        <div class="row">
            <?php foreach ($data as $person): ?>
                <div class="col-md-4 fh5co-staff">
                    <img src="<?= $person['img'] ?>" alt="<?= $person['alt'] ?>" class="img-responsive">
                    <h3><?= $person['name'] ?></h3>
                    <h4><?= $person['position'] ?></h4>
                    <p><?= $person['desc'] ?></p>
                    <ul class="fh5co-social">
                        <?php
                        foreach ($person['socialLinks'] as $link) {
                            echo ' <li><a href="' . $link['href'] . '"><i class="icon-' . $link['iconName'] . '"></i></a></li> ';
                        }
                        ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>     