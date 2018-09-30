<?php
function LoadJPEG ($imgURL) {

    ##-- Get Image file from Port 80 --##
    $fp = fopen($imgURL, "r");
    $imageFile = fread ($fp, 3000000);
    fclose($fp);

    ##-- Create a temporary file on disk --##
    $tmpfname = tempnam ("/temp", "IMG");

    ##-- Put image data into the temp file --##
    $fp = fopen($tmpfname, "w");
    fwrite($fp, $imageFile);
    fclose($fp);

    ##-- Load Image from Disk with GD library --##
    $im = imagecreatefromjpeg ($tmpfname);

    ##-- Delete Temporary File --##
    unlink($tmpfname);

    ##-- Check for errors --##
    if (!$im) {
        print "Could not create JPEG image $imgURL";
    }

    return $im;
}

$imageData = LoadJPEG("http://anemurionhotel.com.tr/wp-content/uploads/2016/05/Hd-Abstract-Wallpapers-11-1152x502-1-1024x446.jpg");

Header( "Content-Type: image/jpeg");

imagejpeg($imageData, '', 100);
?>
