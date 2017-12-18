<?php
$countOfBlocks = array(
    'headerBlock' => array(0, ), 
    'textImageBlock' => array(0, ),
    'parallaxBlock' => array(0, ),
    'servicesBlock' => array(0, ),
    'textBlock' => array(0, ),
    'staffBlock' => array(0, ),
    'textListImageBlock' => array(0, ),
    'imageTextListBlock' => array(0, ),
    'contactsFormBlock' => array(0, ),
    'galleryBlock' => array(0, ));
if (filter_input(INPUT_POST, 'editHeader')) {
    $pages[$currentPage]['title'] = filter_input(INPUT_POST, 'title');
    $pages[$currentPage]['name'] = filter_input(INPUT_POST, 'name');
    file_put_contents($pagesFile, serialize($pages));
}
if (filter_input(INPUT_POST, 'contentType')) {
    require_once 'includes/editContentBlocks/' . filter_input(INPUT_POST, 'contentType') . '.php';
    file_put_contents($pagesFile, serialize($pages));
}
if(filter_input(INPUT_POST, 'addNewContentBlock')) {
    $newBlock = filter_input(INPUT_POST, 'newBlock');
    $type = substr($newBlock, 0, strpos($newBlock, '_'));
    $content = array();
    switch($type) {
        case 'headerBlock':
            $content = array(
                'img' => '',
                'h1' => '',
                'p' => '',
            );
            break;
        case 'textImageBlock':
            $content = array(
                'img' => '',
                'h2' => '',
                'p' => array('',),
                'alt' => '',
            );
            break;
        case 'parallaxBlock':
            $content = array(
                'img' => '',
                'h2' => '',
                'p' => '',
            );
            break;
        case 'servicesBlock':
            $content = array(
                array('iconName' => '', 'h3' => '', 'p' => ''),
                array('iconName' => '', 'h3' => '', 'p' => ''),
                array('iconName' => '', 'h3' => '', 'p' => ''),
                array('iconName' => '', 'h3' => '', 'p' => ''),
            );
            break;
        case 'textBlock':
            $content = array(
                'h2' => '',
                'p' => array('', array('','')),
            );
            break; 
        case 'staffBlock':
            $content = array(array('img' => '', 'alt' => '', 'name' => '', 'position' => '', 'desc' => '', 'socialLinks' => array(array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''))),
                array('img' => '', 'alt' => '', 'name' => '', 'position' => '', 'desc' => '', 'socialLinks' => array(array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''))),
                array('img' => '', 'alt' => '', 'name' => '', 'position' => '', 'desc' => '', 'socialLinks' => array(array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''), array('href' => '', 'iconName' => ''))));
            break; 
        case 'textListImageBlock':
        case 'imageTextListBlock':
            $content = array('h2' => '', 'p' => '', 'ul' => array('', '', '', ''), 'img' => '', 'alt' => '');
            break; 
        case 'contactsFormBlock':
            $content = array('h2' => '', 'p' => '', 'address' => '', 'email' => '', 'phone' => '');
            break; 
        case 'galleryBlock':
            $content = array();
            break; 
    }
    $pages[$currentPage]['content'][$newBlock] = $content;
    file_put_contents($pagesFile, serialize($pages));
}
if(filter_input(INPUT_POST, 'deleteContentBlock')) {
    unset($pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlockName')]);
    file_put_contents($pagesFile, serialize($pages));
}
?>
<div id="edit" class="col-md-4">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Main info
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <form method="POST" id="">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?= $pages[$currentPage]['title']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nameMenu">Label in menu</label>
                            <input type="text" name="name" id="nameMenu" class="form-control" value="<?= $pages[$currentPage]['name']; ?>">
                        </div>
                        <input type="reset" value="Reset" class="btn btn-warning">
                        <input type="submit" name='editHeader' value="Save changes" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <?php
        $panelCount = 0;
        $incrementFlag = true;
        foreach ($pages[$currentPage]['content'] as $contentType => $contentData):
            $id = $contentType;
            
            if (strpos($contentType, '_') !== false) {
                $currentBlockIndex = substr($contentType, strrpos($contentType, '_') + 1);
                $contentType = substr($contentType, 0, strpos($contentType, '_'));
                $countOfBlocks[$contentType][] = (int)$currentBlockIndex;
            } 
            ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="<?= 'heading' . $panelCount; ?>">
                    <h4 class="panel-title">
                        <div class='row'>
                        <div class='col-md-8'>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?= 'collapse' . $panelCount; ?>" aria-expanded="false" aria-controls="collapseTwo">
    <?= $id; ?>

                            </a>
                        </div>
                        <div class='col-md-4'>
                            <form method='POST'>
                                <input type='hidden' name='contentBlockName' value='<?= $id; ?>'>
                                <button type='submit' name='deleteContentBlock' value='1' class='btn btn-danger'><i class='icon-trash-o'></i></button>
                            </form>
                        </div>
</div>

                    </h4>
                </div>
                <div id="<?= 'collapse' . $panelCount; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?= 'heading' . $panelCount; ?>">
                    <div class="panel-body">
    <?php require 'parts/editContentBlocks/' . $contentType . '.php'; ?>
                    </div>
                </div>
            </div>
    <?php $panelCount++;
endforeach; ?>
    </div>
    <?php
    foreach($countOfBlocks as $item => $array) {
        $countOfBlocks[$item] = array_unique($array);
        sort($countOfBlocks[$item]);
    }
    foreach($countOfBlocks as $item => $array) {
        $index = -1;
        
        foreach($array as $i => $elem) {
            if(($i+1) !== $elem) {
                $index = ($i+1);
                $countOfBlocks[$item][0] = $index;
            }
        }
        if($index === -1) {
            $countOfBlocks[$item][0] = $countOfBlocks[$item][count($array) - 1] + 1;
        }
    } 
    ?>
    <form method='POST'>
        <p>Add new block</p>
        <div class='form-group'>
            <label for='newBlock'>
                <select class='form-control' name='newBlock' id='newBlock'>
                    <?php foreach($countOfBlocks as $type => $index): ?>
                    <option value='<?= $type.'_'.$index[0]; ?>'><?= $type; ?></option>
                    <?php endforeach; ?>
                </select>
        </div>
        <div class='form-group'>
            <input type='submit' name='addNewContentBlock' value='Add' class='btn btn-primary'>  
        </div>
    </form>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Select image</h4>
                </div>
                <div class="modal-body">
                    <?php
                    $images = scandir('images');
                    foreach ($images as $image):
                        if (in_array(mime_content_type($photoUploadDir . '/' . $image), $availableTypes)):
                            ?>
                            <img src="<?= $photoUploadDir . '/' . $image; ?>" alt='' class='img-thumbnail img-select-form' width="140px" height="140px" onclick="selectImg(this);">
                            <?php
                        endif;
                    endforeach;
                    ?>
                </div>
                <div class="modal-footer">
                    <form action='includes/uploadImg.php' method="POST" enctype="multipart/form-data">
                        <input class="btn btn-primary" type="file" name='photo' accept='image/*' value="Select file">
                        <input type="submit" name='upload' value="Upload file" class="btn btn-primary">
                        <input type="submit" name='delete' class="btn btn-danger" value="Delete">
                        <input type='hidden' name='imgName' value='someVaslue' id='fileToDelete'>
                        <input type="button" data-img='' data-input='' class="btn btn-primary" data-dismiss="modal" aria-hidden="true" value="Select" id="selectedFilePath" onclick="$($(this).attr('data-input'))[0].value = $(this).attr('data-img');">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>