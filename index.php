<?php
require_once("./PaperClass.php");
//获取文章文件夹内的文件，使用静态文件的方式持久化数据
$dir = "./wenzhang";
$rows = $paperclass->getFile($dir);
if(is_array($rows)){
	foreach($rows as $key => $row){
		if($key !='.html'){
			echo "<a href='./$row'>".str_replace('.' . pathinfo($key,PATHINFO_EXTENSION), '',$key)."</a><br/>";
			// echo "&nbsp;<a href='./PaperClass.php/?'>删除</a><br/>";
		}
	}
}