<?php

class Twig_Loader_FleetingFilesystem extends Twig_Loader_filesystem {
	
	public function getCacheKey($name) {
		return filemtime($this->findTemplate($name));
	}

}