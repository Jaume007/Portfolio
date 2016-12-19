<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 2</title>
</head>
<body>
<?php
$students = array(
    "A" => array("Ludo", "Josep", "Neus"),
    "B" => array("Jaume Llopis", "Jaume Florit", "Xavi Reus"),
    "C" => array("Jaume Pons", "Erik Rodrigo", "Joel"),
    "D" => array("Jesus", "Sergi", "Xavi Raga")
);
function mode1($students){
    echo "<h1>Group Task Choosing</h1>";
    shuffle($students);
    for ($i=0;$i<4;$i++){
    $student=rand(0,2);
    echo "<p>Student ".($i+1)." : ".$students[$i][$student]."</p>";
    }
}
function mode2($students){
    echo "<h1> Individual Task Choosing</h1>";
    shuffle($students);
    echo  "<ol>";
    for ($i=0;$i<4;$i++){
        shuffle($students[$i]);
        foreach ($students[$i] as $student){
            echo "<li>".$student."</li>";
        }
    }
    echo "</ol>";
}

function mode3($students,$type,$tasks){
    echo "<h1>Task Distribution</h1>";
    if ($type==0) {
        shuffle($tasks);
        $i = 0;
        $j = 0;
       $groups=array(
           array(),
           array(),
           array(),
           array()
       );
        while ($i < count($tasks)) {
            $groups[$j][]=$tasks[$i];
            $i++;
            if($j==3){
                $j=0;
            }else {
                $j++;
            }

        }
        shuffle($groups);

        for ($l="A",$i=0;$l<="D";$l++,$i++){
        echo "<ul>
                <li>Group ".$l."<ul>";
        foreach($groups[$i] as $group){
            echo"<li>".$group."</li>";
        }
        echo "</ul></li></ul>";
        }
    }
    if($type==1){

        $student=array();
        foreach ($students as $group){
            foreach($group as $stu){
                $student[]=$stu;
            }
        }


        shuffle($student);
        shuffle($tasks);
        $task=array();
        for ($i=0,$l=0;$i<count($tasks);$i++,$l++){
            if ($l==count($student)){ $l=0;}
            $task[$l]=$task[$l]." ".$tasks[$i];
        }
        echo "<ol>";
        for($i=0;$i<count($task);$i++){
            echo "<li style='margin-top: 10px'>".$student[$i]."<ul><li style='margin-top: 5px'>".$task[$i]."</li></ul></li>";
            }
        echo "</ol>";

    }

}
$tasks=array("Task1","Task2","Task3","Task4","Task5","Task6","Task7","Task8","Task9","Task10","Task11","Task12");//,"Task13","Task14");
//mode1($students);
//mode2($students);
mode3($students,0,$tasks);
//mode3($students,1,$tasks);
?>
</body>
</html>