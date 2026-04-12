<?php

abstract class StudentRecord {
    abstract function calculateGrade();
}

class UndergraduateStudent extends StudentRecord {
    function calculateGrade() {
        echo "UG Grade: Assignments + Exams<br>";
    }
}

class GraduateStudent extends StudentRecord {
    function calculateGrade() {
        echo "PG Grade: Research + Exams<br>";
    }
}


$u = new UndergraduateStudent();
$g = new GraduateStudent();

$u->calculateGrade();
$g->calculateGrade();

?>