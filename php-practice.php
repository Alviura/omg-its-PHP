<?php
// this is a comment in PHP 

// variables 
$name = "Alvin";
$age = 20;
$is_cool = true;

// Output
echo "Hello my name is $name and I am $age years old.\n";

// Data Types
var_dump($is_cool); // shows data type and value

// Arrays and loops
$skills = ["PHP", "Laravel", "Git"];

//echo "$skills[0]\n";
//print_r($skills);
echo"\n";
echo implode("," , $skills);// converts an array into string

$tasks = [
    ["title"=> "Learn PHP", "done" => true],
    ["title"=> "Practice Laravel", "done" => false],
    ["title"=> "Push code to Github", "done" => true],

];
foreach ($tasks as $task){
    // $status = $task["done"]? "done": "not done";
    // echo $task["title"]. " - ". $status . "\n";
    if ($task["done"]==true) {
        $status = "done";
    } else {
        $status = "not done";
    }
    echo $task["title"]. "-". $status ."\n";
}
foreach ($skills as $skill){
    echo "I know $skill\n";

}

$user = [
    "name" => "Alvin",
    "age" => 20,
    "city" => "Nairobi"
];

foreach($user as $key => $value){
    echo" $key: $value\n";
}

$books = ["Naruto", "Bleach", "One Piece"];
foreach($books as $book){
    echo"book: $book\n";
}


?>