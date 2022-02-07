<?php
$str = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
if (preg_match($str,"a@gmail.com")){
    echo "email hop le";
}else{
    echo "email khong hop le";
}