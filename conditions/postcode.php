<?php
$value = true;
$row = 2;
$row_array11 = array();
$error_type11 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array11[] = $row;
        $error_type11[] = 'Column: '. $col11 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
