<?php
$value = true;
$row = 2;
$row_array6 = array();
$error_type6 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array6[] = $row;
        $error_type6[] = 'Column: '. $col6 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
