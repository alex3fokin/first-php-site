<form method="POST">
    <div class="form-group">
        <label for="<?= $contentType; ?>_h2">Heading</label>
        <input value="<?= $contentData['h2']; ?>" type="text" name="h2" class="form-control" id="<?= $contentType; ?>_h2">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_p">Paragraph</label>
        <textarea name="p[]" class="form-control" id="<?= $contentType; ?>_p"><?= $contentData['p'][0]; ?></textarea>
    </div>
    <?php foreach($contentData['p'][1] as $p): ?>
    <div class="form-group">
        <label for="<?= $contentType; ?>_p">Paragraph</label>
        <textarea name="p[1][]" class="form-control" id="<?= $contentType; ?>_p"><?= $p; ?></textarea>
    </div>
    <?php endforeach; ?>
    <input type="reset" value="Reset" class="btn btn-warning">
    <input type='hidden' name='contentBlock' value='<?= $id; ?>'>
    <input type='hidden' name='contentType' value='<?= $contentType; ?>'>
    <input type="submit" value="Save changes" class="btn btn-primary">
</form>