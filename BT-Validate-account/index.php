<?php
function checkAccount($str){
    $regexp = "/^[_a-z0-9]{6,}$/";
    if(preg_match($regexp,$str)){
        echo "Tai khoan hop le";
    }else{
        echo "Tai khoan khong hop le";
    }
}
echo checkAccount("_12345");