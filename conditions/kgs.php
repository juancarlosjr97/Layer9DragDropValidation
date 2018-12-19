<?php
$value = true;
$row = 2;
$row_array19 = array();
$error_type19 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array19[] = $row;
        $error_type19[] = 'Column: '. $col19 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
