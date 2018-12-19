<?php
$value = true;
$row = 2;
$row_array15 = array();
$error_type15 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array15[] = $row;
        $error_type15[] = 'Column: '. $col15.' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
