<?php
$value = true;
$row = 2;
$row_array17 = array();
$error_type17 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array17[] = $row;
        $error_type17[] = 'Column: '. $col17 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
