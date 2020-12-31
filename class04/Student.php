<?php
    // use class04\UserInfo;
include './UserInfo.php';
 

class Student extends UserInfo{
    public $deperment;
    public $roll;
    public $reg;

    public function __construct($deperment, $roll, $reg) {
        UserInfo::__construct('sulaiman','0158795453','sulaiman@gmail.com');
        $this->deperment = $deperment;
        $this->roll = $roll;
        $this->reg = $reg;
    }
}

$student1 = new Student('BBA','258965','10205689');


var_dump($student1);
















?>