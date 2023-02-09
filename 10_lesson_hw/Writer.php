<?php
// Генерация контента, используя интерфейсы, создать интерфейс Writer с методами write() и generateContent()
//Создать классы которые имплементят этот интерфейс , JSONWriter CSVWriter (по желанию если знаете еще форматы данных)
//Реализовать эти классы, есть файл index.php
//                       в котором условно есть массив с кучей данных,
//                              generateContent преобразует наш массив в нужный для файла формат

namespace domains;
interface Writer
{
    public function write($file);
    public function generateContent($array);
}