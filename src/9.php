<?php
$math_homework = array();
for ($i=0; $i<10; $i++) {
  $problem = rand(1,5);
  $solution = rand(1,10);
  $math_homework[] = array($problem,$solution);
}
echo json_encode($math_homework);
?>