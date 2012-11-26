<?php
define('MAXVALUE', 1000);
function isPrime($x){
	$prime=true;

	if($x <=1){
		return false;
	}

    $k=(int)(sqrt($x));  
    for($i=2; $i<=$k; $i++){ 
        if($x % $i==0){  
            return false;  
        }  
    }  
    return true;  
}

function reverseNum($x){
	$k = 0;
	if($x < 10){
		$k = $x;
	}else{
		while($x >= 1){
			$k = $k*10 + $x%10;
			$x = (int)$x/10;
		}
	}
	return $k;
}

function isPalindrome($x){
	if(reverseNum($x) == $x){
		return true;
	}else{
		return false;
	}
}

for($i=MAXVALUE; $i>0; $i--){
	
	if(isPalindrome($i) && isPrime($i)){
		$stdout = fopen('php://stdout', 'w');
		fwrite($stdout, $i);
		fclose($stdout);
		return;
	}
}

?>
