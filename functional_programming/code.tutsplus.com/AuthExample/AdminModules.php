<?php

class AdminModules {

	private $authPlugin;

	public function __construct(Authentication $authPlugin) {
		$this->authPlugin = $authPlugin;
	}

	public function allowRead($username) {
		return "yes";
	}

	public function allowWrite($username) {
		return "no";
	}

	public function allowExecute($username) {
		return $username == "joe" ? "yes" : "no";
	}

	public function authenticate() {
		$this->authPlugin->setPermissions(
		    function($username) {
		    	$permissions = array();
				$permissions[] = $this->allowRead($username);
				$permissions[] = $this->allowWrite($username);
				$permissions[] = $this->allowExecute($username);
				return $permissions;
		    }
		);
		$this->authPlugin->authenticate();
	}

}