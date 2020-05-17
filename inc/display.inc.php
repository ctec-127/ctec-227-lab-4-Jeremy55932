<?php
// session_start();
// include '../login.php'
// include 'register.php';

function display_images(){
    // if (isset($_POST['username'])){
    $dir = $_SESSION['username'];
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)){
            while ($filename = readdir($dir_handle)){
                if (!is_dir($filename)){
                    $filename = rawurlencode($filename);
                    echo "<div class=\"container\">
                    <div class=\"image\">
                    <img src=\"$dir/$filename\"alt=\"$filename\" title=\"$filename\">
                    <figcaption>$filename</figcaption>";
                    echo "<a href=\"?file=$filename\" title=\"delete picture\"><i class=\"fas fa-times\"></i></a></div></div>";
                }
            }
            closedir($dir_handle);
        }
    }
}
// }