<?php
	
	class ACF_Example extends ACFModule {
		public function template() {
			return 'example-template.php';
		}



		public function baz() {
			return "baz";
		}
	}