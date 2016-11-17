<?php

include_once('ImageBlock.php');
include_once('TextBlock.php');


	class CallToActionsModule extends ACFModule {

		private $blocks = [];
		private $expandFirst = true;

		public function template() {
			return 'call-to-actions-template.phtml';
		}


		public function setExpandFirst($expandFirst) {
			$this->expandFirst = $expandFirst;
		}
		public function expandFirst() {
			return $this->expandFirst;
		}


		public function addImageBlock( $image, $link ) {
			$this->blocks[] = new ImageBlock($image, $link);
		}

		public function addTextBlock( $title, $subtitle, $link ) {
			$this->blocks[] = new TextBlock($title, $subtitle, $link);
		}


		public function getBlocks() {
			return $this->blocks;
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

	interface CallToActionBlock {
		public function printHTML();
	}

