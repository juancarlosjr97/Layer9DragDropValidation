<?php
$value = true;
$row = 2;
$row_array2 = array();
$error_type2 = array();


while (($data = fgetcsv($handle, ",")) !== FALSE)
{
$var = $data[$c];
if (!($var instanceof DateTime) !== FALSE)
    {
        $value = false;
        $row_array2[] = $row;
        $error_type2[] = 'Column: '. $col .' - Non-valid date format - Row: '. "$row";
    }


    $row++;
}

?>
