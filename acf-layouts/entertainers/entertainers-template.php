<div class="module entertainersModule <?= $this->shouldShowBio() ? '' : 'entertainersModule--hideBio'; ?> <?= $this->getBackgroundClass(); ?>" <?= $this->hasBackgroundImage() ? 'style="background-image: url(\''. $this->getBackgroundImage().'\');"' : ''?>>
	<div class="entertainersModule-wrapper">
		<?php
			foreach( $this->getEntertainers() as $entertainer) {
				$entertainer->printHTML();
			}
		?>
	</div>
</div>