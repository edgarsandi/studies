<?php

interface Authentication {
	public function setPermissions($permissionGrantingFunction);
	public function authenticate();
}
