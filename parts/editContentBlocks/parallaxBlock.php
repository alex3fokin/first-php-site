<form method="POST">
    <div class="form-group">
        <label for="<?= $id ?>_img">Image</label>
        <br>
        <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg" onclick="$('#selectedFilePath').attr('data-input', '#' + $(this).next()[0].id)">Select image</a>
        <input type='text' name='img' readonly id="<?= $id ?>_img" value="<?= $contentData['img'] ?>">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_h2">Heading</label>
        <input value="<?= $contentData['h2'] ?>" type="text" name="h2" class="form-control" id="<?= $contentType; ?>_h2">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_p">Paragraph</label>
        <textarea name="p" class="form-control" id="<?= $contentType; ?>_p"><?= $contentData['p'] ?></textarea>
    </div>
    <input type="reset" value="Reset" class="btn btn-warning">
    <input type='hidden' name='contentBlock' value='<?= $id; ?>'>
    <input type='hidden' name='contentType' value='<?= $contentType; ?>'>
    <input type="submit" value="Save changes" class="btn btn-primary">
</form>