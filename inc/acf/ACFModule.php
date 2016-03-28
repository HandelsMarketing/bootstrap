<?php

abstract class ACFModule {
	private 
		$vars = array(),
		$directory = null;


	abstract function template();



	private function directory() {
		if( $this->directory == null) {
			$reflection = new ReflectionClass($this);
			$this->directory = dirname($reflection->getFileName());
		}

		return $this->directory;
	}


	public function __get($name) {
		return $this->vars[ $name ];
	}

	public function __set($name, $value) {
		$this->vars[ $name ] = $value;
	}


	public function getHTML() {
		ob_start();
		include( $this->directory() . DIRECTORY_SEPARATOR . $this->template() );
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}


	

	public function printHTML() {
		echo $this->getHTML();
	}
}