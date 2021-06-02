<?php
/*date format
 Day : d = dd , j = d/dd , D = day (three letters) , l full name
 Mobth : m = mm , M = Month (three letters) , F full name
 Year : y = yy , Y = yyyy
 Hour : H
 Minutes : i
 Seconds : s
 date thai format
    thaidate('format' , date);
    composer require phattarachai/thaidate
*/
function Fdate_dmY2Utail($date , $explode , $toformat) {
    $exdate = explode($explode,$date);
    $date = $exdate[2]."-".$exdate[1]."-".$exdate[0];
    $date = date_create($date);
	return date_format($date,$toformat);
}
function Fdate_Ymd2Utail($date , $toformat) {
    $date = date_create($date);
	return date_format($date,$toformat);
}

function RandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function gotopage($url) {
	echo "<script language='javascript'>";
	echo " parent.window.location='".$url."'; ";
	echo "</script>";
}
function msgbox($text,$url) {
	echo "<script language='javascript'>";
	echo " alert('".$text."'); ";
	echo " parent.window.location='".$url."'; ";
	echo "</script>";
}
function error() {
	echo "<script language='javascript'>";
	echo " parent.window.location='index.php'; ";
	echo "</script>";
}
?>
