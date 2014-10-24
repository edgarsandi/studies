<?php

class FunSets {
	public function contains($set, $elem) {
		return $set($elem);
	}
}