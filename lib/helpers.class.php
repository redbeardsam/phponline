<?php
class Helpers {
	
	public static function dd($mVal){
		
		echo "<pre>";
			//print_r($mVal);
			var_dump($mVal);
		echo "</pre>";	
	}

	public static function checkPassw($sPassw, $sHash){
		
		$sPasswHash = md5($sPassw);

		if($sPasswHash === $sHash) return true;
		return false;
	}
}
?>