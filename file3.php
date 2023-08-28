<?php
// 예제 데이터
$inputData = array(
    "name" => "John's \"example\" input",
    "email" => "john@example.com",
    "message" => "Hello, this is a test message \\ with slashes."
);

// 마법 슬래시 제거 함수
function bootStripSlashesDeep($value) {
    return is_array($value) ? array_map('bootStripSlashesDeep', $value) : stripslashes($value);
}

// 출력
echo "Name: " . $inputData["name"] . "<br>";
echo "Email: " . $inputData["email"] . "<br>";
echo "Message: " . $inputData["message"] . "<br>";
echo "-----------------------------------<br />";
// 예제 데이터에 마법 슬래시 적용

if (get_magic_quotes_gpc()) {
    $inputData = bootStripSlashesDeep($inputData);
}


// 출력
echo "Name: " . $inputData["name"] . "<br>";
echo "Email: " . $inputData["email"] . "<br>";
echo "Message: " . $inputData["message"] . "<br>";
?>