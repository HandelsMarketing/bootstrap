<div class="ticket">
	<div class="ticket-image ticket-image--<?= $this->getColor(); ?>">
		<img src="<?= $this->getImageSource(); ?>">
	</div><div class="ticket-content">
		<h2 class="ticket-name"><?= $this->getName(); ?></h2>
		<?= $this->getText(); ?>
		<ul class="ticket-content-list">
			<?php foreach( $this->getContent() as $content): ?>
			<li><?= $content ?></li>
			<?php endforeach; ?>
		</ul>
	</div><div class="ticket-prices">
		<div class="ticket-price"><?= $this->getPrice(); ?> SEK</div>
		<div class="ticket-fee">+ serviceavgift <?= $this->getFee(); ?> SEK</div>
		<a href="<?= $this->getPurchaseLink(); ?>"><button class="ticket-purchase-button">Köp</button></a>
	</div>
</div><div class="ticket-spacer"></div>