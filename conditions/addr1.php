<?php
$value = true;
$row = 2;
$row_array8 = array();
$error_type8 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array8[] = $row;
        $error_type8[] = 'Column: '. $col8 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
