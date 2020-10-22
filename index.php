<?php
function isCheckCount($str) {
    $regexp = '/^[_a-z0-9]{6,}$/';
    if(preg_match($regexp,$str)) {
        echo "Account hơp lệ";
    } else {
        echo "Account Không hợp lệ";
    }
}
$str = "123abc_";
echo isCheckCount($str);