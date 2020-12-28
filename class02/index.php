<?php
    /* data type
       
        string
        integer
        float
        boolean
        array
        object
        null
        recource
    */

    // $number_one = 1;
    // $number_two = number_format(22589445.2584255,3,',','.');

    // $name = "Sulaiman $number_one $number_two Biswas";

    

    // $student = [
    //     'rohim',
    //     'korim',
    //     'sulaiman',
    //     'rezone',
    //     158,
    //     15.6845,
    //     true,
    // ];


    // $student_info = [];         //array diclaration
    // $student_info = array();    //array diclaration
    // $student_info = [           //array innisalaization
    //     'name' => 'Sulaiman Biswas',
    //     'adress' => 'Meherpur',
    //     'age' => 22,
    //     'class' => 'Honours 2nd year'

    // ];

    

        


    // multi dymentional
    // $student_list = [
    //     'student1' =>[          
    //         'name' => 'Sulaiman Biswas',
    //         'adress' => 'Meherpur',
    //         'age' => 22,
    //         'class' => 'Honours 2nd year',
    //         'permanent' => [
    //             'Vill' => 'Pirojpur',
    //             'Upazilla' => 'Meherpur Sadar',

    //         ]
    //     ],
    //     'student2' =>[           
    //         'name' => 'Rezone Prince',
    //         'adress' => 'Gangni',
    //         'age' => 21,
    //         'class' => 'Honours 2nd year',
    //         'permanent' => [
    //             'Vill' => 'Gangni',
    //             'Upazilla' => 'Gangni',
                
    //         ]
    
    //     ],
    //     'student3' =>[           
    //         'name' => 'Hasan',
    //         'adress' => 'Chuadanga',
    //         'age' => 20,
    //         'class' => 'SSC Examinee',
    //         [
    //             'Vill' => 'Vimrullah',
    //             'Upazilla' => 'Sadar',
                
    //         ]
    
    //     ]
    // ];

    // null variable
    // $null = null;

    // recource


    // echo $name;
    // echo "<pre>";
    // var_dump ($student_info);
    // var_dump($student_list);
    // var_dump($student_list['student2']);
    // var_dump($student_list['student2']["permanent"]);
    // var_dump($student_list['student2']["permanent"]["Vill"]);
    // echo $null;



    /*
        *
        * condituon
        *

        if
        if else
        elseif
        switch


        < Less than            //Number ti coto ki na
        > Gater than           //Number ti boro ki na
        <= Less than Ecual     //Number ti coto ba soman ki na
        >= Gater than Ecual    //number ti boro ba soman ki na
        || or                  // Othoba
        && and                 // Ebong
        == Ecual               //soman
        === Ecual              //Data type and date soman
        != not Ecual           //Soman na
        ! not                  //not (Demorgan Rulls)


    */

    // $a = 20;
    // $b = 30;
    // $c = 50;
    // if ($a < $b) {
    //     echo 'A is big';
    // };

    // if ($b > $a) {
    //     echo 'B is big';
    // };

    // if ($a > $b) {
    //     echo 'A is big';
    // }else{
    //     echo 'B is Big';
    // };

    // if ($a > $b && $a > $c) {
    //     echo 'A is big';
    // }elseif($b > $a && $b > $c){
    //     echo 'B is Big';
    // }else {
    //     echo 'C is Big';
    // };

    // if ($a > $b || $a < $c) {
    //     echo 'I am sulaiman';
    // };


    // $a = 30;
    // $b = 35;
    // if ($a == $b) {
    //     echo 'jaosi';
    // }

    // $a = 39;
    // $b = 35;
    // if ($b <= 30) {
    //     echo 'b';
    // }

    // if (!($a != $b)) {
    //     echo 'b';
    // }
    
    

    //Switch
    // +, -, *, /

    // $a = 39;
    // $b = 35;

    // $switch = '*';
    // switch ($switch) {
    //     case '+':
    //         echo "<h1> Sum: ".($a+$b)."</h1>";
    //         break;
    //     case '-':
    //         echo "<h1> Sub: ".($a-$b)."</h1>";
    //         break;
    //     case '*':
    //         echo "<h1> Mul: ".($a*$b)."</h1>";
    //         break;
    //     case '/':
    //         echo "<h1> div: ".($a/$b)."</h1>";
    //         break;
        
    //     default:
    //         echo '<h1>Error</h1>';
    //         break;
    // }



    // loop 

    // for
        // $student = [
        //     'rohim',
        //     'korim',
        //     'sulaiman',
        //     'rezone',
        //     158,

        // ];

        // for ($i=0; $i < count($student); $i++) { 
        //     echo $student[$i];
        //     echo"<br>";
        // }

    // foreach

        // $student_info = [
        //     'name' => 'Sulaiman Biswas',
        //     'adress' => 'Meherpur',
        //     'age' => 22,
        //     'class' => 'Honours 2nd year'
        // ];

        // foreach ($student_info as $key => $value) {
        //     echo $key. ': '. $value;
        //     echo '<br>';
        // }



        $student_list =[
            'student1' =>[          
                'name' => 'Sulaiman Biswas',
                'adress' => 'Meherpur',
                'age' => 22,
                'class' => 'Honours 2nd year',
                'permanent' => [
                    'Vill' => 'Pirojpur',
                    'Upazilla' => 'Meherpur Sadar',

                ]
            ],
            'student2' =>[           
                'name' => 'Rezone Prince',
                'adress' => 'Gangni',
                'age' => 21,
                'class' => 'Honours 2nd year',
                'permanent' => [
                    'Vill' => 'Gangni',
                    'Upazilla' => 'Gangni',
                    
                ]
            ],
            'student3' =>[           
                'name' => 'Hasan',
                'adress' => 'Chuadanga',
                'age' => 20,
                'class' => 'SSC Examinee',
                [
                    'Vill' => 'Vimrullah',
                    'Upazilla' => 'Sadar',
                ]
            ]
                ];

        // foreach ($student_list as $key => $value) {
        //         var_dump($key, $value);
        //         echo '<br>';
        // }
        $a=20;
        // while ($a <= 10) {
        //     echo $a.' ';
        //     $a++;
        // }

        // do {
        //     echo $a.' ';
        //     $a++;
        // } while ($a <= 10);

    // goto luxary;

    // cheap: 
    // echo 'cheap shop </br>'; 
    
    // luxary: 
    // echo 'cheap shop </br>';


    Class person{
        public $name;
        public $adress;
        public $age;
        public $jella;

        public function __construct($name, $adress, $age, $jella) {
            $this->name = $name;
            $this->adress = $adress;
            $this->age = $age;
            $this->jella = $jella;
    
        }
        
        public function print()
        {
            $table = "
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>$this->name</td>
                </tr>
                <tr>
                    <td>Adress</td>
                    <td>:</td>
                    <td>$this->adress</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>:</td>
                    <td>$this->age</td>
                </tr>
                <tr>
                    <td>Jella</td>
                    <td>:</td>
                    <td>$this->jella</td>
                </tr>
            </table>
            ";

            echo $table;
        }
        

    }

    

    $person1 = new person('sulaiman', 'meherpur', 21,2500);
    $person2 = new person('prince', 'meherpur', 21,2500);
    $person3 = new person('hasan', 'meherpur', 21,2500);

    // var_dump($person1);
    // var_dump($person2);
    // var_dump($person3);
    
 $person1->print();
 $person2->print();
 $person3->print();




        
?>