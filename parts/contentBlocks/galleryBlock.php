<div id="<?= $id ?>" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="container gal-container">
                <?php foreach ($data as $i => $photo): ?>
                    <div class="col-md<?php if ($i === 0 || $i % 9 === 0) echo '-8';
                else echo '-4' ?> col-sm<?php if ($i === 0 || $i % 9 === 0) echo '-12';
                else echo '-6' ?> col-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#gallery-photo-<?= $i ?>">
                                <img src="<?= $photo['href'] ?>" alt = "<?= $photo['alt'] ?>">
                            </a>
                            <div class="modal fade" id="gallery-photo-<?= $i ?>" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="<?= $photo['href'] ?>" alt = "<?= $photo['alt'] ?>">
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the first one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php endforeach; ?>  
            </div>
        </div>
    </div>
</div>