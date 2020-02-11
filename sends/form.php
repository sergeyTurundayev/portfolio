<?php

if ( mail('sergey.turundayev@gmail.com', 'subject', 'message') ){
	echo "true";
} else{
	echo "error";
}

exit();

?>