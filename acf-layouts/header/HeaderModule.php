<?php
	
	class HeaderModule extends ACFModule {

		public static $counter = 1;
		private static $isYTApiInitiated = false;


		public $id = null;

		public function setHeading( $heading ) {
			$this->heading = $heading;
		}

		public function getHeading() {
			return $this->heading;
		}

		public function setSubHeading( $subheader ) {
			$this->subheader = $subheader;
		}

		public function getSubHeading() {
			return $this->subheader;
		}


		public function setBackgroundType( $type = null ) {
			$this->type = $type;
		}

		public function getBackgroundType() {
			return $this->type;
		}


		public function getID() {
			if ( $this->id == null ) {
				$this->id = self::$counter++;
			}
			return $this->id;
		}


		public function setVideoRatio( $ratio ) {
			$this->ratio = $ratio;
		}

		public function getVideoRatio() {
			return $this->ratio;
		}


		public function setVideoPlaybackFinishedImage( $image_src ) {
			$this->video_playback_image = $image_src;
		}
		public function getVideoPlaybackFinishedImage() {
			return $this->video_playback_image;
		}


		public function setBackgroundImage( $image_src ) {
			$this->background_image = $image_src;
		}

		public function getBackgroundImage() {
			return $this->background_image;
		}






		function template() {
			return 'header-template.phtml';
		}

		public function YTApiInitiated() {
			self::$isYTApiInitiated = true;
		}

		public function isYTApiInitiated() {
			return self::$isYTApiInitiated;
		}

	}