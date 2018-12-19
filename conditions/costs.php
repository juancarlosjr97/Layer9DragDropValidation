<?php
$value = true;
$row = 2;
$row_array21 = array();
$error_type21 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array21[] = $row;
        $error_type21[] = 'Column: '. $col21 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
