<?php

namespace hw1516;
require_once('StudentClass.php');

use PDO;

class Crud
{


    private PDO $pdo;


    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=TMS", "root", "");
    }
    public function getId(int $id)
    {
        //формируем запрос
        $sql = "SELECT * FROM students WHERE id=".$id;
        //отправляем запрос
        $stmt = $this->pdo->query($sql);
        //получаем ассоциативный массив
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }
    public function getAll(): array
    {
        //формируем запрос
        $sql= "SELECT * FROM students";
        //отправляем запрос
        $stmt = $this->pdo->query($sql);
        //получаем ассоциативный массив
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //возвращаем ассоц массив студентов
        return $result;
    }
    public function create(string $name, string $surname, int $age=null, float $must_pay=null,
                           int $phone=null, int $raiting=null, string $country=null, string $city=null, string $email=null)
    {
        $sql = "INSERT INTO students (name,surname,age,must_pay,phone,raiting,country,city,email)
                VALUES (:name,:surname,:age,:must_pay,:phone,:raiting,:country,:city,:email)";
        $stm = $this->pdo->prepare($sql);
        $stm->execute([":name"=>$name,
                        ":surname"=>$surname,
                        ":age"=>$age,
                        ":must_pay"=>$must_pay,
                        ":phone"=>$phone,
                        ":raiting"=>$raiting,
                        ":country"=>$country,
                        ":city"=>$city,
                        ":email"=>$email
                    ]);
        echo "Create the object in a table with the name `students`";
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM students WHERE id={$id}";
        $this->pdo->query($sql);
        echo "The object with id {$id} is deleted.".PHP_EOL;
    }

    public function update( int $id, string $name=null, string $surname=null, int $age=null, float $must_pay=null,
                           int $phone=null, int $raiting=null, string $country=null, string $city=null, string $email=null)
    {
        $sql = "UPDATE students SET  name=?, surname=?, age=?,must_pay=?,phone=?,raiting=?,country=?,city=?,email=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name,$surname,$age,$must_pay,$phone,$raiting,$country,$city,$email,$id]);

        echo "Update the object in a table with the name `students`";
    }
}

$crud = new Crud();

//$crud->update(11,name:'New',surname: "Student",age:30);

//$crud->delete(10);
//$crud->create(name:"Lev",surname: "Pollo",age:30);
$all = $crud->getAll();
$anyone = $crud->getId(1);


print_r($all);
print_r($anyone);

