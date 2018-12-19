<?php
$value = true;
$row = 2;
$row_array5 = array();
$error_type5 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array5[] = $row;
        $error_type5[] = 'Column: '. $col5 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
