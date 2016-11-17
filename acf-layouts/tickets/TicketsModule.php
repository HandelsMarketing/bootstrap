<?php
	
	class TicketsModule extends ACFModule {

		private $tickets = [];


		public function __construct($text, $link) {
			$this->setText($text);
			$this->setLink($link);
		}


		public function setText($text) {
			$this->text = $text;
		}
		public function getText() {
			return $this->text;
		}

		public function setLink($link) {
			$this->link = $link;
		}
		public function getLink() {
			return $this->link;
		}

		public function template() {
			return 'tickets-template.php';
		}

		public function addTicket($name, $price, $fee, $text, $content, $imageSource, $color, $purchase_link = null) {
			$this->tickets[] = new Ticket($name, $price, $fee, $text, $content, $imageSource, $color, $purchase_link == null ? $this->getLink() : $purchase_link);
		}

		public function getTickets() {
			return $this->tickets;
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


	class Ticket {

		private $name;
		private $price;
		private $fee;
		private $text;
		private $content;
		private $imageSource;
		private $color;
		private $purchase_link;

		public function __construct($name, $price, $fee, $text, $content, $imageSource, $color, $purchase_link) {

			$this->name = $name;
			$this->price = $price;
			$this->fee = $fee;
			$this->text = $text;
			$this->content = $content;
			$this->imageSource = $imageSource;
			$this->color = $color;
			$this->purchase_link = $purchase_link;
		}

		/**
		 * @return mixed
		 */
		public function getContent() {
			return $this->content;
		}

		/**
		 * @return mixed
		 */
		public function getText() {
			return $this->text;
		}

		/**
		 * @return mixed
		 */
		public function getFee() {
			return $this->fee;
		}

		/**
		 * @return mixed
		 */
		public function getPrice() {
			return $this->price;
		}

		/**
		 * @return mixed
		 */
		public function getName() {
			return $this->name;
		}

		public function printHtml() {
			include('ticket-template.php');
		}

		/**
		 * @return mixed
		 */
		public function getImageSource() {
			return $this->imageSource;
		}

		/**
		 * @return mixed
		 */
		public function getColor() {
			return $this->color;
		}

		/**
		 * @return mixed
		 */
		public function getPurchaseLink() {
			return $this->purchase_link;
		}


	}