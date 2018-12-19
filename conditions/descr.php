<?php
$value = true;
$row = 2;
$row_array13 = array();
$error_type13 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array13[] = $row;
        $error_type13[] = 'Column: '. $col13 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
