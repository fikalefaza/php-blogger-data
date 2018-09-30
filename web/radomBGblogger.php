<?php


header('Content-Type: image/png');
$loadFile = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Coffee_Bean_Batik_sarong%2C_Indonesia.jpg/431px-Coffee_Bean_Batik_sarong%2C_Indonesia.jpg";
 $i=(rand(0,2));
    
    if($i==1){
        $loadFile="http://anemurionhotel.com.tr/wp-content/uploads/2016/05/Hd-Abstract-Wallpapers-11-1152x502-1-1024x446.jpg";
    }elseif($i==2){
        $loadFile="http://anemurionhotel.com.tr/wp-content/uploads/2016/05/Hd-Abstract-Wallpapers-11-1152x502-1-1024x446.jpg";
    }
    
 

$im = imagecreatefromstring(file_get_contents($loadFile));

//$img = LoadPNG('');

imagepng($im);
imagedestroy($im);
?>
