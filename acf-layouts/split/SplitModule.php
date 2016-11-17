<?php
	
	class SplitModule extends ACFModule {

		public function __construct($text, $imageSource, $imagePosition = 'right') {
			$this->setText($text);
			$this->setImageSource($imageSource);
			$this->setImagePosition($imagePosition);
		}

		public function template() {
			return 'split-template.php';
		}

		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setImageSource( $imageSource) {
			$this->imageSource = $imageSource;
		}

		public function getImageSource() {
			return $this->imageSource;
		}

		public function setImagePosition( $position ) {
			$this->imagePosition = $position;
		}

		public function getImagePosition() {
			return $this->imagePosition;
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

	}