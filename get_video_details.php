<?php

		 $url='https://www.youtube.com/watch?v='.$_POST['vid'];
		 $youtube = "http://www.youtube.com/oembed?url=". $url ."&format=json";
		
		 $curl = curl_init($youtube);
		 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		 $return = curl_exec($curl);
		 curl_close($curl);
		 echo $return;

?>