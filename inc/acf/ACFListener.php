<?php

	class ACFListener {

		public static function fields() {

			if( !file_exists( get_template_directory() . '/acf-layouts/') ) {
				throw new Exception("ACF Layout directory (acf-layouts) not found");
			}



			/*
				Get all passed fields
			*/
			$fields = func_get_args();

			foreach($fields as $field) {

				if( have_rows($field) ) {
					while( have_rows($field) ) {
						the_row();

						$init_file = get_template_directory() . '/acf-layouts/'.get_row_layout().'/init.php';
						if(file_exists($init_file)) {
							include($init_file);
						} else {
							throw new Exception("ACF Layout ".$init_file." not found");
						}
					}
				}	
			}

		}

	}