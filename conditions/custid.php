<?php
$value = true;
$row = 2;
$row_array4 = array();
$error_type4 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array4[] = $row;
        $error_type4[] = 'Column: '. $col4 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
