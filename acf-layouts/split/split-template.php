<div class="module splitModule splitModule--<?= $this->getImagePosition() ?> <?= $this->getBackgroundClass(); ?>" <?= $this->hasBackgroundImage() ? 'style="background-image: url(\''. $this->getBackgroundImage().'\');"' : ''?>>
	<div class="splitModule-wrapper">
		<div class="splitModule-text">
			<?= $this->getText();?>
		</div><div class="splitModule-image">
			<img src="<?= $this->getImageSource();?>">
		</div>
		<div style="clear:both"></div>
	</div>
</div>