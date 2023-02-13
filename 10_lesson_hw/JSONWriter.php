<?php
namespace domains;


require_once('Writer.php');
class JSONWriter implements Writer
{

    public string $json;




    public function write($fileName)
    {
        file_put_contents($fileName.".json",$this->json,LOCK_EX);
    }
    public function generateContent($array)
    {
        $this->json = json_encode($array);
    }
}

