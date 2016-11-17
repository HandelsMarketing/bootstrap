<div class="module countdownModule <?= $this->getBackgroundClass(); ?>" <?= $this->hasBackgroundImage() ? 'style="background-image: url(\''. $this->getBackgroundImage().'\');"' : ''?>>
	<div class="countdownModule-wrapper">
		<div class="countdown">
			<div class="countdown-info-wrapper">
				<h2 class="countdown-title"><?= $this->getTitle(); ?></h2>
				<span class="countdown-fine-location"><?= $this->getFineLocation(); ?></span>
				<span class="countdown-coarse-location"><?= $this->getCoarseLocation(); ?></span>
			</div><div class="countdown-date-wrapper">
				<div class="countdown-date">
					<span class="countdown-date-date"><?= $this->getDate();?></span>
					<span class="countdown-date-month"><?= $this->getMonth(); ?></span>
				</div>
			</div><div class="countdown-timer-wrapper">
				<span class="timer-label">Tid kvar:</span>
				<div class="timer">
					<div class="timer-block timer-block--days">
						<span id="countdown-<?= $this->getUUID(); ?>-days" class="timer-block-value"><?= $this->getDaysUntil(); ?></span>
						<span class="timer-block-label">Days</span>
					</div><div class="timer-block timer-block--hours">
						<span id="countdown-<?= $this->getUUID(); ?>-hours" class="timer-block-value"><?= $this->getHoursUntil(); ?></span>
						<span class="timer-block-label">Hours</span>
					</div><div class="timer-block timer-block--minutes">
						<span id="countdown-<?= $this->getUUID(); ?>-minutes" class="timer-block-value"><?= $this->getMinutesUntil(); ?></span>
						<span class="timer-block-label">Minutes</span>
					</div><div class="timer-block timer-block--seconds">
						<span id="countdown-<?= $this->getUUID(); ?>-seconds" class="timer-block-value"><?= $this->getSecondsUntil();?> </span>
						<span class="timer-block-label">Seconds</span>
					</div>
				</div>
				<script>
					(function() {
						var uuid = <?= $this->getUUID(); ?>;

						var daysEl =      document.getElementById("countdown-"+uuid+"-days"),
							hoursEl =     document.getElementById("countdown-"+uuid+"-hours"),
							minutesEl =   document.getElementById("countdown-"+uuid+"-minutes"),
							secondsEl =   document.getElementById("countdown-"+uuid+"-seconds");

						var days = daysEl.innerHTML,
							hours = hoursEl.innerHTML,
							minutes = minutesEl.innerHTML,
							seconds = secondsEl.innerHTML;

						setInterval(function() {
							seconds--;
							secondsEl.innerHTML = seconds;

							if( seconds < 0 ) {
								seconds = 59;
								secondsEl.innerHTML = seconds;
								minutes--;
								minutesEl.innerHTML = minutes;
							}

							if( minutes < 0) {
								hours--;
								minutes = 59;
								minutesEl.innerHTML = minutes;
								hoursEl.innerHTML = hours;
							}

							if( hours < 0) {
								days--;
								hours = 23;
								hoursEl.innerHTML = hours;
								daysEl.innerHTML = days;
							}

							if( days < 0) {
								days = 0;
							}

						},1000);

					})();
				</script>
			</div>
				<a href="#">
					<button class="countdown-cta">Köp biljett nu</button>
				</a>
		</div>
	</div>
</div>