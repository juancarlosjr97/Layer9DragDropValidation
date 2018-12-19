<?php

$value = true;
$row = 2;
$row_array = array();
$error_type = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    if (!is_numeric($data[$c]))
    {
        $value = false;
        $row_array[] = $row;
        $error_type[] = 'Not a Number - Row: '. "$row";
    }
    $row++;
}

?>
