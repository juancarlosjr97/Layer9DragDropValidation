<?php
$value = true;
$row = 2;
$row_array18 = array();
$error_type18 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array18[] = $row;
        $error_type18[] = 'Column: '. $col18 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
