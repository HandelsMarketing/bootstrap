<?php

class TextBlock implements CallToActionBlock {

	/**
	* @var string
	*/
	private $imageSrc;
	/**
	* @var string
	*/
	private $link;

	public function __construct($title, $subtitle, $link) {

		$this->title = $title;
		$this->subtitle = $subtitle;
		$this->link = $link;
	}

	public function printHTML() {
		include('text-call-to-action.phtml');
	}

	/**
	* @return string
	*/
	public function getTitle() {
		return $this->title;
	}

	public function getSubtitle() {
		return $this->subtitle;
	}

	/**
	* @return string
	*/
	public function getLink() {
	return $this->link;
	}
}