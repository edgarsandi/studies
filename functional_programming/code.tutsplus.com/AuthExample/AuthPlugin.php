<?php

class AuthPlugin implements Authentication {

	private $permissions = array();
	private $appModule;
	private $permissionsFunction;

	public function __construct(ApplicationModule $appModule) {
		$this->appModule = $appModule;
	}

	public function authenticate($username, $password) {
		$this->verifyUser($username, $password);
		$this->permissions = $this->permissionsFunction($username);
	}

	private function verifyUser($username, $password) {

	}

	public function setPermissions($permissionGrantingFunction) {
		$this->permissionsFunction = $permissionGrantingFunction;
	}
}