<?php

class ImageBlock implements CallToActionBlock {

	/**
	* @var string
	*/
	private $imageSrc;
	/**
	* @var string
	*/
	private $link;

	public function __construct($imageSrc, $link) {

	$this->imageSrc = $imageSrc;
	$this->link = $link;
	}

	public function printHTML() {
	include('image-call-to-action.phtml');
	}

	/**
	* @return string
	*/
	public function getImageSource() {
	return $this->imageSrc;
	}

	/**
	* @return string
	*/
	public function getLink() {
	return $this->link;
	}
}