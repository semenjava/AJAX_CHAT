<?php
class CustomAJAXChatShoutBox extends CustomAJAXChat {

	function initialize() {
		// Initialize configuration settings:
		$this->initConfig();
	}

	function getShoutBoxContent() {
		$template = new AJAXChatTemplate($this, AJAX_CHAT_PATH.'lib/template/shoutbox.html');
		
		// Return parsed template content:
		return $template->getParsedContent();
	}

}
