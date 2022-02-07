<?php
function checkClassName($str){
    $regexp = "/^[CAP]{1}+[0-9]{4}+[GHIKLM]{1}$/";
    if(preg_match($regexp,$str)){
        echo "Ten lop hop le";
    }else{
        echo "Ten lop khong hop le";
    }
}
echo checkClassName("C0318GHI");