<form method="POST">
    <div class="form-group">
        <label for="<?= $contentType; ?>_h2">Heading</label>
        <input value="<?= $contentData['h2'] ?>" type="text" name="h2" class="form-control" id="<?= $contentType; ?>_h2">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_p">Paragraph</label>
        <textarea name="p" class="form-control" id="<?= $contentType; ?>_p"><?= $contentData['p'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_address">Address</label>
        <textarea name="address" class="form-control" id="<?= $contentType; ?>_address"><?= $contentData['address'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_email">Email</label>
        <input value="<?= $contentData['email'] ?>" type="text" name="email" class="form-control" id="<?= $contentType; ?>_email">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_phone">Phone</label>
        <input value="<?= $contentData['phone'] ?>" type="text" name="phone" class="form-control" id="<?= $contentType; ?>_phone">
    </div>
    <input type="reset" value="Reset" class="btn btn-warning">
    <input type='hidden' name='contentBlock' value='<?= $id; ?>'>
    <input type='hidden' name='contentType' value='<?= $contentType; ?>'>
    <input type="submit" value="Save changes" class="btn btn-primary">
</form>