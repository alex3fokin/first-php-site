function selectImg(image) {
    var src = $(image).attr('src');
    $(image).css('border', '1px solid #52d3aa');
    $('#selectedImg').css('border', '');
    $('#selectedImg').attr('id', '');
    $(image).attr('id', 'selectedImg');
    $('#selectedFilePath').attr('data-img', src);
    $('#fileToDelete').attr('value',src)
}

function selectImgforDelete(image) {
    var src = $(image).attr('src');
    $(image).css('border', '1px solid #52d3aa');
    $('#selectedImg').css('border', '');
    $('#selectedImg').attr('id', '');
    $(image).attr('id', 'selectedImg');
    $('#deleteFromImgGallery').attr('value',$(image).attr('data-index'));
}