<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader = new Xlsx();
$spreadsheet = $reader->load($file);

$loadedSheetNames = $spreadsheet->getSheetNames();

$writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
$writer->save("files_uploaded/to_check/".$filen.".csv");

$namefile = basename($file);
rename("$file", "files_deleted/$namefile");
$folder = 'files_deleted';
$files = glob($folder . '/*');
foreach($files as $file)
{
  if(is_file($file))
    {
      unlink($file);
    }
  }

$file = "files_uploaded/to_check/".$filen.".csv";

?>
