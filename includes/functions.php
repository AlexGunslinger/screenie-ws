<?
if($connectme == "yes"){
	
	function stripslashes_deep($value){
		$value = is_array($value) ?
					array_map('stripslashes_deep', $value) :
					stripslashes($value);
		return $value;
	}
	
	
	function str_rand($length = 6, $seeds = 'alphanum'){
    	// Possible seeds
		$seedings['alpha'] = 'abcdefghijklmnopqrstuvwqyz';
		$seedings['numeric'] = '0123456789';
		$seedings['alphanum'] = 'abcdefghijklmnopqrstuvwqyz0123456789';
		$seedings['hexidec'] = '0123456789abcdef';
	
		// Choose seed
		if (isset($seedings[$seeds])){
			$seeds = $seedings[$seeds];
		}
	
		// Seed generator
		list($usec, $sec) = explode(' ', microtime());
		$seed = (float) $sec + ((float) $usec * 100000);
		mt_srand($seed);
	
		// Generate
		$str = '';
		$seeds_count = strlen($seeds);
	
		for ($i = 0; $length > $i; $i++){
			$str .= $seeds{mt_rand(0, $seeds_count - 1)};
		}
	
		return $str;
	}
	
	function translate_me($value){
	
		if(!empty($value)){
			
			if(!empty($_SESSION[languages][id])){
			
				$english_value = mysql_real_escape_string($value);
				mysql_query ("set character_set_results='utf8'");
				$translations = mysql_fetch_assoc(mysql_query("SELECT id, translated FROM translations WHERE languages_id = " . $_SESSION[languages][id] . " && english = '$english_value'"));
				
				if(!empty($translations[id])){
					
					echo "$translations[translated]";
					
				}else{
				
					echo "$value";
				
				}
				
			}else{
				
				echo "$value";
			
			}
		
		}
	
	}
	
	function sendEmailFrom($to, $from, $fromname, $subject, $message) {

		$url = 'http://sendgrid.com/';
		$user = 'screenie';
		$pass = 'screen2o1o'; 
		$post_string = '';
		$message = urlencode($message);
		
		$params = array(
			'api_user'  => $user,
			'api_key'   => $pass,
			'subject'   => $subject,
			'text'      => $message,
			'from'      => $from,
			'fromname'	=> $fromname,
		);
		foreach($params AS $key => $value) {
			$post_string .= '&'.$key.'='.$value;
		}
		if(strpos($to,',') !== false) {
			$emails = explode(',',$to);
			foreach($emails AS $email) {
				$email = str_replace(' ', '', $email);
				$post_string .= '&to[]='.$email;
			}
		} else {
			$post_string .= '&to='.$to;
		}
		$request =  $url.'api/mail.send.json';
		// Generate curl request
		$session = curl_init($request);
		curl_setopt ($session, CURLOPT_POST, true);
		curl_setopt ($session, CURLOPT_POSTFIELDS, $post_string);
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($session);
		curl_close($session);
		if($response)
			return true;
		else
			return false;
	}
	
}
?>