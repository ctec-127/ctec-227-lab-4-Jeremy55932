<?php
function display_images(){

    $dir = "pictures";
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)){
            while ($filename = readdir($dir_handle)){
                if (!is_dir($filename)){
                    $filename = urlencode($filename);
                    echo "<div class=\"container\">
                    <div class=\"image\">
                    <img src=\"pictures/$filename\"alt=\"$filename\" title=\"$filename\">
                    <figcaption>$filename</figcaption>
                    ";
                    echo "<a href=\"?file=$filename\" title=\"delete picture\"><i class=\"fas fa-times\"></i></a></div></div>";
                }
            }
            closedir($dir_handle);
        }
    }
}