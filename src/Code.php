<?php
class File
{

    public static function readCSVtoArray(String $filename, String $class): array
    {
        $records = Array();
        $count = 0;
        $fieldNames = '';

        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {

                if ($count == 0) {
                    $fieldNames = $row;
                } else {
                    $records[] = (object)array_combine($fieldNames, $row);
                }
                $count++;
            }
            fclose($handle);
        }
    }
}
