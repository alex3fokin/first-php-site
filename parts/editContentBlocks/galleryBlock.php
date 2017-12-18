<form method="POST">
    <div class="form-group">
        <label for="<?= $id ?>_img">Image</label>
        <br>
        <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg" onclick="$('#selectedFilePath').attr('data-input', '#' + $(this).next()[0].id)">Select image</a>
        <input type='text' name='href' readonly id="<?= $id ?>_img" value="">
    </div>
    <div class="form-group">
        <label for="<?= $contentType; ?>_alt">Alt</label>
        <input type="text" name="alt" class="form-control" id="<?= $contentType; ?>_alt">
    </div>
    <input type="submit" name='addImg' value="Add new photo" class="btn btn-primary">
    <div>
    <?php
          foreach($contentData as $i => $image): 
          ?>
          <img src="<?= $image['href']; ?>" data-index='<?= $i; ?>' alt='' class='img-thumbnail img-select-form' width="50px" height="50px" onclick="selectImgforDelete(this);">
          <?php 
           
          endforeach; ?>
          </div>
    <input type='hidden' name='contentBlock' value='<?= $id; ?>'>
    <input type='hidden' name='contentType' value='<?= $contentType; ?>'>
    <input type='hidden' name='imgIndextoDelete' value='' id='deleteFromImgGallery'>
    <input type='submit' name='deleteImg' value='Delete from gallery' class='btn btn-danger'>
    
</form>