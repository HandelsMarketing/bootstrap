<?php
	
	class StatementModule extends ACFModule {
		public function template() {
			return 'statement-template.phtml';
		}


		public function setBackgroundStyle( $style ) {
			$this->style = $style;
		}

		public function getBackgroundClass() {
			switch ( $this->style) {
				case "red":
					return 'module--red';
				case "dark":
					return 'module--dark';
				case "image":
					return "module--image";
			}

			return '';
		}


		public function hasBackgroundImage() {
			return $this->background_image != null && $this->style == 'image';
		}
		public function setBackgroundImage( $imageSrc ) {
			$this->background_image = $imageSrc;
		}

		public function getBackgroundImage() {
			return $this->background_image;
		}


		public function setStatement( $statement ) {
			$this->statement = $statement;
		}

		public function getStatement() {
			return $this->statement;
		}
	}