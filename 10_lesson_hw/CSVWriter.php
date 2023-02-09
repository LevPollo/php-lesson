<?php
namespace domains;

require_once('Writer.php');
class CSVWriter implements Writer
{

    public string $csv = '';



    public function write($file)
    {
            // TODO: Implement write() method.
        file_put_contents($file,$this->csv,LOCK_EX);

    }
    public function generateContent($array)
    {

        foreach ($array as $fields){

            $this->csv .= implode(',', $fields) . "\n";
        }
        // TODO: Implement generateContent() method.
    }
}
$array = [
    [ 'Name', 'Age', 'Country' ],
    [ 'Dio', '121', 'TUK' ],
    [ 'Jotaro', '40', 'JP' ],
];
