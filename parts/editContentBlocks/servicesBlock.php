<form method="POST">
    <?php foreach($contentData as $i => $service) : ?>
    <div class="form-group">
        <label for="<?= $contentType; ?>_iconName_<?= $i; ?>">Icon name</label>
        <input value="<?= $service['iconName'] ?>" type="text" name="iconName[]" class="form-control" id="<?= $contentType; ?>_iconName_<?= $i; ?>">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_h3_<?= $i; ?>">Heading</label>
        <input value="<?= $service['h3'] ?>" type="text" name="h3[]" class="form-control" id="<?= $contentType; ?>_h3_<?= $i; ?>">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_p_<?= $i; ?>">Paragraph</label>
        <textarea name="p[]" class="form-control" id="<?= $contentType; ?>_p_<?= $i; ?>"><?= $service['p'] ?></textarea>
    </div>
    <?php endforeach; ?>
    <input type="reset" value="Reset" class="btn btn-warning">
    <input type='hidden' name='contentBlock' value='<?= $id; ?>'>
    <input type='hidden' name='contentType' value='<?= $contentType; ?>'>
    <input type="submit" value="Save changes" class="btn btn-primary">
</form>