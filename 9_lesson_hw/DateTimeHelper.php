<?php
//вычислить дату до следующего рабочего дня
//вычислить дни до дня рождения
namespace lesson_hw;


class DateTimeHelper
{

    private int $month;
    private int $day;
    private string $date;

    public function __construct(int $month, int $day)

    {
        $this->month = $month;
        $this->day = $day;
        $this->date = strtotime($this->day . '-' . $this->month . '-' . date('Y'));
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month): void
    {
        $this->month = $month;
    }


    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    public function findBirthDay(int $bdMonth, int $bdDay): int
    {
        if (strtotime($bdDay . '-' . $bdMonth . '-' . date('Y')) < $this->date) {
            $bd = strtotime($bdDay . '-' . $bdMonth . '-' . date('Y') + 1);
        } else {
            $bd = strtotime($bdDay . '-' . $bdMonth . '-' . date('Y'));
        }


        $diff = ($bd - $this->date) / 86400;

        return ceil($diff);

    }

    public function findWorkDay(): int
    {

        $wd = date('w', $this->date);
        return ($wd > 4) ? 7 - $wd : 0;

    }


}



