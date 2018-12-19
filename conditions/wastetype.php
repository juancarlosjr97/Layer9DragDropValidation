<?php
$value = true;
$row = 2;
$row_array12 = array();
$error_type12 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array12[] = $row;
        $error_type12[] = 'Column: '. $col12 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
