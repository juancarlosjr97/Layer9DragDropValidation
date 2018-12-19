<?php
$value = true;
$row = 2;
$row_array16 = array();
$error_type16 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array16[] = $row;
        $error_type16[] = 'Column: '. $col16 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
