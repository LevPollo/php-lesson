<?php
namespace domains;

require_once('Writer.php');
class CSVWriter implements Writer
{

    public string $csv = '';



    public function write($fileName)
    {
            // TODO: Implement write() method.
        file_put_contents($fileName.".csv",$this->csv,LOCK_EX);

    }
    public function generateContent($array)
    {
        $arrayKeys = array_keys($array[0]);
        $this->csv = implode(",",$arrayKeys).PHP_EOL;

        // проходимся по каждому вложенному массиву
        foreach ($array as $fields){
            // для каждого элемента вложенного масива(вдруг элемента не 3);
            $this->csv.= implode(",",$fields).PHP_EOL;
        }
        print_r($this->csv);
    }
}
$testArray = [
    [ 'Name'=>'Dio', 'Age'=>'121', 'Country'=>'UK','SA'=>'Dio', 'DS'=>'121', 'S'=>'UK'],
    [ 'Name'=>'Dio', 'Age'=>'121', 'Country'=>'UK','SA'=>'Dio', 'DS'=>'121', 'S'=>'UK'],
    [ 'Name'=>'Dio', 'Age'=>'121', 'Country'=>'UK','SA'=>'Dio', 'DS'=>'121', 'S'=>'UK'],

];

