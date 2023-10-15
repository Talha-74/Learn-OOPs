<?php

class Student
{
    public $marks;
    public $name;
    public $rollno;

    public function examResults($sub1, $sub2, $sub3)
    {
        $this->marks = $sub1 + $sub2 + $sub3;

        if ($sub1 >= 35 && $sub2 >= 35 && $sub3 >= 35) {
            echo "Your total marks: " . $this->marks . " Welldone!." . "<br>";
        } 
        
        else if ($sub1 > 100 || $sub2 > 100 || $sub3 > 100) {
            echo "Maximum marks per subject is 100. Please put the correct numbers." . "<br>";
        } 
        
        else {
            echo "Your total marks: " . $this->marks . " is less than the required criteria" . "<br>" . "Better luck next time";
        }
    }
}

$std1 = new Student();
$std1->name = 'Talha';
$std1->rollno = 17;

echo "Dear " . $std1->name . " Your roll no is " . $std1->rollno . ". Below is the details of your result" . "<br>";
echo $std1->examResults(23, 80, 77);
