<?php

$pageTitle = "Home";
include 'task3(1).php';
require 'task3(4).php';
foreach ($users as $user) :
?>
    <div class="box" style="width: 10rem;background-color:<?= $user['clr'] ?>;">
        <div class="box-body">
            <h5 class="box-title"><?= $user['name'] ?></h5>
            <h6 class="box-subtitle text-body-secondary"><?= $user['age'] ?></h6>
            <a href="#" class="box-link">link</a>
            <a href="###" class="box-link">Another link</a>
        </div>
    </div>
<?php
endforeach;
?>
<br>
<?php
$arry1 = [1, 2, 3, 4, 5];
$arry2 = [2, 3, 4];

echo in_array(3, $arry1) ? 'Found' : 'Not Found';


echo '<pre>';
print_r(array_merge($arry1, $arry2));
echo '</pre>';
echo '<pre>';
print_r(array_diff($arry1, $arry2));
echo '</pre>';
echo '<pre>';
print_r(array_diff_assoc($arry1, $arry2));
echo '</pre>';

?>
