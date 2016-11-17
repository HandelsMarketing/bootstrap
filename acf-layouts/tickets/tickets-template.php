<div class="module ticketsModule <?= $this->getBackgroundClass(); ?>" <?= $this->hasBackgroundImage() ? 'style="background-image: url(\''. $this->getBackgroundImage().'\');"' : ''?>>
	<div class="ticketsModule-wrapper">
		<div class="ticketsModule-text">
			<?= $this->getText(); ?>
		</div><div class="ticketsModule-tickets">
			<?php
				foreach($this->getTickets() as $ticket) {
					$ticket->printHtml();
				}
			?>
		</div>
	</div>
</div>