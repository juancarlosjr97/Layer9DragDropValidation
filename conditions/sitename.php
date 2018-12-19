<?php
$value = true;
$row = 2;
$row_array7 = array();
$error_type7 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array7[] = $row;
        $error_type7[] = 'Column: '. $col7 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
