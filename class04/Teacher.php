<?php

include './UserInfo.php';

class Teacher extends UserInfo
{
    public $class_teacher; 
    public $hons_result; 
    public $university; 
    public $subject; 
    public $class_list= array(); 
}

$teacher = new Teacher('teacher1','129955622','teacher1@gamil.com');
$teacher->class_teacher = 'BBA';
$teacher->hons_result = '3.25';
$teacher->university = 'DU';
$teacher->subject = 'chemistry';
$teacher->class_list = ['bangla', 'English', 'math'];
$teacher->set_date("25-69-89");

var_dump(
    $teacher
)







?>