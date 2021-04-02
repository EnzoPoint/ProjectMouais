<?php
$file = basename($_GET['file']);
$file = './stock_dorks/'.$file;

if(!file_exists($file)){ //file does not exist
    die('file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=dorks.txt");
    header("Content-Type: application/text");
    header("Content-Transfer-Encoding: binary");
   
    readfile($file);
}
?>