<?php

namespace hw1516;

use PDO;

require_once("SqlInterface.php");


class MySqlBuilder

{
    //Напрямую прикрепить не получилось через динамичные свойства из-за деприкаций ->
    //                           ->  нашел способ в коментах через магическое свойство и array
    // Запихнул array в класс, через __get и __set они достаются и принимаются визуально так же, как и динамик ->
    //          ->  внутри просто еще массив, который так же удаляется при создании нового класса.
    // При попытке закинуть через __set напряму в класс, так же выдёт предупреждение.
    // В 8.2 предупреждение, при следующих патчах будет фаталка(по крайней мере так написано).

    private MySqlBuilder $class;
    private array $query;

    public function create()
    {
        $this->class = new MySqlBuilder();
    }

    public function __set(string $name, mixed $value)
    {
        $this->class->query[$name] = $value;
    }

    public function __get(string $name)
    {
        return $this->class->query[$name] ?? null;
    }

    public function select(string $table, array $columns)
    {
        $this->create();
        $this->select = "SELECT " . implode(",", $columns) . " FROM " . $table;
        return $this;
    }

    public function where(string $value, string $valueTwo)
    {
        $this->where = "WHERE " . $value . " = " . $valueTwo;
        return $this;
    }

    public function getSql()
    {
        if ($this->where && $this->select) {
            return $this->select . " " . $this->where;
        }
        if ($this->select) {
            return $this->select;
        }

    }

}

$pdo = new PDO("mysql:host=localhost;dbname=TMS", "root", "");

$msql = new MySqlBuilder();

$sql = $msql->select('teachers', ['id', 'name', 'surname', 'image_url'])->where("id", "1")->getSql();
$stm = $pdo->query($sql);
$result = $stm->fetchAll(PDO::FETCH_ASSOC);

//хотел добавить джойны, но времени нет уже, работать надо

print_r($sql);
print_r($stm);
print_r($result);
//print_r($get);
/*
    result:
    [id] => 1
    [name] => Jotaro
    [surname] => Kujo
    [image_url] => https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeOQ02I5YW7j2rQdGeZTA5eX4rbpURpPTYLFHMPW9vMuU5RmcaFGkI5jcRXVK25zae3OM&usqp=CAU


