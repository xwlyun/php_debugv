<?php
function getDebugV($filename){
	$branchs = array(	// 开发测试分支版本
		1=>'branch1',	// 版本号对应文件路径
		2=>'branch2',
	);
	$master = 'master';	// 线上在用主线版本

	if(isset($_GET['v'])){
		$v = intval($_GET['v']);
		if(isset($branchs[$v])){
			setcookie('debug_v',$v);
		}else{
			setcookie('debug_v','');
		}
	}else if($_COOKIE['debug_v']){
		$v = intval($_COOKIE['debug_v']);
	}

	if($v && isset($branchs[$v])){
		return "{$branchs[$v]}/{$filename}.php";
	}else{
		return "{$master}/{$filename}.php";
	}
}