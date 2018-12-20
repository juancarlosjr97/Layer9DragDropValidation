<?php
$value = true;
$row = 2;
$row_array1 = array();
$error_type1 = array();

while (($data = fgetcsv($handle, ",")) !== FALSE)
{
    $var = ctype_digit($data[$c]);
    if (( $var == null ) && !(empty($data[$c])))
    {
        $value = false;
        $row_array1[] = $row;
        $error_type1[] = 'Column: '. $col1 .' - Non-valid number value - Row: '. "$row";
    }

    if (empty($data[$c]))
    {
      $co = $num - 1;
      do {
          if (empty($data[$co]) && (empty($data[$co-1])) )
          {
              // Blank Lines
          }
          else
            {
                $value = false;
                $row_array1[] = $row;
                $error_type1[] = 'Column: '. $col1 .' - Non-valid number value ( Empty Cell) - Row: '. "$row";
            }
            break;

        $co--;
      } while ($co > 0);
    }


    $row++;

  }

  ?>
