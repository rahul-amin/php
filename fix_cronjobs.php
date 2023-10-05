<?php
/**
 * Created by PhpStorm.
 * User: CosMOs
 * Date: 10/5/2023
 * Time: 12:37 PM
 */


$home_dir = dirname($_SERVER['DOCUMENT_ROOT']);

# get all files as array
$files = scandir($home_dir);
$files = array_diff($files, array('.', '..'));
foreach ($files as $file)
{
    $filepath = $home_dir . '/' . $file;
    if(strpos($file,'.php?') !== false)
    {

        if (is_file($filepath))
        {
            unlink($filepath);
        }
    }else{
        echo $filepath . '<br>';
    }
}