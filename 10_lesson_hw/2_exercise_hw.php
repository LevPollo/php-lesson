<?php

namespace domains;

require_once('Teacher.php');
require_once('Student.php');
require_once('Programmer.php');

$newTeacher = new Teacher('Anna');
$newTeacher->hello();

$newStudent = new Student('Jotaro');
$newStudent->hello();

$newProgrammer = new Programmer('Motoko');
$newProgrammer->hello();