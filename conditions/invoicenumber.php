<?php
$value = true;
$row = 2;
$row_array1 = array();
$error_type1 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if (( $var == null ) && (empty($data[$c])))
    {
        $value = false;
        $row_array1[] = $row;
        $error_type1[] = 'Column: '. $col1 .' - 2  Non-valid number value - Row: '. "$row";
    }
    $row++;

  }

  ?>
