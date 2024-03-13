<?php

$random = rand(1,100000000);

$obj = ["random_numb" => $random];

echo(json_encode($obj));