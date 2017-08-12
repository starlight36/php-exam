<?php
$paperclass = new PaperClass();
if($_POST){
	$title = $_POST['title'];
	$abstract = $_POST['abstract'];
	$content = $_POST['content'];
	$ret = $paperclass->paperMage($title,$abstract,$content);
	if($ret == false){
		echo "<script>alert('failed.');location.href='./admin.php';</script>";
	}else{
		echo "<script>alert('success.');location.href='./index.php';</script>";
	}
}
class PaperClass{
	//文章发布管理
	public function paperMage($title,$abstract,$content){
		$file_dir = 'wenzhang';
		$file = './wenzhang/'.$title.'.html';

		//定义html文件标签
		$temp=$temp."<html>";
		$temp=$temp."<head>";
		$temp=$temp."<title>";
		$temp=$temp.$title;
		$temp=$temp."</title>";
		$temp=$temp."<meta http-equiv='Content-Type' content='text/html; charset=utf8'>";
		$temp=$temp."</head>";
		$temp=$temp."<body>";
		$temp=$temp."<table border='1' cellpadding='2' cellspacing='1'><tr><td><b>标题<b></td><td><font size='3'><b>";
		$temp=$temp.$title;
		$temp=$temp."</b></font></td></tr>";
		$temp=$temp."<tr><td>简介</td><td><font size='2'>";
		$temp=$temp.$abstract;
		$temp=$temp."</font></td></tr>";
		$temp=$temp."<tr><td>内容</td><td><font size='2'>";
		$temp=$temp.$content;
		$temp=$temp."</font></td></tr></table>";
		$temp=$temp."</body>";
		$temp=$temp."</html>";

		if(file_exists($file)){
			echo "<script>alert('标题不能为空或已经存在！');location.href='./admin.php';</script>";
		}else{
			$fp = fopen("$file_dir/$title.html",'w'); 
			if(fwrite($fp,$temp)){
				return true;
			}else{
				return false;
			}
			fclose($fp);
		}
	}

	//查看文章
	public function getFile($dir){
		$result = array();
		$handle =@opendir($dir);
		if(!$handle){
			die("open file false");	
		}
		echo "<a href='./admin.php'><button>发布文章</button></a><br/>";
		echo "文章列表，点击查看内容"."<br/>";
		while(($filename = readdir($handle)) !== false){
			if($filename != "." && $filename != ".."){
				$dir_paper = $dir.'/'.$filename;
				$result[$filename] = $dir_paper;
			}

		}
		closedir($handle);
		return $result;
		
	}

	//删除文章
	public function deletePaper($dir_paper){
		// if($dir_paper){
		// 	unlink($dir_paper);
		// }
		var_dump($dir_paper);
	}
}