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
$arr[] = 258;
$arr[] = 258;
$arr[] = 456;
$arr[7] = 258;

// var_dump($arr);

// var_dump(array_filter($arr));
// var_dump(array_values(array_filter($arr)));
// var_dump(array_unique($arr));
// var_dump(array_search(258,$arr));
// var_dump(array_reverse($arr));
// var_dump(array_pop($arr));
// var_dump(array_shift($arr));
// var_dump(array_splice($arr,5,1));
// var_dump(array_splice($arr,2,));
// var_dump(array_sum($arr));

sort($arr);
rsort($arr);
// var_dump($arr,sort($arr));

// dd($arr);




















?>