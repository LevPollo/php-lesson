<?php
namespace domains;


require_once('Writer.php');
class JSONWriter implements Writer
{

    public string $json;




    public function write($file)
    {
            // TODO: Implement write() method.
        file_put_contents($file,$this->json,LOCK_EX);

    }
    public function generateContent($array)
    {

        $this->json = json_encode($array);
        // TODO: Implement generateContent() method.
    }
}

