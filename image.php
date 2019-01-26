<?php
/**
* captcha.php
*
* @author Yukky
* @copyright 2018~ @Xere_Yukky
*/ 
require "define.php";

function image() {
try{
$dsn = 'mysql:host='.DBServer.';dbname='DBNAME';charset=utf8';
$db = new PDO($dsn,DBUser,DBPassword);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT count(id) FROM Caputcha_Image';
$prepare = $db->prepare($sql);
$prepare->execute();
$images_count = $prepare->fetchColumn();

}catch (PDOException $e) {
return false;
}
$rand = mt_rand(1,$images_count);
try{
$sql = 'SELECT * FROM Caputcha_Image WHERE id=:name';
$prepare = $db->prepare($sql);
$prepare->bindValue(':name',$rand, PDO::PARAM_INT);
$prepare->execute();
$images = $prepare->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $e){
//$e->getMessage();
return false;
}
$data = 'data:image/jpeg;base64,' . base64_encode($images<'image'>);
return array ($data,$images<'pass'>);
}
