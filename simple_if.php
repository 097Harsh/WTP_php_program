<?php 

$maths = 80;
$sci = 60;
$english = 70;
$total = $maths + $sci + $english;
$avg = $total / 3;

if($avg >= 35){
    if($avg >= 60){
        echo "You have passed the exam with an Good score of $avg.";
    }
    else {
        echo "You have passed the exam with an average score of $avg, but you need to improve.";
    }
}

else {
    echo "You have failed the exam with an average score of $avg.";
}
?>