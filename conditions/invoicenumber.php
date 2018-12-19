<?php
$value = true;
$row = 2;
$row_array1 = array();
$error_type1 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array1[] = $row;
        $error_type1[] = 'Column: '. $col .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
