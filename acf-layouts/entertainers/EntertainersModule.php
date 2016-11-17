<?php
	
	class EntertainersModule extends ACFModule {
		private $entertainers = [];

		public function template() {
			return 'entertainers-template.php';
		}


		public function addEntertainer($name, $bio, $imageSrc, $channels = array()) {
			$this->entertainers[] = new EntertainerBlock($name, $bio, $imageSrc, $channels);
		}

		public function getEntertainers() {
			return $this->entertainers;
		}

		public function setShouldShowBio( $shouldShow ) {
			$this->show_bio = $shouldShow;
		}

		public function shouldShowBio() {
			return $this->show_bio;
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



	class EntertainerBlock {
		private $name;
		private $bio;
		private $imageSrc;
		/**
		 * @var array
		 */
		private $channels;

		public function __construct($name, $bio, $imageSrc, $channels = array()) {
			$this->name = $name;
			$this->bio = $bio;
			$this->imageSrc = $imageSrc;



			$this->channels = array();
			if( is_array($channels )) {
				foreach( $channels as $channel) {
					$this->channels[] = new EntertainerChannel($channel['channel_type'], $channel['name'], $channel['link']);
				}
			}

		}


		public function printHTML() {
			include('entertainer-block.phtml');
		}


		public function getName() {
			return $this->name;
		}

		/**
		 * @return mixed
		 */
		public function getBio() {
			return $this->bio;
		}



		/**
		 * @return mixed
		 */
		public function getImageSrc() {
			return $this->imageSrc;
		}

		/**
		 * @return array
		 */
		public function getChannels() {
			return $this->channels;
		}
	}


	class EntertainerChannel {
		private $channel_type;
		private $name;
		private $link;

		public function __construct($channel_type, $name, $link) {
			$this->channel_type = $channel_type;
			$this->name = $name;
			$this->link = $link;
		}

		public function getIconClass() {
			switch($this->channel_type) {
				case 'twitch':
					return 'fa-twitch';
				case 'youtube':
					return 'fa-youtube';
				case 'instagram':
					return 'fa-instagram';
			}
			return '';
		}

		/**
		 * @return mixed
		 */
		public function getName() {
			return $this->name;
		}

		/**
		 * @return mixed
		 */
		public function getLink() {
			return $this->link;
		}


	}