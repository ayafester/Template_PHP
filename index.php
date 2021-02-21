<?
header('Content-type: text/html; charset=utf-8');
$title = "Тестовая страница";
$content = "Тестовая страница шаблонизатора";

$host = 'localhost';
$user = 'mestnikova';
$pass = 'ZnjUe6Lx';
$db_name = 'mestnikova';
$link = mysqli_connect($host, $user, $pass, $db_name);
mysqli_query($link, 'SET NAMES utf8');


$file = file_get_contents("template.html");
$file=str_replace('{title}',$title,$file);
$file=str_replace('{content}',$content,$file);
print $file;
?>
