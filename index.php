<?php
	include_once 'head.php';	// it must be 'included_once' because mobile does not load head.php inside g5_path/index.php
	
	if ( $in['page'] ) include x::theme( $in['page'] );
	else {
		include 'content.php';
	}

	
	/** tail.php is included by G5_PATH/index.php */
	
	