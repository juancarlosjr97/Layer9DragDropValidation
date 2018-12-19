<?php
$value = true;
$row = 2;
$row_array9 = array();
$error_type9 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array9[] = $row;
        $error_type9[] = 'Column: '. $col9 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
