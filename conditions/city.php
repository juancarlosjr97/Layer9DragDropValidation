<?php
$value = true;
$row = 2;
$row_array10 = array();
$error_type10 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array10[] = $row;
        $error_type10[] = 'Column: '. $col10 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
