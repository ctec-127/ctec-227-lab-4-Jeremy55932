<?php
function has_folder($folder){
    if (!is_dir($folder)) {
        return 0;
    } else {
        return 1;
    }
}

function create_folder($folder){
        mkdir($folder);
}

function res($db,$field){
    return $db->real_escape_string($field);
}

$_SESSION['folder'] = 'username';