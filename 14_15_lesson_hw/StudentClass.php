<?php

namespace hw1516;
// я сначала хотел использовать класс, но для простых запросов об инфе не увидел смысла, если есть ассоц массивы

class StudentClass
{

    private int $id;
    private string $name;
    private string $surname;
    private int $age;
    private float $must_pay;
    private int $phone;
    private int $raiting;
    private string $country;
    private string $city;
    private string $email;

    public function __construct(int $id, string $name, string $surname, int $age, float $must_pay,
                                int $phone, int $raiting, string $country, string $city, string $email )
    {

        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->must_pay = $must_pay;
        $this->phone = $phone;
        $this->raiting = $raiting;
        $this->country = $country;
        $this->city = $city;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getRaiting(): int
    {
        return $this->raiting;
    }

    /**
     * @param int $raiting
     */
    public function setRaiting(int $raiting): void
    {
        $this->raiting = $raiting;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return float
     */
    public function getMustPay(): float
    {
        return $this->must_pay;
    }

    /**
     * @param float $must_pay
     */
    public function setMustPay(float $must_pay): void
    {
        $this->must_pay = $must_pay;
    }

    /**
     * @return int
     */
    public function getPhone(): int
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     */
    public function setPhone(int $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}