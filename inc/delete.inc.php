<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){

}

if (isset($_GET['file'])){
    copy('pictures/' . $_GET['file'], 'deleted_picures/' . $_GET['file']);

    if (unlink('pictures/' . $_GET['file'])) {
        $delete_file = $_GET['file'];
        header('location: home.php');
    } else {
        echo "Cannot delete photo.";
    }
}

