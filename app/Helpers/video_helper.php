<?php
function getVideoIds(){
    $videoDir = getcwd() . '/dist/videos/';
    $videoFiles = scandir($videoDir);
    $result = "";
    foreach($videoFiles as $videoFile){
        if (strpos($videoFile, '.mp4') !== false) { 
            $result = $result.$videoFile.',';
        }
    }
    return substr($result, 0, -1);
}
?>