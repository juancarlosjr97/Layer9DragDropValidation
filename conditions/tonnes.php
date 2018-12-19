<?php
$value = true;
$row = 2;
$row_array20 = array();
$error_type20 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array20[] = $row;
        $error_type20[] = 'Column: '. $col20 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
