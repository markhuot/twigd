<?php

class Twig_Loader_FleetingFilesystem extends Twig_Loader_filesystem {
	
	public function getCacheKey($name) {
		return $this->findTemplate($name) . filemtime($this->findTemplate($name));
	}

	public function isFresh($name, $time) {
		return false;
	}

}