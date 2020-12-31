<?php

include './UserInfo.php';

class Teacher extends UserInfo{
    public $deperment;
    public $roll;
    public $reg;
}

$student = new Student('sulaiman','25648841','student1@gamil.com');


var_dump($student);
















?>