<?php
	function prompt_timer(){
		ob_start();
		include(TAPINTU_JORUNAL_PATH."/views/journal-prompt.html.php");
		$content = ob_get_clean();
		return $content;
	}