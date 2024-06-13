<?php 

$data = [
            ["Name"=>"Abc","Email"=>"Abc@gmail.com","Password"=>"Abc123"],
            ["Name"=>"Ali","Email"=>"Ali@gmail.com","Password"=>"Ali123"],
            ["Name"=>"Ahmed","Email"=>"Ahmed@gmail.com","Password"=>"Ahmed123"]
            
];

// echo $data['Name'];

foreach($data as $key => $value){
    foreach($value as $Key1 => $value1){
        echo $value1;
    }

    echo "<br>";
}




?>