<?php

	class CountdownModule extends ACFModule {

		private
			$hasCalculatedTime = false,
			$daysuntil,
			$hoursuntil,
			$minutesuntil,
			$secondsuntil;

		private $UUID;

		public function __construct($date, $title, $location_fine, $location_coarse) {
			$this->setDate($date);
			$this->setTitle($title);
			$this->setFineLocation($location_fine);
			$this->setCoarseLocation($location_coarse);
			$this->createUUID();

		}

		private function createUUID() {
			$this->UUID = rand(0,100);
		}

		protected function getUUID() {
			return $this->UUID;
		}

		public function setDate($date) {
			$this->date = $date;
		}
		public function setTitle($title) {
			$this->title = $title;
		}

		public function setFineLocation($fine_location) {
			$this->fine_location = $fine_location;
		}
		public function setCoarseLocation($coarse_location) {
			$this->coarse_location = $coarse_location;
		}

		public function getDate() {
			return date("d", $this->date);
		}

		public function getMonth() {
			return date("M", $this->date);
		}


		private function calcTimeUntil() {
			if($this->hasCalculatedTime) {
				return;
			}


			$diff = ($this->date - strtotime("now"));

			$this->daysuntil = floor($diff / 86400);
			$diff -= $this->daysuntil*86400;

			$this->hoursuntil = floor($diff / 3600);
			$diff -= $this->hoursuntil*3600;

			$this->minutesuntil = floor($diff / 60);
			$diff -= $this->minutesuntil*60;

			$this->secondsuntil = $diff;

			$this->hasCalculatedTime = true;

		}


		public function getDaysUntil() {
			$this->calcTimeUntil();
			return $this->daysuntil;
		}

		public function getHoursUntil() {
			$this->calcTimeUntil();
			return $this->hoursuntil;
		}

		public function getMinutesUntil() {
			$this->calcTimeUntil();
			return $this->minutesuntil;
		}

		public function getSecondsUntil() {
			$this->calcTimeUntil();
			return $this->secondsuntil;
		}
		
		public function getTitle() {
			return $this->title;
		}

		public function getFineLocation() {
			return $this->fine_location;
		}

		public function getCoarseLocation() {
			return $this->coarse_location;
		}





		public function template() {
			return 'countdown-template.php';
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