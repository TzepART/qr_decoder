<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16/01/2019
 * Time: 13:31
 */

require __DIR__ . "/../vendor/autoload.php";
//ini_set('memory_limit','-1');

use \App\Helper\FileHelper;
use \App\AppQrReader;


//$dataDir = "/Users/artem/PhpstormProjects/qr_decoder/web/data_png/";
//$dataDir = "/Users/artem/PhpstormProjects/qr_decoder/web/good_data/";
$dataDir = "/Users/artem/PhpstormProjects/qr_decoder/web/data/";

$fileHelper = new FileHelper($dataDir);
$results = (new AppQrReader($fileHelper))->getResults();
var_dump($results);