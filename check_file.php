<?php
foreach (glob("files_uploaded/to_check/*.*") as $file) {

  $path_parts = pathinfo($file);
  if ( $path_parts['extension'] !== csv )
  {
    $filen = $path_parts['filename'];
    include 'PhpSpreadsheet/to_csv.php';
  }

  $c=0;
  do {
      $handle = fopen($file, "r");
      if ($handle !== FALSE)
      {
          while (($data = fgetcsv($handle, ",")) !== FALSE)
          {
              $num =count($data);

                  include ('conditions.php');
          }
          fclose($handle);
      }
      $c++;

    } while ($c < $num);

    if ($value == true)
    {
        $now = time();
        $milliseconds = microtime(true);
        $newfilename =  $now. $milliseconds. '.csv';
        rename("$file", "files_uploaded/checked/$newfilename");
        echo 'The file '. basename($file) .' has been uploaded successfully and the new name is ' .$newfilename ."<br/>\n";
    }
    else {
            echo 'Error file name: '. basename($file) . "<br/>\n";
            echo "<br/>\n <br/>\n";

            include ('errors.php');

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
          }
    }

?>
