<?php  
	$objeto["campo2"]="la luna está  
	en cuarto  

	menguante 
	"; 
	function js_encode($s){ 
	    $texto=''; 
	    $lon=strlen($s); 
	    for($i=0;$i<$lon;++$i){ 
	        $num=ord($s[$i]); 
	        if($num<16) $texto.='\x0'.dechex($num); 
	        else $texto.='\x'.dechex($num); 
	    } 
	    return $texto; 
	} 
	echo '<script>alert("'.js_encode($objeto["campo2"]).'");</script>'; 


	
?>