<?php
//문자열의 시작과 끝에 있는 공백 없애기
//문자열 시작의 공백만 없앨 때는 ltrim()
//뒤에 있는 공백만 없앨 때는 rtrim()
//양쪽 다 없앨때는 trim()
$str =" 양쪽 모두 공백 넣었다 ";
echo '|'.trim($str).'|';//|는 공백 확인을 위해 사용
echo "<br>";

$str =" 앞쪽 공백 넣었다";
echo '|'.ltrim($str).'|';//|는 공백 확인을 위해 사용
echo "<br>";

$str ="뒷쪽 공백 넣었다 ";
echo '|'.rtrim($str).'|';//|는 공백 확인을 위해 사용
echo "<br>";

 ?>