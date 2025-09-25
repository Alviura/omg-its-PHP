<?php
$countries = [
    "Kenya",
    "Uganda",
    "Tanzania",
    "Egypt",
    "Sudan"
];

foreach($countries as $country){
    echo"$country\n";
}

$students = [
    "Gacheche"=> 39,
    "Alvin"=> 41,
    "Kimotho"=> 96,
    "Collins"=> 32,
    "Rizer"=> 45,
    "Queen"=> 54
];

$total = 0;
$count = 0;

foreach($students as $name=>$score){
    $total += $score;
    $count ++;

    if ($score >= 40){
        echo "Student $name has passed\n";
    } else {
        echo "Student $name has failed\n";
    }
}
$averageScore = $total / $count;
echo ($averageScore);

$marks = [
    "Alvin"=> ["Math" => 70, "Eng"=> 73, "Sci"=>32],
    "Lesslie"=>["Math"=> 21, "Eng"=> 54, "Sci"=> 14],
    "Mark"=>["Math"=> 67, "Eng"=> 90, "Sci"=>100]
];

foreach($marks as $student=> $scores){
    echo ($student ."'s score:\n");
    
    foreach($scores as $subject=>$score){
        echo($subject .":". $score. "\n");
    }
    echo"\n";
}