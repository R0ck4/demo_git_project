<?php

function can_upload($file) {
    if($file['name'] == '')
        return 'Вы не выбрали файл';

    if($file['size'] == 0)
        return 'Файл слишком большой';

    $getMime = explode('.', $file['name']);

    $mime = strtolower(end($getMime));

    $types = array('jpg', 'png' , 'jpeg');

    if(!in_array($mime, $types))
        return 'Недопустимый тип файла';

    return true;
}
