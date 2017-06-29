<?php
if(!function_exists('level_help')){
	function level_help($params){
 
		if($params == 1){
			$res = 'kasie';
		}else if($params == 2){
			$res = 'foreman';
		}else if($params == 3){
			$res = 'karyawan';
		}else if($params == 4){
			$res = 'ahmic';
		}else if($params == 5){
			$res = 'admin';
		}else{
			$res = 'not found';
		}
		
		return $res;
	}
}
?>