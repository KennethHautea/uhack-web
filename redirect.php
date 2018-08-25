<?php

class Redirect{

	function withFlashMessage($url,$flash_message){
		SESSION::set('flash_message',$flash_message);
		SESSION::set('flash_url',$url);
		return header('Location: '.$url);
	}
	
	function to($url){
		return header('Location: '.$url);
	}
}
?>