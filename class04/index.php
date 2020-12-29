<?php
require '../vendor/autoload.php';
echo"<pre>";

// $student_info = [
//     'name' => 'sulaiman',
//     'phone' => '0147859625',
//     'adress' => [
//         'permanent' => 'meherpur'
//     ],
//     'designation' => 'student',

// ];
// $student_info2 = [
//     'name' => 'sulaiman',
//     'phone' => '0147859625',
//     'adress' => [
//         'permanent' => 'meherpur'
//     ],
//     'designation' => 'student',

// ];



// var_dump($student_info);
// var_dump($student_info2);

class UserInfo{
    public $name;
    public $phone;
    public $email;
    public $permanent_adress;
    public $Present_adress;
    public $designetaion;

    function __construct($name, $phone, $email) {
        $this->name = $name;
        $this->name = $phone;
        $this->name = $email;
    }
}

$user1 = new UserInfo('sulaiman biswas', '01745360890', 'sulaimanbiswasbd@gmail.com');


// $user1 -> name ='sulaimanbiswas';
// $user1 -> phone ='014745630890';

var_dump($user1);









?>


