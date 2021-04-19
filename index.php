<?php
$data = ['a@gmail.com', 'ab@yahoo.com', 'abc@hotmail.com', '@gmail.com', 'ab@gmail.', '@#abc@gmail.com'];

function checkEmail($str)
{
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp, $str)) {
        echo ("$str is an valid email.") . '<br>';
    } else {
        echo ("$str is an invalid email.") . '<br>';
    }
}

foreach ($data as $email) {
    checkEmail($email);
}
