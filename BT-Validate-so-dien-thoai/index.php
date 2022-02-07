<?php
function checkPhoneNumber($str){
    $regexp = "/^[(]{1}+[0-9]{2}+[)]{1}+[-]{1}+[(]{1}+[0]{1}+[0-9]{9}+[)]{1}$/";
    if (preg_match($regexp,$str)){
        echo "So dien thoai hop le";
    }else{
        echo "So dien thoai khong hop le";
    }
}
echo checkPhoneNumber("(88)-(0222222222)");