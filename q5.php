<?php

interface CourseActions {
    public function enroll();
    public function drop();
    public function completeCourse();
}

class OnlineCourse implements CourseActions {
    public function enroll() {
        echo "Online Enrolled<br>";
    }
    public function drop() {
        echo "Online Dropped<br>";
    }
    public function completeCourse() {
        echo "Online Completed<br>";
    }
}

class InPersonCourse implements CourseActions {
    public function enroll() {
        echo "Offline Enrolled<br>";
    }
    public function drop() {
        echo "Offline Dropped<br>";
    }
    public function completeCourse() {
        echo "Offline Completed<br>";
    }
}


$o = new OnlineCourse();
$i = new InPersonCourse();

$o->enroll();
$o->completeCourse();

$i->enroll();
$i->completeCourse();

?>