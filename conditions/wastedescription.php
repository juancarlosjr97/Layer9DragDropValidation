<?php
$value = true;
$row = 2;
$row_array14 = array();
$error_type14 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array14[] = $row;
        $error_type14[] = 'Column: '. $col14 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
