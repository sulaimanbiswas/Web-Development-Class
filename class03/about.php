<?php

// require__DIR__ .'/../vendor/autoload.php';

echo "about";
echo "<pre>";
// var_dump($_SERVER);
// var_dump($_SERVER['HTTP_HOST']);
// var_dump($_SERVER['REQUEST_URI']);
// session_start();

// $_SESSION['name'] = 'asdlkfjsd';
// var_dump($_SESSION);

// session_destroy();

// setcookie('user', 'sulaiman',time()+(86400 * 30));

// echo $_COOKIE['user'];

$name = "md sulaiman biswas";
$password = md5($name);

// var_dump(explode(' ',$name));
echo $name;
// var_dump(strlen($name));
// var_dump(md5($name));
// if($password == md5($name)) {
//     echo 'true';
// }else{
//     echo 'false';
// }

// var_dump(substr($name,0,11));
// var_dump(ucwords($name));
// var_dump(strtoupper($name));
// var_dump(strtolower($name));

// var_dump(str_shuffle($name));
// var_dump(str_replace(' ','_',$name));

$arr = array();
array_push($arr,34);
array_push($arr,null);
array_push($arr,5);

$arr[] = 356;
$arr[] = 75343;
$arr[] = null;
$arr[] = 456;
$arr[7] = null;

var_dump($arr);

var_dump(arry_values(array_filter($arr)));

// dd($arr);
?>