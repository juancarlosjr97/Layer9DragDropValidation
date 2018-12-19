<?php

$value = true;
$row = 2;
$row_array3= array();
$error_type3 = array();

while (($data = fgetcsv($handle,",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if ( $var == null)
    {
        $value = false;
        $row_array3[] = $row;
        $error_type3[] = 'Column: '. $col3 .' - Non-valid number value - Row: '. "$row";
    }
    $row++;
  }

  ?>
