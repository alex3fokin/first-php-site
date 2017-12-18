<form method="POST">
    <?php foreach($contentData as $i => $person): ?>
    <div class="form-group">
        <label for="<?= $id ?>_img_<?= $i; ?>">Image</label>
        <br>
        <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg" onclick="$('#selectedFilePath').attr('data-input', '#' + $(this).next()[0].id)">Select image</a>
        <input type='text' name='img[]' readonly id="<?= $id ?>_img_<?= $i; ?>" value="<?= $person['img'] ?>">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_alt_<?= $i; ?>">Alt</label>
        <input value="<?= $person['alt'] ?>" type="text" name="alt[]" class="form-control" id="<?= $contentType; ?>_alt_<?= $i; ?>">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_name_<?= $i; ?>">Name</label>
        <input value="<?= $person['name'] ?>" type="text" name="name[]" class="form-control" id="<?= $contentType; ?>_name_<?= $i; ?>">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_position_<?= $i; ?>">Position</label>
        <input value="<?= $person['position'] ?>" type="text" name="position[]" class="form-control" id="<?= $contentType; ?>_position_<?= $i; ?>">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_desc_<?= $i; ?>">Description</label>
        <textarea name="desc[]" class="form-control" id="<?= $contentType; ?>_desc_<?= $i; ?>"><?= $person['desc'] ?></textarea>
    </div>
    <?php foreach($person['socialLinks'] as $j => $link):?>
    <div class="form-group">
        <label for="<?= $contentType; ?>_href_<?= $i; ?>_<?= $j; ?>">Refference</label>
        <input value="<?= $link['href'] ?>" type="text" name="href[<?= $i; ?>][]" class="form-control" id="<?= $contentType; ?>_href_<?= $i; ?>_<?= $j ?>">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_iconName_<?= $i; ?>_<?= $j; ?>">Icon name</label>
        <input value="<?= $link['iconName'] ?>" type="text" name="iconName[<?= $i; ?>][]" class="form-control" id="<?= $contentType; ?>_iconName_<?= $i; ?>_<?= $j ?>">
    </div>
    <?php endforeach; 
    endforeach; ?>
    <input type="reset" value="Reset" class="btn btn-warning">
    <input type='hidden' name='contentBlock' value='<?= $id; ?>'>
    <input type='hidden' name='contentType' value='<?= $contentType; ?>'>
    <input type="submit" value="Save changes" class="btn btn-primary">
</form>